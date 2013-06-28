 <?php $this-> load->view('includes/header')?>

<script>
$(document).ready(

function()
{

<?php $data['selected_nav'] = "home_navbar";
$this-> load->view('includes/nav_helper',$data)?>

});
    </script>

</head>
  <body>


<?php $this-> load->view('includes/navigation')?>
<div class="row-fluid" style="min-height: 450px">
<div class="span12">


 </div>
 
 
 
</br>

  </br>
  </div>
<?php $this-> load->view('includes/footer')?>