<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        error_reporting(0);

        if ($this->session->userdata('user_id')) {
        } else {
            $this->session->set_flashdata('msg', 'Please Register First');
            $this->session->set_flashdata('msg_class', 'bg-danger text-white');
            redirect(base_url());
        }
    }

    function dashboard()
    {
        $this->load->view('dashboard');
    }



    function check_csv()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'csv';
        // $config['max_size']             = 2000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('csv_file')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors());
            $this->session->set_flashdata('msg_class', 'danger');
            redirect(base_url() . 'dashboard');
        } else {
            $data =  $this->upload->data();
            $image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);

            //.....Random String.....//
            function generateRandomString($length = 6)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            //.....Reading File.....//
            $csvFile = fopen($image_path, "r");
            while (($row = fgetcsv($csvFile)) !== FALSE) {
                $password = generateRandomString();
                $this->Admin_model->import_users($row[0], $row[1], $password);

                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'smtp.elasticemail.com';
                $config['smtp_port']    = '2525';
                $config['smtp_timeout'] = '60';
                $config['smtp_user']    = 'rohan921310@gmail.com';

                // $config['smtp_user']    = 'karthiwel23@gmail.com'; 
                //Important
                $config['smtp_pass']    = 'FBCAB27C51D71C07E7BBF43537A8690010FC';  //Important

                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not 

                $subject = 'Error Technologies Credentials';

                $from = 'rohan921310@gmail.com';              // Pass here your mail id

               

                $emailContent = "<!DOCTYPE><html><head></head><body>Welcome, " . $row[0] . ",<br><br><b>An account was created for your email</b><br><br>Your Account Details:<br>Email: ".$row[1] . "<br>Password: " . $password . "<br><br>Best Regards,<br>ERROR TECHNOLOGIES</body></html>";

                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->from($from);
                $this->email->to($row[1]);
                $this->email->subject($subject);
                $this->email->message($emailContent);
                $this->email->send();
                echo $this->email->print_debugger();
            }
            fclose($csvFile);

            $this->session->set_flashdata('msg', 'Users Imported Successfully and Email has been sended');
            $this->session->set_flashdata('msg_class', 'success');
            redirect(base_url() . 'dashboard');
        }
    }


    function logout()
    {
        $this->session->unset_userdata('full_name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('msg', 'Successfully Logged Out');
        $this->session->set_flashdata('msg_class', 'bg-info text-white');
        redirect(base_url());
    }
}
