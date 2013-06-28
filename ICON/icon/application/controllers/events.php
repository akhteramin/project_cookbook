<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

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
		$this->load->model('events_model');
		$this->load->database();
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
		
        if (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)  {

            redirect();

        }
    }
	public function add_events() {
	$this->load->view('add_events_view');
	}
	public function save_events()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('events_name', '', 'trim|required');
		 $datestring = "%Y-%m-%d  %h:%i:%s";
		        $time = time();
		$data['events_name']=$this->input->post('events_name');
		$data['description']=$this->input->post('description');	
        $data['date']=mdate($datestring, $time);		
		$events_added=$this->events_model->add_events($data);
		if($events_added)
		{
		$this->add_events();
		}
	}
}