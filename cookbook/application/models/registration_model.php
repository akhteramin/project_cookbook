<?php
class Registration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function insert_registration_info()
	{
	  
            $USERNAME=$this->input->post('username',true);
           $EMAIL=$this->input->post('email',true);
            $PASSWORD = md5($this->input->post('password',true));

       $query="INSERT INTO MEMBER(USERNAME,EMAIL,PASSWORD)
               VALUES ('$USERNAME','$EMAIL','$PASSWORD')";

        $insert=$this->db->query($query);
        return $insert;
	}
}