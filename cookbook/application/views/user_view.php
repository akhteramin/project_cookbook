 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "recipe_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
$(function() {
       $('.star-radio').rating({
            required: true,
            callback: function(value, link) {
            $.ajax({
                type: "post",
                url: site_url + "show_recipe/rate",
                dataType: "json",
                data: "&post_url=" + $('#post_url').val() + "&rate_val=" + value,
                success: function(e) {
                    $.jGrowl(e.code + "<br>" + e.msg);
                }
         });
     }
});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>
<div class="span12">
<div class="span8">
</div>
<section>
 </div>
  <?php if(isset($msg)){echo $msg;} else {?>
 <div class="row-fluid"style="min-height: 450px">
 
            <ul class="thumbnails">
			 <?php if(isset($record)):  foreach($record as $row): ?>
              <li class="span3">
                <div class="thumbnail">
                 
                  <div class="caption">
                     
                  </div>
                  <div class="widget-footer">
				
				  <h3></h3>
				  Name
                    <p>
					<?php
					echo  '<a href='.site_url("profile/get_profile/$row->USERNAME").'>'.$row->USERNAME.'</a>';
					?>
                    </p>
					Email Address:
					<p>
					<?php
                      echo $row->EMAIL;
					  ?>
					  
					   
					
                  </div>
                </div>
              </li>
			  <?php endforeach; ?>
			   
<?php else : ?>
 <?php endif; ?>
			  </ul>
			  
			  </div>
			 
 <?php } ?>
  

</br>
<?php echo $this->pagination->create_links(); ?>
 </section>

  </br>
<?php $this-> load->view('includes/footer')?>
<div id="delete" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" color="red"  style="color: green;" >Close</a>  
<h3>Are You Sure?</h3>  
</div>  
<div class="modal-body">  
 <?php
        echo form_open('user_list/delete_user');
        ?>
          <?php
        echo form_hidden('username',$row->USERNAME);
        ?> 
 <input type="submit" class ="btn btn-success" value="Delete" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Submit</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  
<div id="edit" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" color="red"  style="color: green;" >Close</a>  
<h3>Edit Status</h3>  
</div>  
<div class="modal-body">  
 <?php
        echo form_open('user_list/edit_user');
        ?>
		<?php
        echo form_hidden('username',$row->USERNAME);
        ?> 
           <fieldset>
            
            <label>New Status</label>
            <select name="status" style="width:130px;" font="black">

                 <option value= "Expert chef" >
                     <?php echo "EXPERT"; ?></option>

                <option value= "Grand Master Chef" >
                     <?php echo "Grand Master Chef"; ?></option>

                 <option value= "THE BOSS" >
                     <?php echo "THE BOSS"; ?></option>
                                  
            </select>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Update" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Submit</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  