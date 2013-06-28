<?php

class Upload_image_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function get_image()
	{
	$query=$this->db->get('archieve');
	return $query->result();
	}
	public function save_image($data)
	{
	$this->db->insert('archieve',$data);
	}
}