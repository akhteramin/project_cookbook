 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "recipe_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>
<div class="span12">

 </div>

  
 <div class="row-fluid"style="min-height: 450px">
            <ul class="thumbnails">
			 <?php if(isset($record)):  foreach($record as $row): ?>
              <li class="span7">
                <div class="thumbnail">
				
				<img src="<?php echo site_url('image').'/resize?h=120&w=180&l='.urlencode($row->PHOTO);?>">
                 
                  <div class="caption">
                     
                  </div>
                  <div class="widget-footer" >
				 <h3>Category</h3>
                    <p>
					<?php
                      echo $row->CATEGORY;
					  ?>
                    </p>
				  <h3>Recipe Name</h3>
                    <p>
					<?php
                      echo $row->TITLE;
					  ?>
                    </p>
					<h3>Engredients</h3>
                    <p>
					<?php
                      echo $row->ENGRADIENTS;
					  ?>
                    </p>
					<h3>Procedure</h3>
                    <p>
					<?php
                      echo $row->PROCEDURE;
					  ?>
                    </p>
					<h3>Rating</h3>
					<p>
					<?php
                      echo $row->RATING;
					  ?>
                    </p>
					 <p>
					  <a data-toggle="modal" href="#give_rating" class="btn">Give Rating</a>
		
					  </p>
                    <p>
					  <a href="<?php echo  site_url('show_recipe/show_recipe_details');?>" class="btn">Back</a>
					  </br>
					  </p>
			
					
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
<div id="give_rating" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" style="color: green;">Close</a>  
<h3>Rating</h3>  
</div>  
<div class="modal-body">  
 <form action='<?php echo site_url('read_more');?>/insert_rating' accept-charset="utf-8" method="post">
		<?php
 echo form_hidden('recipe_id', $row->RECIPE_ID);  
?>
<fieldset>
            <h3>Recipe Name</h3>
                    <p>
					<?php
                      echo $row->TITLE;
					  //echo $row->BOOK_IMAGE;
					  ?>
                    </p>
            <label>Give coin The Recipe</label>
            <select name="rating" style="width:130px;" font="black">

                 <option value= "1" >
                     <?php echo "1"; ?></option>

                <option value= "2" >
                     <?php echo "2"; ?></option>

                 <option value= "3" >
                     <?php echo "3"; ?></option>
                   <option value= "4" >
                     <?php echo "4"; ?></option>

                 <option value= "5" >
                     <?php echo "5"; ?></option>
                                  
            </select>
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