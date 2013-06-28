
 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "events_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>



<section>
    <legend>Events</legend>
    <div id= >
                <?php
    if(isset($msg)) echo $msg;else{ ?>
 <div class="row-fluid">
    
 <fieldset>
            <table class="table table-bordered" >
                
                <?php if(isset($record)):  foreach($record as $row): ?>

                    <tr>               
						
                    <h1> <?php echo  highlight_phrase($row->events_name,$row->events_name, '<span style="color:#990000">', '</span>'); ?></h1>
					 </br>
					  <?php echo word_wrap($row->description,200); ?>
					 
					 
                    </tr>

                            <?php endforeach; ?>
                            <?php else : ?>

                           <?php endif; ?>

            </table>

</fieldset>
</div>
       
        <?php }?><br/>
         
    </div>
</section>
       
<?php $this-> load->view('includes/footer')?>
