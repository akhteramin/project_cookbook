 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "recipe_books_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>
<div class="span12">
<div class="span8">
</div>

 </div>
 
 
 <div class="row-fluid"style="min-height: 450px">
 <ul class="thumbnails">
			 <?php if(isset($record)):  foreach($record as $row): ?>
              <li class="span9">
                <div class="thumbnail">
<img src="<?php echo site_url('image').'/resize?h=120&w=180&l='.urlencode($row->BOOK_IMAGE);?>">	
                  <div class="caption">
                   
                  </div>
                  <div class="widget-footer">
				  <h3>Order Id</h3>
                    <p>
					<?php
                      echo $row->ORDER_ID;
					  //echo $row->BOOK_IMAGE;
					  ?>
                    </p>
				  <h3>Recipe Books Name</h3>
                    <p>
					<?php
                      echo $row->TITLE;
					  //echo $row->BOOK_IMAGE;
					  ?>
                    </p>
					<h3>Writter</h3>
					<p>
					<?php
                      echo $row->WRITTER;
					  ?>
                    </p>
					<h3>Description</h3>
					<p>
					<?php
                      echo $row->DESCRIPTION;
					  ?>
                    </p>
					<h3>Price</h3>
					<p>
					<?php
                      echo $row->PRICE." BDT";
					  ?>
                    </p>
					<?php if(!$row->BKASH_NO){?>
					
                    <p>
                      <a data-toggle="modal" href="#pay_order" class="btn btn-primary">Pay now</a>&nbsp;
                    </p>
					<?php } ?>
                  </div>
				  </div>
              </li>
			                
			  <?php endforeach; ?>
		<?php else : ?>
	<?php endif; ?>
	</ul>
</div>
 
 
</br>
</br>
<?php $this-> load->view('includes/footer')?>
<div id="pay_order" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" style="color: green;">Close</a>  
<h3>Transaction Id</h3>  
</div>  
<div class="modal-body">  
 <form action='<?php echo site_url('order');?>/insert_bkash' accept-charset="utf-8" method="post">
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
            <label>Transaction Id</label>
            <input type="text" placeholder="bkash Id" name="bkash_id">
            <br/>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Submit" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Forgot Password?</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  