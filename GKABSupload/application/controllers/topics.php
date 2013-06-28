<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Controller {

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
		$this->load->model('topics_model');
		$this->load->database();
		$is_logged_in_user=$this->session->userdata('is_logged_in_user');
		$is_logged_in_admin=$this->session->userdata('is_logged_in_admin');
		$this->load->helper('text');
        if ((!isset($is_logged_in_user) || $is_logged_in_user != TRUE)&&(!isset($is_logged_in_admin) || $is_logged_in_admin != TRUE))  {

            redirect();

        }
    }
	
	public function add_topics() {
	$this->load->view('add_topics_view');
	}
	
	
	public function save_topics()
	{
	$this->load->library('form_validation');
        $this->form_validation->set_rules('topics_name', '', 'trim|required');
		 $this->db->where('student_id',$this->session->userdata('student_id'));
	   $q=$this->db->get('student_info');

            foreach($q->result() as $row)
            {
                $name=$row->student_name;
				
            }
			 $datestring = "%Y-%m-%d  %h:%i:%s";
		        $time = time();
		$data['student_id']=$this->session->userdata('student_id');
		$data['student_name']=$name;
		$data['topics_name']=$this->input->post('topics_name');
		$data['description']=$this->input->post('description');		
		$data['date']=mdate($datestring, $time);
		$topics_added=$this->topics_model->add_topics($data);
		if($topics_added)
		{
		$this->add_topics();
		}
	}
	
	
	public function my_topics(){
	
	$student_id=$this->session->userdata('student_id');
	$this->load->library('pagination');

                 $config['base_url']=''.base_url().'index.php/topics/my_topics';
				$this->db->where('student_id',$student_id);
				//$this->db->group_by('reciever_mail');
				$this->db->order_by('date','desc');
				$config['total_rows']=  $this->db->get('topics')->num_rows();
                $config['per_page']=2;
                $config['num_links']=20;

            $this->pagination->initialize($config);	 
	        $this->db->where('student_id',$student_id);
			//$this->db->group_by('reciever_mail');
	        $this->db->order_by('date','desc');
	        $query= $this->db->get('topics',$config['per_page'],$this->uri->segment(3));
	        $data['record']=$query->result();
	        $this->load->view('my_topics_view',$data);
	}
	
	
	public function show_topics()
	{
	
	$this->load->library('pagination');

                 $config['base_url']=''.base_url().'index.php/topics/my_topics';
				
				//$this->db->group_by('reciever_mail');
				$this->db->order_by('date','desc');
				$config['total_rows']=  $this->db->get('topics')->num_rows();
                $config['per_page']=2;
                $config['num_links']=20;

            $this->pagination->initialize($config);	 
	       
			//$this->db->group_by('reciever_mail');
	        $this->db->order_by('date','desc');
	        $query= $this->db->get('topics',$config['per_page'],$this->uri->segment(3));
	        $data['record']=$query->result();
	        $this->load->view('show_topics_view',$data);
	}
	
	public function topics_details($topics_name)
	{
	
	$this->db->where('topics_name',urldecode($topics_name));
	$query=$this->db->get('topics');
	$data['record']=$query->result();
	$this->db->where('topics_name',urldecode($topics_name));
	$query_comment=$this->db->get('comments');
	$data['comment_record']=$query_comment->result();
	$data['topics_name']=$topics_name;
	$this->load->view('topics_details_view',$data);
	}
	
	public function save_comments()
	{
	$topics_name=urldecode($this->input->post('topics_name'));
	$data['comments']=$this->input->post('comments');
	$data['student_id']=$this->session->userdata('student_id');
	 $this->db->where('student_id',$this->session->userdata('student_id'));
	   $q=$this->db->get('student_info');

            foreach($q->result() as $row)
            {
                $name=$row->student_name;
				
            }
			$data['student_name']=$name;
			 $datestring = "%Y-%m-%d  %h:%i:%s";
		        $time = time();
			$data['date']=mdate($datestring, $time);
            $data['topics_name']=$topics_name;			
			$this->topics_model->save_comments($data);
			$this->topics_details($topics_name);
	
	}
}