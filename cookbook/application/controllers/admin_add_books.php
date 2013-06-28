<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_add_books extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('date');
        $this->load->helper('url');
        $this->load->model('admin_model');
		$this->load->helper(array('form', 'url'));
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
        if (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)  {

            redirect();

        }

    }
	public function show_add_books()
	{
	$this->load->view('add_books_view');
	}
	/////////////////////upload file
	public function insert_books()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('title', '', 'trim|required');
        $this->form_validation->set_rules('writter', '', 'trim|required');
        $this->form_validation->set_rules('description', '', 'trim|required');
        $this->form_validation->set_rules('price', '', 'trim|required');
      $count=0;
     
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
             $this->load->view('add_books_view',$data);
        }
		else
		{
		  $s = $_SERVER['SCRIPT_FILENAME'];  
            $config = array(
                'upload_path' => str_replace('index.php','books_image',$s),
              //  'upload_url' => base_url()."img/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "1000KB",
                'max_height' => "1024",
                'max_width' => "768"
				);
				$this->load->library('upload');
				$this->upload->initialize($config);
				if($this->upload->do_upload()){
				//echo 'kkk';
                    $tmp = $this->upload->data();
		            $data['writter']=$this->input->post('writter');
					$data['title']=$this->input->post('title');
					$data['description']=$this->input->post('description');
					$data['price']=$this->input->post('price');
					$data['books_image']='/books_image/'.$tmp['file_name'];
	$query=$this->admin_model->save_books($data);
					if($query)
					{
					//echo "Recipe has been successfully added.";
					 $this->show_add_books();
					 
					}
					else
					{
					echo $this->upload->display_errors('<p>', '</p>');
					echo "Books has not been added.Please try again.";
					 $this->show_add_books();
					}
				}
			}
			
		}
	
}