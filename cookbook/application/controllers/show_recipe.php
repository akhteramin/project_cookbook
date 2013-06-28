<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Show_recipe extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('date');
		$this->load->library('image_lib');
        $this->load->helper('url');
        $this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in_user) || $is_logged_in_user != TRUE)  {

            redirect();

        }

    }
	public function show_recipe_details()
	{
	$this->load->library('pagination');
	$config['base_url']=''.base_url().'index.php/show_recipe/show_recipe_details';
	$this->db->order_by('RATING','desc');
	$config['total_rows']=  $this->db->get('RECIPE')->num_rows();
    $config['per_page']=12;
    $config['num_links']=200;
	$config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);	 
	$this->db->order_by('RATING');
	$query= $this->db->get('RECIPE',$config['per_page'],$this->uri->segment(3));
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
	$this->load->library('pagination');
	$config['base_url']=''.base_url().'index.php/show_recipe/show_recipe_books';
	$this->db->order_by('PRICE');
	$config['total_rows']=  $this->db->get('RECIPE_BOOKS')->num_rows();
    $config['per_page']=12;
    $config['num_links']=200;
	$config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);	 
	$this->db->order_by('PRICE');
	$query= $this->db->get('RECIPE_BOOKS',$config['per_page'],$this->uri->segment(3));
	if($query)
	{
	$data['record']=$query->result();
	        $this->load->view('recipe_books_view',$data);
	}
	else
	{
	$data['msg']="no data in the table";
	 $this->load->view('recipe_books_view',$data);
	}
	}
	 public function rate()
    {
        // Turn of layout for Ajax request
        unset($this->layout);
        // Gather ajax post data
        $rate = $this->input->post("rate_val", true);
        $post_url = $this->input->post("post_url", true);
        // Load model data
        $this->load->model('Post');
        $post_id = $this->Post->get_post_id($post_url);
        // Call function to check if user is login
        // return current login user id, null if not login yet
        // You need to define this helper function your self
        if (get_user_id()) {
            // Call the Post Model is_rated method to check whether the current login user has submit a rate to related post
            if (!$this->Post->is_rated($post_id))
            {
                $data = array(
                    "USERNAME" => $this->session->userdata['username'],
                    "RATING" => $rate,
                );
                // Call Post model method to insert rating data
                if ($this->user_model->insert_rating($data)) {
                    echo json_encode(array("code" => "Success", "msg" => "Thank you, rate has been submitted"));
                }
                else {
                    echo json_encode(array("code" => "Error", "msg" => "Sorry, something wrong. Please try again."));
                }
            }
            // If post has been rated by the current login user
            else {
                echo json_encode(array("code" => "Error", "msg" => "You have already rated this post"));
            }
        }
        // User is not login yet, ask them to login first
        else {
            echo json_encode(array("code" => "Error", "msg" => "Please login to submit this rate"));
        }
        // Do not proceed to view, just terminate to send Json response
        exit;
    }
	
}