<?php

class Profile_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function get_profile_info($student_id)
	{
	$this->db->where('student_id',$student_id);
	$query=$this->db->get('student_info');
	return $query->result();
	}
}