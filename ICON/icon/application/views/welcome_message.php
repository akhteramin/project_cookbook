<?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "home_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>




<?php $this-> load->view('includes/navigation')?>
 
  </br>
     
	  Thanx to all for visiting this website.
	  </br>
<?php $this-> load->view('includes/footer')?>
