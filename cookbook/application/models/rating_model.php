<?php
class Rating_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
public function insert_rating()
{
$RATING=$this->input->post('rating');
$RECIPE_ID=$this->input->post('recipe_id');
$USERNAME=$this->session->userdata('username');
$query="INSERT INTO RATING(RATING,RECIPE_ID,USERNAME) VALUES ('$RATING','$RECIPE_ID','$USERNAME')";

$insert=$this->db->query($query);

$query1="UPDATE RECIPE SET RATING = RATING+'$RATING' WHERE RECIPE_ID = '$RECIPE_ID'";
$q2=$this->db->query($query1);
        return $insert;
}	
}