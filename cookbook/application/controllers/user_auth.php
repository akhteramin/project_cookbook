<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');
		
    }

        public function login() {

                   $this->load->library('form_validation');
                   $this->form_validation->set_rules('username','','trim|required');
                   $this->form_validation->set_rules('password','','trim|required');
                           if ($this->form_validation->run() == FALSE) {

                               $is_logged_in = $this->session->userdata('is_logged_in_user');
                                       if (!isset($is_logged_in) || $is_logged_in != TRUE) {
                                $this->load->view('welcome_message');
                                       }
                                       else  $this->load->view('user_page');
                           }

                           else
                           {
                                   $query=$this->authentication_model->validate_user();
                                   if($query)
                                   {
                                       $data = array(
                                           'username' =>$this->input->post('username',true),
                                           'is_logged_in_user' =>true
                                       );

                                     $this->load->library('session');
                                     $this->session->set_userdata($data);

                                     $this->load->view('user_page',$data);
                                   }

                                   else 
								   {
								   echo "login fail";
								   $this->load->view('welcome_message');
								   }

                           }



        }

        function logout()
        {
                    $this->load->library('session');
                    $this->session->sess_destroy();
                    redirect('');
        }



}


?>