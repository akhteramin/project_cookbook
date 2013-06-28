<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('date');
		$this->load->library('image_lib');
        $this->load->helper('url');
       $this->load->model('order_books_model');
		$this->load->helper(array('form', 'url'));
		 require_once('show_recipe.php');
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
        if (!isset($is_logged_in_user) || $is_logged_in_user != TRUE)  {

            redirect();

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
	public function order_view()
	{
	 $this->db->join('ORDER_BOOK','RECIPE_BOOKS.BOOK_ID=ORDER_BOOK.BOOK_ID');
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->where('BKASH_NO',null);
	 $q=$this->db->get('RECIPE_BOOKS');
	 if($q)
			{
			$data['record']=$q->result();
	        $this->load->view('order_view',$data);
			}
	}
	
	public function order_books_view()
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->where('BOOK_ID',$_GET['id']);
	$this->db->where('ACTIVE',0);
	$count=$this->db->count_all_results('ORDER_BOOK');
	
	if($count==0)
	{
	$data['book_id']=$_GET['id'];
	if($this->order_books_model->insert_order($data))
	{
	 //$q="SELECT ORDER_ID,TITLE,DESCRIPTION,WRITTER,PRICE,BOOK_IMAGE FROM ORDER_BOOK,RECIPE_BOOKS WHERE ORDER_BOOK.BOOK_ID=RECIPE_BOOKS.BOOK_ID 
	 //AND ACTIVE=0 AND USERNAME=".$this->session->userdata('username');
	 //echo $this->db->query($q);
	 
	 $this->db->join('ORDER_BOOK','RECIPE_BOOKS.BOOK_ID=ORDER_BOOK.BOOK_ID');
	$this->db->where('USERNAME',$this->session->userdata('username'));
	
	 $q=$this->db->get('RECIPE_BOOKS');
			if($q)
			{
			$data['record']=$q->result();
	        $this->load->view('order_view',$data);
			}
			else
			{
			$this->show_recipe_books();
			}
		}
	else
	{
	
	 $this->show_recipe_books();
	}	
}
	else
	{
	 $this->show_recipe_books();
	}
	 
}
	public function insert_bkash()
	{
	$query=$this->order_books_model->insert_bkash_id();
	if($query)
	{
	   $this->show_recipe_books();
	}
	else
	{
	 $this->show_recipe_books();
	}
	
	}
}