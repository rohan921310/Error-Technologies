<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function registration()
	{
		if ($this->session->userdata('user_id') || get_cookie('user_id')) {
			redirect(base_url().'dashboard');
        } else {
            $this->load->view('registration');
        }
	}

	public function check_form()
	{
		$this->form_validation->set_rules('fullname', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
        extract($this->input->post());

		if ($this->form_validation->run() ==false){
			$this->load->view('registration');
		}else{

			if(strlen($fullname) >= 2 && strlen($password) >= 2){
				$name = $this->Admin_model->add_admin($fullname, $email, $password);
				if($name==1){
					$this->session->set_flashdata('msg', 'Already Registered');
					$this->session->set_flashdata('msg_class', 'bg-danger text-white');
					redirect(base_url().'registration');
				}else{
					$this->session->set_flashdata('success', 'Welcome '.$name );
					redirect(base_url().'dashboard');
				}
				
			}else{
				$this->session->set_flashdata('msg', 'Error');
				$this->session->set_flashdata('msg_class', 'bg-danger text-white');
				redirect(base_url().'registration');
			}
		
		}

	}


	function login_user()
	{
		if ($this->session->userdata('user_id') || get_cookie('user_id')) {
			redirect(base_url().'dashboard');
        } else {
            $this->load->view('login');
        }
	}

	function check_login()
	{
		$resutl=$this->Admin_model->check_login();
		if($resutl) {
			$this->session->set_flashdata('success', 'Welcome '.$resutl);
			redirect(base_url().'dashboard');
	   } else {
		$this->session->set_flashdata('msg', 'Invalid Details');
		$this->session->set_flashdata('msg_class', 'bg-danger text-white');
		redirect(base_url().'login');
	   }
	}
 
	
}
