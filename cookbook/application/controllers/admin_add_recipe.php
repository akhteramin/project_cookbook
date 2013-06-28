<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_add_recipe extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('date');
        $this->load->helper('url');
        $this->load->model('admin_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
		//if (!$_FILES['userfile_1']['error'] === 0)
		//{
			//redirect();
		//}
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
        if (!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE)  {

            redirect();

        }

    }
	public function show_add_recipe()
	{
	$this->load->view('add_recipe_view');
	
	}
	/////////////////////upload file
	public function insert_recipe()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('category', '', 'trim|required');
        $this->form_validation->set_rules('title', '', 'trim|required');
        $this->form_validation->set_rules('engradients', '', 'trim|required');
        $this->form_validation->set_rules('procedure', '', 'trim|required');
      
    
        if ($this->form_validation->run() == FALSE) {
		      $data['msg']="Please try again";
              $this->load->view('add_recipe_view',$data);
        }
		else
		{
		  $this->db->where('TITLE',$this->input->post('title'));
		  $this->db->from('RECIPE');
	$count=$this->db->count_all_results();
	if($count==0)
	{
		  $s = $_SERVER['SCRIPT_FILENAME'];  
            $config = array(
                'upload_path' => str_replace('index.php','img',$s),
              //  'upload_url' => base_url()."img/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "1000KB",
                'max_height' => "1024",
                'max_width' => "728"
				);
				
    $this->load->library('upload');
        $this->upload->initialize( $config );
		if($this->upload->do_upload()){
                $tmp = $this->upload->data();
				//echo $config['upload_path'];
			    $data['category']=$this->input->post('category');
				$data['title']=$this->input->post('title');
				$data['subject']=$this->input->post('subject');
				$data['engradients']=$this->input->post('engradients');
				$data['procedure']=$this->input->post('procedure');
				//$data['photo']='/img/'.$tmp['file_name'];
				$directory='/img/'.$tmp['file_name'];
				
				$query=$this->admin_model->save_recipe($directory);
					if($query)
					{
					//echo "Recipe has been successfully added.";
					 $this->show_add_recipe();
					 
					}
					else
					{
					echo "Recipe has not been successfully added.";
					 $this->show_add_recipe();
					 
					}
					}
					else
					{
					echo $this->upload->display_errors('<p>', '</p>');
					echo "Books has not been added.Please try again.";
					 $this->show_add_recipe();
			}
		}
	}
	
}
	public function show_recipe_details()
	{
	$this->db->order_by("DATETIME", "desc");
	$query=$this->db->get('RECIPE');
	if($query)
	{
	$data['record']=$query->result();
	        $this->load->view('recipe_view',$data);
	}
	else
	{
	$data['msg']="no data in the table";
	 $this->load->view('recipe_view',$data);
	}
	
	
	}
	public function show_recipe_books()
	{
	$this->db->order_by("BOOK_ID", "desc");
	$query=$this->db->get('RECIPE_BOOKS');
	if($query)
	{
	$data['record']=$query->result();
	$this->load->view('recipe_books_view',$data);
	}
	else
	{
	$data['msg']="no data in the table";
	 $this->load->view('recipe_view',$data);
	}
	}
	public function change_password()
	{
	$this->load->view('change_password_view');
	}
	public function update_password()
	{
	$this->load->library('form_validation');
	 $this->form_validation->set_rules('old_password', '', 'trim|required');
        $this->form_validation->set_rules('password', '', 'trim|required');
		 $this->form_validation->set_rules('confirm_password', '', 'trim|required');
       
      
        if ($this->form_validation->run() == FALSE || ($this->input->post('password')!=$this->input->post('confirm_password'))) {
		      $data['msg']="Please try again";
              $this->load->view('change_admin_password_view',$data);
        }
		else
		{
		
		$this->db->where('PASSWORD',md5($this->input->post('old_password')));
		$query=$this->db->get('ADMIN');
		if($query)
		{
		$data['PASSWORD']=md5($this->input->post('password'));
		  $this->admin_model->update_password_model($data);
		   $this->load->view('change_admin_password_view',$data);
		}
		else
		{
		$data['msg']="Please try again";
		  $this->load->view('change_admin_password_view',$data);
		}
		}
	}
}