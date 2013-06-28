<?php

class Profile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function get_profile_info()
	{
	$this->db->where('USERNAME',$this->session->userdata('username'));
	$query=$this->db->get('MEMBER');
	return $query->result();
	}
	public function get_profile($username)
	{
	$this->db->where('USERNAME',$username);
	$query=$this->db->get('MEMBER');
	return $query->result();
	}
}