<?php

class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }
	
	public function update_image($data)
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->update('MEMBER',$data);
	}
	public function update_email_model($data)
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->update('MEMBER',$data);
	}
	public function update_password_model($data)
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$this->db->update('MEMBER',$data);
	}
	
	}