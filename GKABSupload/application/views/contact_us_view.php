<?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "contact_us_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>




<?php $this-> load->view('includes/navigation')?>
  
      
	  
	   </br>
	   <center>For any kind of problem(Such as forgot password or something else).Email us at this address:gkabswebsite@gmail.com</center>
	  </br>
<?php $this-> load->view('includes/footer')?>
