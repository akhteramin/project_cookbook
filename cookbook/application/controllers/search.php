<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
		public function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->helper('date');
        $this->load->helper('url');
		$this->load->model('setting_model');
		$this->load->model('profile_model');
		$this->load->helper('download');
		
		$this->load->helper(array('form', 'url'));
		
    }
	public function search_recipe()
	{
	$this->load->library('pagination');
	if($this->input->post('search_option')=='recipe')
	{
	        $search=strtolower($this->input->post('search'));
	
	
                $config['base_url']=''.base_url().'index.php/search/search_recipe';
				$this->db->like('LOWER(TITLE)',$search); // users table
				$this->db->order_by('RATING','desc');
				$config['total_rows']=  $this->db->get('RECIPE')->num_rows();
                $config['per_page']=12;
                $config['num_links']=200;

            $this->pagination->initialize($config);	 
	        $this->db->like('LOWER(TITLE)',$search);// users table
				$this->db->order_by('RATING','desc');
	        $query= $this->db->get('RECIPE',$config['per_page'],$this->uri->segment(3));
			if($query->num_rows>=1)
			{
	        $data['record']=$query->result();
	        $this->load->view('recipe_view',$data);
			}
			else
			{
			echo "no result found";
			 $this->load->view('recipe_view');
			}
	}
	else if($this->input->post('search_option')=='recipe_books')
	{
	        $search=strtolower($this->input->post('search'));
	
	
                 $config['base_url']=''.base_url().'index.php/search/search_recipe';
				 $this->db->like('LOWER(TITLE)',$search); // users table
				$this->db->order_by('RATING','desc');
				$config['total_rows']=  $this->db->get('RECIPE')->num_rows();
                $config['per_page']=12;
                $config['num_links']=200;

            $this->pagination->initialize($config);	 
	        $this->db->like('LOWER(TITLE)',$search);// users table
				$this->db->order_by('PRICE','desc');
	        $query= $this->db->get('RECIPE_BOOKS',$config['per_page'],$this->uri->segment(3));
			if($query->num_rows>=1)
			{
	        $data['record']=$query->result();
	        $this->load->view('recipe_books_view',$data);
			}
			else
			{
			echo "no result found";
			 $this->load->view('recipe_books_view');
			}
	}
	else if($this->input->post('search_option')=='user')
	{
	        $search=strtolower($this->input->post('search'));
	
	
                 $config['base_url']=''.base_url().'index.php/search/search_recipe';
				 $this->db->like('LOWER(USERNAME)',$search); // users table
				$this->db->order_by('USERNAME','desc');
				$config['total_rows']=  $this->db->get('MEMBER')->num_rows();
                $config['per_page']=12;
                $config['num_links']=200;

            $this->pagination->initialize($config);	 
	        $this->db->like('LOWER(USERNAME)',$search);// users table
				$this->db->order_by('USERNAME','desc');
	        $query= $this->db->get('MEMBER',$config['per_page'],$this->uri->segment(3));
			if($query->num_rows>=1)
			{
	        $data['record']=$query->result();
	        $this->load->view('user_view',$data);
			}
			else
			{
			echo "no result found";
			 $this->load->view('user_view');
			}
	}
	}
	
	}