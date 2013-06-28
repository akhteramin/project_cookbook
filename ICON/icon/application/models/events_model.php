<?php

class Events_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function add_events($data)
	{
	       $insert=$this->db->insert('events',$data);
		   return $insert;
	}
	public function show_events()
	{
	 $this->db->order_by('date','desc');
	$query=$this->db->get('events');
	return $query->result();
	}
}