<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Archieve extends CI_Controller {

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
		$this->load->model('archieve_model');
		$this->load->library('image_lib');
    }
	public function show_archieve_image()
	{
	//$config['create_thumb'] = TRUE;
	$data=array();
	$data['images'] = $this->archieve_model->get_images_from_archieve_model();
	$this->load->view('archieve_view',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */