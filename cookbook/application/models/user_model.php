<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    
	}
	 public function insert_rating($data) {
	 $USERNAME=$data['USERNAME'];
	 $RATING=$data['RATING'];
	 $this->db->where('USERNAME',$USERNAME);
	 $query="INSERT INTO MEMBER(RATING)
               VALUES ('$RATING')";
			   return $query;
	 }
	
	}