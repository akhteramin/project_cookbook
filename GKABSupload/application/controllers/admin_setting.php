<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_setting extends CI_Controller {
		public function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->helper('date');
        $this->load->helper('url');
		$this->load->model('setting_model');
		$this->load->model('profile_model');
		$this->load->helper('download');
		
		$this->load->helper(array('form', 'url'));
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
        if (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)  {

            redirect();

        }
    }
	public function change_password()
	{
	$this->load->view('change_admin_password_view');
	}
	public function update_password()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('password', '', 'trim|required');
		 $this->form_validation->set_rules('confirm_password', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE || ($this->input->post('password')!=$this->input->post('confirm_password'))) {
		      $data['msg']="Please try again";
              $this->load->view('change_password_view',$data);
        }
		else
		{
		$data['password']=$this->input->post('password');
		  $this->setting_model->update_admin_password_model($data);
		   $this->load->view('change_password_view',$data);
		}
	}
}