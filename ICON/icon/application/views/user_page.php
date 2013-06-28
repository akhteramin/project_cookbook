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
<?php  $username=$this->session->userdata('username'); ?>
  <P> Welcome <?php echo $username;   ?> </p>
<?php $this-> load->view('includes/footer')?>