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
<?php  $student_id=$this->session->userdata('student_id'); ?>
  <P> Welcome <?php echo $student_id;   ?> </p>
<?php $this-> load->view('includes/footer')?>