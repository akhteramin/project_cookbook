 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "favourites_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>

 <section>
  </br></br></br>
 <div class="row-fluid"style="min-height: 450px">
            <ul class="thumbnails">
			
			<div>
			 <legend>FAVOURITE RECIPES</legend>
			 </div>
			 <?php if(isset($record)):  foreach($record as $row): ?>
              <li class="span3">
                <div class="thumbnail">
                 <img src="<?php echo site_url('image').'/resize?h=120&w=180&l='.urlencode($row->PHOTO);?>">
                  <div class="caption">
                    
                  </div>
                  <div class="widget-footer">
				 
				  <h3>Recipe Name:</h3>
                    <p>
					<?php
                      echo $row->TITLE;
					  ?>
                    </p>
					<h3>Achieved Coins:</h3>
					<p>
					<?php
                      echo $row->RATING;
					  ?>
                    </p>
                    <p>
					   <a href="<?php echo  site_url('read_more/show_read_more')."?id=".$row->RECIPE_ID;?>" class="btn">Read more</a>
					  </br>
					  </p>
					  <p>
					   <a href="<?php echo  site_url('read_more/delete_favourite')."?id=".$row->RECIPE_ID;?>" class="btn">Delete</a>
					  </br>
					  </p>
                  </div>
                </div>
              </li>
			  <?php endforeach; ?>
<?php else :?>
 <?php endif; ?>
			  </ul>
			  </div>
 
  <?php echo $this->pagination->create_links(); ?>
  </section>
 
</br>

  </br>
<?php $this-> load->view('includes/footer')?>