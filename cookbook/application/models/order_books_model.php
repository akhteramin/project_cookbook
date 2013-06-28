<?php

class Order_books_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    
	}
	public function insert_order($data)
	{
	 $USERNAME=$this->session->userdata('username');
	 $BOOK_ID=$data['book_id'];
	 echo "jdas";
	 $query="INSERT INTO ORDER_BOOK(USERNAME,ORDER_ID,BOOK_ID)
               VALUES ('$USERNAME',ORDER_ID.NEXTVAL,'$BOOK_ID')";
		$insert=$this->db->query($query);
		
		return $insert;
		
	}
	public function insert_bkash_id()
	{
	$USERNAME=$this->session->userdata('username');
	 $ORDER_ID=$this->input->post('order_id');
	 $BKASH_NO=$this->input->post('bkash_id');
	$query="UPDATE ORDER_BOOK
	set
	BKASH_NO = '$BKASH_NO'
	WHERE ORDER_ID='$ORDER_ID' AND USERNAME='$USERNAME'";
	$insert=$this->db->query($query);
		return $insert;
	}
}