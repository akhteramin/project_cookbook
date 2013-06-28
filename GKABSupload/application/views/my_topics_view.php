
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
    <legend>My Written Topics</legend>
    <div id= >
                <?php
    if(isset($msg)) echo $msg;else{ ?>
 <div class="row-fluid">
    
 <fieldset>
            <table class="table table-bordered" >
                <tr>
                   <th>Topics Name</th>
				   <th>Date</th>
                </tr>
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						<td>
						
						<?php
						$encode_topics=rawurlencode($row->topics_name);
						echo  '<a href='.site_url("topics/topics_details/$encode_topics").'>'.$row->topics_name.'</a>';
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
