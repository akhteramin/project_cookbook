
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
    <legend>Profile</legend>
    <div id="Create">
      
 <div class="row-fluid">
    
 <fieldset id="profile">
            <table class="table table-bordered" >
                <tr>
                 
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
						<?php if($row->image) {?>
						<div class="picture">
				
					<img border= "0" src="<?php echo base_url().$row->image; ?>" width="300" height="90" />
					
			</div>  
			<?php } else {?>
			NO IMAGE AVAILABLE</br>
			<?php if($row->username==$this->session->userdata('username')) { echo  '<a href='.site_url("setting/user_setting/$row->username").'>'."Upload A profile Picture".'</a>'; } ?>
			</br></br></br></br>
			<?php } ?>
						Name:
						<?php
						echo  $row->student_name;
						?>
						</br>
						
						Email:
                    <?php echo $row->email; ?>
					
					</br>
					<?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						if($row->username!=$this->session->userdata('username'))
						echo  '<a href='.site_url("message/send_message/$row->username").'>'."Send Message".'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?>
						</br>
					Contact Info:
                    <?php echo $row->contact_info; ?>
					</br>
					Job Description:
                    <?php echo $row->job_description; ?>
					</br>
					School:
                    <?php echo $row->school; ?>
					</br>
					College:
                    <?php echo $row->college; ?>
					</br>
					Area:
                    <?php echo $row->area; ?>
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
