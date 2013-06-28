<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  

class Rating extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('date');
		$this->load->library('image_lib');
        $this->load->helper('url');
       $this->load->model('rating_model');
		$this->load->helper(array('form', 'url'));
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in_user) || $is_logged_in_user != TRUE)  {

            redirect();

        }

    }
	public function insert_rating()
	{
	
	}
}