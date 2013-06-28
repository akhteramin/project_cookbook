<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approve_member extends CI_Controller {

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
		$this->load->model('approve_member_model');
		$this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');
		$is_logged_in=$this->session->userdata('is_logged_in_admin');
        if (!isset($is_logged_in) || $is_logged_in != TRUE) {

            redirect();

        }
		
    }
	 public function _example_output($output = null)

    {
        $this->load->view('our_template.php',$output);
    }
	
	
	public function show_membership_request_list()
	{
	try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('student_info');
            $crud->set_subject('User');
			  $crud->columns('student_name','student_id','email','area');
			   $crud->add_action('Approve', '', '','ui-icon-image',array($this,'approve_request'));
			 //$crud->callback_column('student_id',array($this,'_callback_webpage_url'));
            $crud->unset_add();
			$crud->unset_edit();
			   $crud->where('active',0);
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
	}
	
	
	public function approve_request($primary_key,$row)
	{
	$slash="approve_member/show_membership/";
	     return site_url($slash.$row->student_id);
	}
	
	public function show_membership($student_id)
	{
	 $this->db->where('student_id',$student_id);
            $q=$this->db->get('student_info');

            foreach($q->result() as $row)
            {
                $user_email=$row->email;
            }
	$config=Array(
	'protocol'=>'smtp',
	'smtp_host'=>'ssl://smtp.googlemail.com',
	'smtp_port'=>465,
	'smtp_user'=>'gkabswebsite@gmail.com',
	'smtp_pass'=>'gkabswebsitepassword'
	);
	$this->load->library('email',$config);
	
	$this->email->set_newline("\r\n");
	
	$this->email->from('gkabswebsite@gmail.com','Admin');
	$this->email->to($user_email);
	$this->email->subject('Welcome to GKABS');
	$this->email->message('Your request of being member of GKABS has been approved. Go to this link '.site_url("user_auth/login"));
	
	
	if($this->email->send())
	{
	echo 'your email sent';
	}
	else
	{
	show_error($this->email->print_debugger());
	}
	$this->approve_member_model->activate_member($student_id);
	$this->show_membership_request_list();
	
	}
}