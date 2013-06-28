<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');
		$this->load->helper('date');
		
    }

        public function login() {

                   $this->load->library('form_validation');
                   $this->form_validation->set_rules('username','','trim|required');
                   $this->form_validation->set_rules('password','','trim|required');
                           if ($this->form_validation->run() == FALSE) {

                               $is_logged_in = $this->session->userdata('is_logged_in_user');
                                       if (!isset($is_logged_in) || $is_logged_in != TRUE) {
                                $this->load->view('user_login_view');
                                       }
                                       else  $this->load->view('user_page');
                           }

                           else
                           {
                                   $query=$this->authentication_model->validate_user();
                                   if($query)
                                   {
								   $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
								   $time = time();
                                       $data = array(
                                           'username' =>$this->input->post('username',true),
                                           'is_logged_in_user' =>true,
										   'time'=>mdate($datestring, $time)
                                       );

                                     $this->load->library('session');
                                     $this->session->set_userdata($data);

                                     $this->load->view('user_page');
                                   }

                                   else $this->load->view('user_login_view');

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