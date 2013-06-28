<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Forgot_password extends CI_Controller {

    public function __construct() {
        parent::__construct();
	}
		public function show_forgot_password()
		{
		$this->load->view('forgot_password_view');
		}
		public function check_email()
		{
		$this->db->where('EMAIL',$this->input->post('email'));
		
            $q=$this->db->get('MEMBER');
			if($q)
			{
            foreach($q->result() as $row)
            {
                $PASSWORD='123456';
            }
			$user_email=$this->input->post('email');
	$config=Array(
	'protocol'=>'smtp',
	'smtp_host'=>'ssl://smtp.googlemail.com',
	'smtp_port'=>465,
	'smtp_user'=>'gkabswebsite@gmail.com',
	'smtp_pass'=>'gkabswebsitepassword'
	);
	$this->load->library('email',$config);
	
	$this->email->set_newline("\r\n");
	
	$this->email->from('gkabswebsite@gmail.com','Admin');
	$this->email->to($user_email);
	$this->email->subject('Welcome to COOKBOOK');
	$this->email->message('Your password is '.$PASSWORD.' Go to this link '.site_url(""));
	
	
	if($this->email->send())
	{
	$data['PASSWORD']=md5($PASSWORD);
	$this->db->where('EMAIL',$user_email);
	$quer=$this->db->update('MEMBER',$data);
	if($quer)
	$this->show_forgot_password();
	}
	else
	{
	show_error($this->email->print_debugger());
	$this->show_forgot_password();
	}
	
	}
	else
	{
	$this->show_forgot_password();
		}
	}	
}