<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_events extends CI_Controller {

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
		$this->load->helper('text');
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
		
        if (!isset($is_logged_in_user) || $is_logged_in_user != TRUE)  {

            redirect();

        }
    }
	public function show_events_user() {
	$data['record']=$this->events_model->show_events();
	$this->load->view('show_events_view',$data);
	}
	
}