<?php $this-> load->view('includes/header')?>
<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "archieve_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>


<?php $this-> load->view('includes/navigation')?>  
<h2>Archieve</h2>
<div class="span2">
</div> 
    <div class="container">  
      <!-- Example row of columns -->  
      <div class="row">  
        <div class="span4">  
            
          <p>To Start Slideshow Click on the Arrow </p>  
          <div id="myCarousel" class="carousel slide">  
            <!-- Carousel items -->  
          <div class="carousel-inner">  
		  
        <?php if (isset($images) && count($images)):
			foreach($images as $image):	?>
			<div class="item">
				
					<img border= "0" src="<?php echo $image['url']; ?>" width="500" height="99" />
							
			</div>  
		<?php endforeach;  ?>
		<?php endif ?>
  </div>  
  <!-- Carousel nav -->  
  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><</a>  
  <a class="carousel-control right" href="#myCarousel" data-slide="next">></a>  

</div>  
</div>  
  </div>
      
  
    </div> <!-- /container -->  
  
    <!-- Le javascript  
    ================================================== -->  
    <!-- Placed at the end of the document so the pages load faster -->  
    <script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
    <script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-carousel.js"></script>  


<?php $this-> load->view('includes/footer')?>