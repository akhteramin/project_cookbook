<?php

class Approve_member_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function activate_member($username)
	{
	$this->db->where('username',$username);

        $active=array(
            'active'=>1
        );
        $update=$this->db->update('student_info',$active);
	}
	}