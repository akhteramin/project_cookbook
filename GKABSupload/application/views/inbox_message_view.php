
 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "message_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>



<section>
    <legend>Inbox</legend>
    <div id= inbox_message>
                <?php
    if(isset($msg)) echo $msg;else{ ?>
 <div class="row-fluid">
    
 <fieldset>
            <table class="table table-bordered" >
                <tr>
                   <th></th>
				   
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>
                       <td> Sender Name:<?php echo $row->sender_name; ?> </br>
                       Sender Mail: <?php echo $row->sender_mail; ?> </br>
                         Subject:</br>---------------------</br><?php echo $row->subject; ?>  </br>
                        Message:</br>---------------------</br><?php echo $row->message; ?> </br>
                        
						</br>
						<?php
						if($row->attach_path)
						echo  '<a href='.base_url()."$row->attach_path".'>Attached File</a>';
						else echo 'NO FILE ATTACHED';
						?> </br>
						<?php
						echo  '<a href='.site_url("message/send_message/$row->sender_id").'>Reply</a>';
						?>
						</br>
                        <?php echo $row->date; ?>
						
						
						</td>

                    </tr>

                            <?php endforeach; ?>
                            <?php else : ?>

                           <?php endif; ?>

            </table>

</fieldset>
</div>
       
        <?php }?><br/>
          <?php echo $this->pagination->create_links(); ?>
    </div>
</section>
       
<?php $this-> load->view('includes/footer')?>
