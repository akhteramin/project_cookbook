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
	public function user_setting()
	{
	$data['record']=$this->profile_model->get_profile_info();
	    $this->load->view('setting_view',$data);
	}
	
	public function change_user_image()
	{
	$s = $_SERVER['SCRIPT_FILENAME'];  
            $config = array(
                'upload_path' => str_replace('index.php','profile_images',$s),
              //  'upload_url' => base_url()."img/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "1000KB",
                'max_height' => "1024",
                'max_width' => "728"
				);
	 $this->load->library('upload',$config);
	  if($this->upload->do_upload())
	  {
	   $tmp = $this->upload->data();
	   $data['PROFILE_PIC']='/profile_images/'.$tmp['file_name'];
	   $this->setting_model->update_image($data);
	   $this->user_setting();
	  }
	  else 
	  echo "Too big file size.";
	  
	}
	
	public function change_password()
	{
	$this->load->view('change_password_view');
	}
	public function change_email()
	{
	$this->load->view('change_email');
	}
	public function update_password()
	{
	$this->load->library('form_validation');
	 $this->form_validation->set_rules('old_password', '', 'trim|required');
        $this->form_validation->set_rules('password', '', 'trim|required');
		 $this->form_validation->set_rules('confirm_password', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE || ($this->input->post('password')!=$this->input->post('confirm_password'))) {
		      $data['msg']="Please try again";
              $this->load->view('change_password_view',$data);
        }
		else
		{
		$this->db->where('USERNAME',$this->session->userdata('username'));
		$this->db->where('PASSWORD',md5($this->input->post('old_password')));
		$query=$this->db->get('MEMBER');
		if($query)
		{
		$data['PASSWORD']=md5($this->input->post('password'));
		  $this->setting_model->update_password_model($data);
		   $this->load->view('change_password_view',$data);
		}
		else
		{
		$data['msg']="Please try again";
		  $this->load->view('change_password_view',$data);
		}
		}
	}
	public function update_email()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('email', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
              $this->load->view('change_email',$data);
        }
		else
		{
		$this->db->where('EMAIL',$this->input->post('email'));
		$query=$this->db->get('MEMBER');
		if($query)
		{
		$data['EMAIL']=$this->input->post('email');
		  $this->setting_model->update_email_model($data);
		  $this->load->view('change_email',$data);
		  }
		  else
		  {
		   $data['msg']="Please try again.This email already exist.";
              $this->load->view('change_email',$data);
		  }
		}
	}
	
	
	}