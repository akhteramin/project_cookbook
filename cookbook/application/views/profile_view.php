
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
      
 <div class="row-fluid"style="min-height: 450px">
    
 <fieldset id="profile">
            <table class="table table-bordered" >
                <tr>
                 
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
						<?php if($row->PROFILE_PIC) {?>
						<div class="picture">
				
					<img border= "0" src="<?php echo base_url().$row->PROFILE_PIC; ?>" width="300" height="40" />
					
			</div>  
			<?php } else {?>
			NO IMAGE AVAILABLE</br>
			<?php if($row->USERNAME==$this->session->userdata('username')) { echo  '<a href='.site_url("setting/user_setting/").'>'."Upload A profile Picture".'</a>'; } ?>
			</br></br></br></br>
			<?php } ?>
						<h1>Name:</h1>
						<?php
						echo  $row->USERNAME;
						?>
						</br>
						
						</br>
						Email:
                    <?php echo $row->EMAIL; ?>
					
					</br>
					Profile Status:
						<?php
						echo  $row->STATUS;
						?>
						</br>
					<!--?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						if($row->student_id!=$this->session->userdata(''))
						echo  '<a href='.site_url("message/send_message/$row->student_id").'>'."Send Message".'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?-->
						
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
