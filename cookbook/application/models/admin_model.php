<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
public function save_recipe($d)
	{
	 
           $CATEGORY=$this->input->post('category',true);
           $TITLE=$this->input->post('title',true);
		    //$PHOTO = $data['photo'];
			$PHOTO = $d;
 
           $ENGRADIENTS=$this->input->post('engradients',true);
           $PROCEDURE=$this->input->post('procedure',true);
           //$DATE=$data['datetime'];
           $query="INSERT INTO RECIPE (RECIPE_ID,CATEGORY,TITLE,PHOTO,RATING,ENGRADIENTS,PROCEDURE,DATETIME)
               VALUES (RECIPE_ID.nextval,'$CATEGORY','$TITLE','$PHOTO',0,'$ENGRADIENTS','$PROCEDURE',CURRENT_TIMESTAMP)";

        $insert=$this->db->query($query);
        return $insert;
	}
	public function save_books($data)
	{
	       $DESCRIPTION=$this->input->post('description',true);
           $TITLE=$this->input->post('title',true);
           $WRITTER=$this->input->post('writter',true);
           $PRICE=$this->input->post('price',true);
		   $BOOK_IMAGE=$data['books_image'];
           //$DATE=$data['datetime'];
       $query="INSERT INTO RECIPE_BOOKS(BOOK_ID,DESCRIPTION,TITLE,WRITTER,PRICE,BOOK_IMAGE)
               VALUES (BOOK_ID.NEXTVAL,'$DESCRIPTION','$TITLE','$WRITTER','$PRICE','$BOOK_IMAGE')";

        $insert=$this->db->query($query);
        return $insert;
	}
	public function get_order_info()
	{
	$this->db->join('RECIPE_BOOKS','ORDER_BOOK.BOOK_ID=RECIPE_BOOKS.BOOK_ID');
	
	$this->db->where('ACTIVE',0);
	$query=$this->db->get('ORDER_BOOK');
	return $query->result();
	}
	public function update_order($data)
	{
	$this->db->where('ORDER_ID',$this->input->post('order_id'));
	$this->db->update('ORDER_BOOK',$data);
	}
	public function delete_order()
	{
	$this->db->where('ORDER_ID',$this->input->post('order_id'));
	$this->db->delete('ORDER_BOOK');
	
	}
	public function update_password_model($data)
	{
	$this->db->update('ADMIN',$data);
	}
	}
