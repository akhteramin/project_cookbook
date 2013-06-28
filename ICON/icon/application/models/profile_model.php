<?php

class Profile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function get_profile_info($username)
	{
	$this->db->where('username',$username);
	$query=$this->db->get('student_info');
	return $query->result();
	}
}