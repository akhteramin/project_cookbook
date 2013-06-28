<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_list extends CI_Controller {

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
	public function show_user_list()
	{
	$this->load->library('pagination');
	$config['base_url']=''.base_url().'index.php/user_list/show_user_list';
	$config['total_rows']= $this->db->get('MEMBER')->num_rows();
	$config['per_page']=5;
    $config['num_links']=20;
	$config['full_tag_open'] = '<div id="pagination">';
    $config['full_tag_close'] = '</div>';
	$this->pagination->initialize($config);
    $query=$this->db->get('MEMBER',$config['per_page'],$this->uri->segment(3));
	if($query)
	{
	$data['record']=$query->result();
	$this->load->view('user_list_view',$data);
		}
	}
	public function edit_user()
	{
	$data['STATUS']=$this->input->post('status');
	$this->db->where('USERNAME',$this->input->post('username'));
	$this->db->update('MEMBER',$data);
	$this->show_user_list();
	}
	public function delete_user()
	{
	$this->db->where('USERNAME',$this->input->post('username'));
	$this->db->delete('MEMBER');
	$this->show_user_list();
	}
	
}