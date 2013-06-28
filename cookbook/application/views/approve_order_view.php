
 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "profile_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>



<section>
    <legend>Order List</legend>
    <div id="Create">
      
 <div class="row-fluid" style="min-height: 450px">
    
 <fieldset id="profile">
            <table class="table table-bordered" >
                <tr>
                 
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
			<?php if(!$this->session->userdata('username')){?>
						Name:
						<?php
						echo  $row->USERNAME;
						?>
						</br>
						<?php } ?>
						</br>
						BOOK ID:
                    <?php echo $row->BOOK_ID; ?>
					</br>
						BOOK Name:
                    <?php echo $row->TITLE; ?>
					</br>
					</br>
						Price:
                    <?php echo $row->PRICE; ?>
					</br>
					Bkash No:
						<?php
						echo  $row->BKASH_NO;
						?>
						</br>
					<!--?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						if($row->student_id!=$this->session->userdata(''))
						echo  '<a href='.site_url("message/send_message/$row->student_id").'>'."Send Message".'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?-->
						<?php if(!$this->session->userdata('username')){?>
						 <p>
                      <a data-toggle="modal" href="#approve" class="btn btn-primary">Approve</a>&nbsp;
                    </p>
					
					  <p>
                      <a data-toggle="modal" href="#delete" class="btn btn-primary">Delete</a>&nbsp;
                    </p>
					<?php } ?>
					<?php if(!$row->ACTIVE){?>
					<p>
                      <a data-toggle="modal" href="#delete" class="btn btn-primary">Cancel Order</a>&nbsp;
                    </p>
					<?php } ?>
					</td>
                    </tr>
					
					 <?php endforeach; ?>
                            <?php else : ?>

                           <?php endif; ?>
						   </table>
                     </fieldset>
                </div>         
       
      
    </div>
</section>
       
<?php $this-> load->view('includes/footer')?>
<div id="approve" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" style="color: green;">Close</a>  
<h3>Are You Sure? You want to approve</h3>  
</div>  
<div class="modal-body">  
 <form action='<?php echo site_url('approve_order');?>/approve' accept-charset="utf-8" method="post">
		<?php
 echo form_hidden('order_id', $row->ORDER_ID);  
?>
<fieldset>
            <h3>Order Id</h3>
                    <p>
					<?php
                      echo $row->ORDER_ID;
					  //echo $row->BOOK_IMAGE;
					  ?>
                    </p>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Approve" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Forgot Password?</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  
<div id="delete" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" style="color: green;">Close</a>  
<h3>Are You Sure? You want to delete</h3>  
</div>  
<div class="modal-body">  
 <form action='<?php echo site_url('approve_order');?>/delete' accept-charset="utf-8" method="post">
		<?php
 echo form_hidden('order_id', $row->ORDER_ID);  
?>
<fieldset>
            <h3>Order Id</h3>
                    <p>
					<?php
                      echo $row->ORDER_ID;
					  //echo $row->BOOK_IMAGE;
					  ?>
                    </p>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Delete" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Forgot Password?</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  