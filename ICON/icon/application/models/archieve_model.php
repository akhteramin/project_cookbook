<?php

class Archieve_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }
	public function get_images_from_archieve_model()
	{
	$query=$this->db->get('archieve');
		$images = array();
		foreach ($query->result() as $row) {
			$images []= array (
				'url' => base_url().$row->image_path,
				'thumb_url' => base_url().$row->image_path . '/thumbs'  
			);
        }
		return $images;
	}
}
