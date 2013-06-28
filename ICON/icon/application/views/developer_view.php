<?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>




<?php $this-> load->view('includes/navigation')?>
  <img border="0" src="<?php echo base_url().'/images/developer.jpg'; ?>" width="300" height="90">
  </br>
     Akhter Al Amin (Farhan)
	  </br>
	  Department of CSE
	   </br>
	  BUET
	  </br>
     Email:farhanbuet09@gmail.com
	   </br>
	 DEVELOPER and CO-FOUNDER of OUR'S DEVELOPMENT TEAM
	  </br>
<?php $this-> load->view('includes/footer')?>
