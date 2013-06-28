<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct() {
        parent::__construct();
		$this->load->model('registration_model');
		//$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
		//$is_logged_in_user=$this->session->userdata('is_logged_in_user');
        //if ((isset($is_logged_in_user) || $is_logged_in_user == TRUE) || (isset($is_logged_in_admin) || $is_logged_in_admin == TRUE)) {

          //  redirect();

        //}
    }
	
	public function registration_form()
	{
	 $this->load->view('registration_view');
	}
	public function insert_registration_data()
	{
	 $this->load->library('form_validation');
        $this->form_validation->set_rules('student_name', '', 'trim|required');
        $this->form_validation->set_rules('student_id', '', 'trim|required');
        $this->form_validation->set_rules('department', '', 'trim|required');
        $this->form_validation->set_rules('batch', '', 'trim|required');
		$this->form_validation->set_rules('email', '', 'trim|valid_email');
        $this->form_validation->set_rules('contact_info', '', 'trim|required');
        $this->form_validation->set_rules('student_password', '', 'trim|required');
		$this->form_validation->set_rules('school', '', 'trim|required');
        $this->form_validation->set_rules('college', '', 'trim|required');
        

      
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
              $this->load->view('registration_view',$data);
        }

        else {
            
                $query = $this->registration_model->insert_registration_info();
                if ($query) {
				
                    $data['msg']="Thanx For Your Registration.
					Your account will be activated after a confirmation mail.
					So keep in touch.";
                    $this->load->view('registration_view',$data);
                }

                else
				{
				$data['msg']="Please try again your email id has been is already used.So try with another email id.Thanx for your patience.";
				 $this->load->view('registration_view',$data);
				}
                   
        }
	
	}
}