
 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "settings_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>



<section>
    <legend>Upload Archieve Image</legend>
    <div id="Create">
      
 <div class="row-fluid">
     <?php
        echo form_open_multipart('upload_image/save_image');
        ?>
			<div class="control-group">
                <label class="control-label" >Choose an Image File</label>
               
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
                    <p>  <input type="file" name="userfile"  size='18'/><br/></p>
               
            </div>
			<input type="submit" class ="btn btn-success" value="Save Image" />
          <?php echo form_close(); ?>
			</br></br></br></br>
 <fieldset id="profile">
            <table class="table table-bordered" >
                <tr>
                <?php  if(isset($record)):	foreach($record as $row): ?>
				
                                   
						<td>
						<?php if($row->image_path) {?>
						<div class="picture">
				
					<img border= "0" src="<?php echo base_url().$row->image_path; ?>" width="300" height="90" />
					
			</div>  
			<?php } else {?>
			NO IMAGE AVAILABLE</br><?php } ?>
			
			
            
						
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
