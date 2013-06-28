<?php

class Topics_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function add_topics($data)
	{
	       $insert=$this->db->insert('topics',$data);
		   return $insert;
	}
	public function save_comments($data)
	{
	$this->db->insert('comments',$data);
	}
}