<?php

class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }
	
	public function update_image($data)
	{
	$this->db->where('username',$this->session->userdata('username'));
	$this->db->update('student_info',$data);
	}
	public function update_contact_model($data)
	{
	$this->db->where('username',$this->session->userdata('username'));
	$this->db->update('student_info',$data);
	}
	public function update_job_model($data)
	{
	$this->db->where('username',$this->session->userdata('username'));
	$this->db->update('student_info',$data);
	}
	public function update_password_model($data)
	{
	$this->db->where('username',$this->session->userdata('username'));
	$this->db->update('student_info',$data);
	}
	public function update_admin_password_model($data)
	{
	$this->db->where('username',$this->session->userdata('username'));
	$this->db->update('admin',$data);
	}
	}