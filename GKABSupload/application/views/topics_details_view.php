
 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "topics_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>



<section>
    <legend>Discussion</legend>
    <div id="Create">
        <?php
		
		$hidden = array('topics_name' => $topics_name);

        echo form_open('topics/save_comments','',$hidden);
		 
        ?>
                <?php
    if(isset($msg)) echo $msg;else{ ?>
 <div class="row-fluid">
    
 <fieldset id="topics">
            <table class="table table-bordered" >
                <tr>
                 
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
						<h1><?php
						echo   highlight_phrase($row->topics_name,$row->topics_name, '<span style="color:#990000">', '</span>');
						?></h1>
						</br>
						Authored By
						 <?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						
						echo  '<a href='.site_url("profile/profile_details/$row->student_id").'>'.$row->student_name.'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?>
						</br>
						-----------------------
						</br>
						</br>
						 <?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						
						echo word_wrap($row->description,200);;
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?>
						</br>
                    <?php echo $row->date; ?></td>
                    </tr>

                            <?php endforeach; ?>
                            <?php else : ?>

                           <?php endif; ?>
						     </table>

</fieldset>
</div>
<div class="row-fluid">
<fieldset id="comments">
            <table class="table table-bordered" >
				<?php if(isset($comment_record)):  foreach($comment_record as $comment_row): ?>

                          <tr>          
						
						<td> <?php
						//PROFILE SUPPOSED TO BE SHOWED
						
						
						echo  '<a href='.site_url("profile/profile_details/$row->student_id").'>'.$comment_row->student_name.'</a>';
						
						
						//PROFILE SUPPOSED TO BE SHOWED
						?></br>
						
						<?php
						echo $comment_row->comments;
						?>
						</br>
                     <?php echo $comment_row->date; ?>
                   

                            <?php endforeach; ?>
                            <?php else : ?>
							NO COMMENTS AVAILABLE
							</br>
                           <?php endif; ?>
						   </td>
 </tr>
  
            </table>
 <label>Write Here</label>
            <textarea rows="2" cols="60" name="comments" placeholder="Write here"> </textarea></br>
			 <input type="submit" class ="btn btn-success" value="Submit Comments" />
          <?php echo form_close(); ?>
</fieldset>

</div>
       
        <?php }?>
         
    </div>
</section>
       
<?php $this-> load->view('includes/footer')?>
