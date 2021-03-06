<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
//.............For Registration...........//
    function add_admin($fullname, $email, $password)
    {
        
        $this->db->select('*');
        $this->db->from('my_users');
        $this->db->where('full_name', $fullname);
        $this->db->where('email', $email);
		$this->db->where('is_admin', 1);
        $query = $this->db->get();
        $login = $query->row();

        if ($login) {

            return 1;
        } else {
            date_default_timezone_set("Asia/Kolkata");
            $date = date('Y-m-d h:i:sa ');
            $password = $this->encryption->encrypt($password);
            $formArray = array(
                'full_name' => $fullname,
                'email'  => $email,
                'password' => $password,
                'created_by' => 1,
                'is_admin' => true,
                'created_on' => $date
            );
            $this->db->insert('my_users', $formArray);
            $last_id = $this->db->insert_id();

            $this->session->set_userdata('full_name', $fullname);
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('user_id', $last_id);

            set_cookie('fullname',$fullname,'3600'); 
			$this->input->set_cookie('email',$email,'3600'); 
			$this->input->set_cookie('user_id',$last_id,'3600'); 
            return $fullname;
        }
    }


    function check_login()
    {
        $email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$this->db->select('*');
		$this->db->from('my_users');
		$this->db->where('email',$email);
		$this->db->where('is_admin', 1);
		$query=$this->db->get();
		$login=$query->row();
        $password1 = $this->encryption->decrypt($login->password);

        if ($password1==$password) {
            $this->session->set_userdata('full_name', $login->full_name);
            $this->session->set_userdata('email', $login->email);
            $this->session->set_userdata('user_id', $login->user_id);

            $this->input->set_cookie('fullname',$login->full_name,'3600'); 
			$this->input->set_cookie('email',$login->email,'3600'); 
			$this->input->set_cookie('user_id',$login->user_id,'3600'); 

            return $login->full_name;
		} else {
			return 0;
		}
    }


//.............Inserting Records...........//
    function import_users($fullname, $email, $password)
    {
        date_default_timezone_set("Asia/Kolkata");
        $date = date('Y-m-d h:i:sa ');

        $user_id = $this->session->userdata('user_id');
        $password = $this->encryption->encrypt($password);
        
        $formArray = array(
            'full_name' => $fullname,
            'email'  => $email,
            'password' => $password,
            'created_by' => $user_id,
            'is_admin' => false,
            'created_on' => $date
        );
        $this->db->insert('my_users', $formArray);
    }


}
