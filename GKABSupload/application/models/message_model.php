<?php

class Message_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }
	 public function save_message($message_data)
	 {
        $insert=$this->db->insert('message',$message_data);
        return $insert;
	 }
	
	 public function inbox_message_model($student_id)
	 {
	 
	 }
	}