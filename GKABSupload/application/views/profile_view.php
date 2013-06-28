
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
			<?php if($row->student_id==$this->session->userdata('student_id')) { echo  '<a href='.site_url("setting/user_setting/$row->student_id").'>'."Upload A profile Picture".'</a>'; } ?>
			</br></br></br></br>
			<?php } ?>
						Name:
						<?php
						echo  $row->student_name;
						?>
						</br>
						Department:
						 <?php
						//PROFILE SUPPOSED TO BE SHOWED
						echo  $row->department;
						
						//echo  '<a href='.site_url("profile/profile_details/$row->student_id").'>'.$row->student_name.'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?>
						</br>
						Batch:
						 <?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						
						echo  $row->batch;
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?>
						</br>
						Email:
                    <?php echo $row->email; ?>
					
					</br>
					<?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						if($row->student_id!=$this->session->userdata('student_id'))
						echo  '<a href='.site_url("message/send_message/$row->student_id").'>'."Send Message".'</a>';
						
						
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
