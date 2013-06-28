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
 <section>
  
 <div class="row-fluid"style="min-height: 450px">

 <ul class="thumbnails">
			 <?php if(isset($record)):  foreach($record as $row): ?>
              <li class="span3">
                <div class="thumbnail">
<img src="<?php echo site_url('image').'/resize?h=120&w=180&l='.urlencode($row->BOOK_IMAGE);?>">	
                  <div class="caption">
                   
                  </div>
                  <div class="widget-footer">
				 
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
					
                    <p>
                      <a href="<?php echo site_url('order/order_books_view/')."?id=".$row->BOOK_ID;?>" class="btn btn-primary">order now</a>&nbsp;
                      <a href="#" class="btn">Read more</a>
                    </p>
                  </div>
				  </div>
              </li>
			                
			  <?php endforeach; ?>
<?php else : ?>
 <?php endif; ?>
			   </ul>
			 
			  			  </div>
						  <?php echo $this->pagination->create_links(); ?>
  </section>
 
</br>

  </br>
<?php $this-> load->view('includes/footer')?>