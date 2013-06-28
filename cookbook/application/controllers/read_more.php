<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Read_more extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');
		 $this->load->model('rating_model');
		 $this->load->model('favourites_model');
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
	public function show_read_more()
	{
	$recipe_id=$_GET['id'];
	$this->db->where('RECIPE_ID',$recipe_id);
	
	 $query=$this->db->get('RECIPE');
	if($query)
	$data['record']=$query->result();
	        $this->load->view('read_more_view',$data);
	}
	public function insert_rating()
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->where('RECIPE_ID',$this->input->post('recipe_id'));
	$this->db->from('RATING');
	$count=$this->db->count_all_results();
	if($count==0)
	{
	$query=$this->rating_model->insert_rating();
	if($query)
	{
	
	  $this->show_recipe_details();
	}
	else 
{
$this->show_recipe_details();
}
}
else 
{
$this->show_recipe_details();
}
}
public function delete_favourite()
{
$data['recipe_id']=$_GET['id'];
$this->favourites_model->delete_favourite($data);
$this->show_recipe_details();
}
}