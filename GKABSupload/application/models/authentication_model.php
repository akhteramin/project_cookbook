<?php

class Authentication_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    function validate_admin()
    {
        $this->db->where('username',$this->input->post('username',true));
        $this->db->where('password',  $this->input->post('password'));
        $query=$this->db->get('admin');

        if($query->num_rows==1)
        {

            return true;
        }
    }

    function validate_user()
    {
        $this->db->where('student_id',$this->input->post('student_id',true));
        $this->db->where('student_password',  $this->input->post('password'));
		 $this->db->where('active',  1);
		
        $query=$this->db->get('student_info');
		
       

        if($query->num_rows==1 )
        {
            return true;
            
        }

      
    }


    

}

?>
