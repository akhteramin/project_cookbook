<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_image extends CI_Controller {

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
		$this->load->model('upload_image_model');
		$this->load->database();
		$this->load->helper('text');
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
		
        if (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)  {

            redirect();

        }
    }
	public function upload()
	{
	$data['record']=$this->upload_image_model->get_image();
	$this->load->view('upload_image_view',$data);
	}
	public function save_image()
	{
	$config = array(
                'upload_path' => dirname($_SERVER["SCRIPT_FILENAME"])."/archieve_images/",
                'upload_url' => base_url()."archieve_images/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "100000000KB",
                'max_height' => "768",
                'max_width' => "1024"
				);
	 $this->load->library('upload',$config);
	  if($this->upload->do_upload())
	  {
	   $tmp = $this->upload->data();
	   $data['image_path']='/archieve_images/'.$tmp['file_name'];
	   $this->upload_image_model->save_image($data);
	    $this->upload();
	  }
	  else 
	  echo "Too big file size.";
	 
	}
	
}