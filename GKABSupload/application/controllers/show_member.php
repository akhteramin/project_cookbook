<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_member extends CI_Controller {

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
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
        if ((!isset($is_logged_in_user) || $is_logged_in_user != TRUE) && (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE) )  {

            redirect();

        }
	}
	public function _example_output($output = null)
	{
        $this->load->view('our_template.php',$output);
    }
		public function show_member_list(){
		try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('student_info');
            $crud->set_subject('User');
		$crud->columns('student_name','student_id','batch','email','contact_info','area','school','college');
			   //$crud->add_action('Approve', '', '','ui-icon-image',array($this,'approve_request'));
		    $crud->callback_column('student_id',array($this,'_callback_webpage_url'));
            $crud->unset_add();
			$crud->unset_edit();
			$crud->unset_export();
			$crud->unset_print();
			
			if($this->session->userdata('is_logged_in_user'))
			$crud->unset_delete();
			   $crud->where('active',1);
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
		}
		public function _callback_webpage_url($value, $row)
{

  return "<a href='".site_url('profile/get_profile_info/'.$value)."'>$value</a>";

}
		
		public function get_client_info($client_name)
{
$query=$this->db->query("SELECT *
FROM meeting WHERE client_name='$client_name'");
 $data['record']=$query->result();
 $data['client_name']=urldecode($client_name);
 $this->load->view('meeting_history_view',$data);
}
	
	
	
		
	}