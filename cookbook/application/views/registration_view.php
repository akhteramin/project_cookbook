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
      <div class="content" style="min-height: 450px">
<?php if($msg){ echo $msg;
echo validation_errors();
}
else {?>
<legend>You have successfully registered.</legend>
<?php }?>
</div>
<?php $this-> load->view('includes/footer')?>
