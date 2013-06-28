<?php

class Registration_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
    }
	public function insert_registration_info()
	{
	  $registration_data=array(
                       
            'student_name'=>urldecode($this->input->post('student_name',true)),
            'username'=>$this->input->post('username',true),
             'email'=>$this->input->post('email',true),
             'contact_info'=>$this->input->post('contact_info',true),
            'job_description'=>$this->input->post('job_description',true),
            'student_password'=>$this->input->post('student_password'),
			'school'=>$this->input->post('school'),
			'college'=>$this->input->post('college'),
			'area'=>$this->input->post('area'),
			
        );
		
		$insert=$this->db->insert('student_info',$registration_data);
		return $insert;
	}
}