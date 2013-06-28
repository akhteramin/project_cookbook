
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
    <legend>Sent Message</legend>
    <div id= sent_message>
                <?php
    if(isset($msg)) echo $msg;else{ ?>
 <div class="row-fluid">
    
 <fieldset>
            <table class="table table-bordered" >
                <tr>
                    <th>Reciever Mail</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Attach</th>
                    <th>Sent time</th>
                    
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>
                        <td> <?php echo $row->reciever_mail; ?> </td>
                        <td> <?php echo $row->subject; ?> </td>
                        <td> <?php echo $row->message; ?></td>
                        <td>
						
						<?php
						if($row->attach_path)
						echo  '<a href='.base_url()."$row->attach_path".'>Attached File</a>';
						else echo 'NO FILE ATTACHED';
						?>
						</td>
                        <td> <?php echo $row->date; ?></td>

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
