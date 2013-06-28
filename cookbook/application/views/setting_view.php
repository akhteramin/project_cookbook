
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
    <legend>Settings</legend>
    <div id="Create" style="min-height: 450px">
      
 <div class="row-fluid">
    
 <fieldset id="profile">
            <table class="table table-bordered" >
                <tr>
                 
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
						<?php if($row->PROFILE_PIC) {?>
						<div class="picture">
				
					<img border= "0" src="<?php echo base_url().$row->PROFILE_PIC; ?>" width="300" height="90" />
					
			</div>  
			<?php } else {?>
			NO IMAGE AVAILABLE</br><?php } ?>
			 <?php
        echo form_open_multipart('setting/change_user_image');
        ?>
			<div class="control-group">
                <label class="control-label" >Choose an Image File<(300*400 & 400kb)</label>
               
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
                    <p>  <input type="file" name="userfile"  size='18'/><br/></p>
               
            </div>
			<input type="submit" class ="btn btn-success" value="Save Image" />
          <?php echo form_close(); ?>
			</br></br></br></br>
			
            
						</br>
						<?php
						 echo  '<a href='.site_url("setting/change_password").'>'."[Change Password]".'</a>'; 
						?>
						</br>
						
					
					Email:
                    <?php echo $row->EMAIL; ?>
					</br>
						<?php
						 echo  '<a href='.site_url("setting/change_email").'>'."[Change email]".'</a>'; 
						?>
						</br>
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
