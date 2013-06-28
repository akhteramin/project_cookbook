<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {
		public function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->helper('date');
        $this->load->helper('url');
		$this->load->model('setting_model');
		$this->load->model('profile_model');
		$this->load->helper('download');
		
		$this->load->helper(array('form', 'url'));
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in_user) || $is_logged_in_user != TRUE)  {

            redirect();

        }
    }
	public function user_setting($username)
	{
	$data['record']=$this->profile_model->get_profile_info($username);
	    $this->load->view('setting_view',$data);
	}
	public function user_setting_tab()
	{
	$username=$this->session->userdata('username');
	$data['record']=$this->profile_model->get_profile_info($username);
	    $this->load->view('setting_view',$data);
	}
	
	public function change_user_info()
	{
	$config = array(
                'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"])."/profile_images/",
                'upload_url' => base_url()."profile_images/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "400KB",
                'max_height' => "400",
                'max_width' => "400"
				);
	 $this->load->library('upload',$config);
	  if($this->upload->do_upload())
	  {
	   $tmp = $this->upload->data();
	   $data['image']='/profile_images/'.$tmp['file_name'];
	   $this->setting_model->update_image($data);
	   $this->user_setting_tab();
	  }
	  else 
	  echo "Too big file size.";
	  
	}
	
	public function change_password()
	{
	$this->load->view('change_password_view');
	}
	public function change_contact_info()
	{
	$this->load->view('change_contact_view');
	}
	public function change_job()
	{
	$this->load->view('change_job_view');
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
		$data['student_password']=$this->input->post('password');
		  $this->setting_model->update_password_model($data);
		   $this->load->view('change_password_view',$data);
		}
	}
	public function update_contact_info()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('contact', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
              $this->load->view('change_contact_view',$data);
        }
		else
		{
		$data['contact_info']=$this->input->post('contact');
		  $this->setting_model->update_contact_model($data);
		  $this->load->view('change_contact_view',$data);
		}
	}
	public function update_job()
	{
	
	$this->load->library('form_validation');
        $this->form_validation->set_rules('job', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
              $this->load->view('change_job_view',$data);
        }
		else
		{
		$data['job_description']=$this->input->post('job');
		  $this->setting_model->update_contact_model($data);
		  $this->load->view('change_job_view',$data);
		}
	}
	
	}