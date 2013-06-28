<?php

class Favourites_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	public function save_favourites($data)
	{
	$USER_NAME=$data['user_name'];
           $RECIPE_ID=$data['recipe_id'];

       $query="INSERT INTO FAVOURITES(USER_NAME,RECIPE_ID)
               VALUES ('$USER_NAME','$RECIPE_ID')";

        $insert=$this->db->query($query);
        return $insert;
	}
	public function delete_favourite($data)
	{
	 $RECIPE_ID=$data['recipe_id'];
	 $USER_NAME=$this->session->userdata('username');
	 $this->db->where('RECIPE_ID', $RECIPE_ID);
	 $this->db->where('USER_NAME', $USER_NAME);
	 
$this->db->delete('FAVOURITES'); 
	}
	
}