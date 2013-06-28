<?php $this->load->view('includes/header') ?>
<script>
    $(document).ready(

    function()
    {

<?php $data['selected_nav'] = "login_navbar";
$this->load->view('includes/nav_helper', $data) ?>

    });
</script>
</head>
<body>

    <?php $this->load->view('includes/navigation') ?>
	

      <div class="row-fluid" style="min-height: 450px">
        <div class="span4"></div>
           <div class="span5">
    <?php echo validation_errors();

    ?>



        <?php
        echo form_open('admin_auth/login');
        ?>
  
 


        <fieldset>
            <legend>Admin Log In</legend>
            <label>Username</label>
            <input type="text" placeholder="username" name="username">
            <label>Password</label>
            <input type="password" placeholder="Write you password here!!" name="password">
            <br/>

        </fieldset>
         <input type="submit" class ="btn btn-success" value="Login" />
         
         </div>
             <div class="span3"></div>

        

  <?php echo form_close(); ?>
</div>

<?php $this->load->view('includes/footer') ?>
