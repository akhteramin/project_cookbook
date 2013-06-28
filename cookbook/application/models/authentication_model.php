<?php

class Authentication_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    function validate_admin()
    {
        $this->db->where('USERNAME',$this->input->post('username',true));
        $this->db->where('PASSWORD',  $this->input->post('password'));
        $query=$this->db->get('ADMIN');

        if($query->num_rows==1)
        {

            return true;
        }
    }

    function validate_user()
    {
       $this->db->where('USERNAME',$this->input->post('username',true));
        $this->db->where('PASSWORD',  md5($this->input->post('password')));
        $query=$this->db->get('MEMBER');
       

        if($query->num_rows==1 )
        {
            return true;
            
        }

      
    }


    

}

?>
