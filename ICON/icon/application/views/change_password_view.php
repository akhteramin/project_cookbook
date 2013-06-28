<?php $this->load->view('includes/header') ?>
<script>
    $(document).ready(

    function()
    {

<?php $data['selected_nav'] = "create_client_navbar";
$this->load->view('includes/nav_helper', $data) ?>

    });
</script>
</head>
<body>

    <?php $this->load->view('includes/navigation') ?>
    <?php echo validation_errors(); if(isset ($msg) )echo $msg; ?>
    <div id="Create">
        <?php
        echo form_open('setting/update_password');
        ?>
		<?php
		
		?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Change Password</legend>
            
			 
         
	
			
			  <label>New Password</label>
           <input type="password" placeholder="password" name="password">
			 <label>Confirm New Password</label>
           <input type="password" placeholder="confirm password" name="confirm_password">
			 
			
 </fieldset>
         <input type="submit" class ="btn btn-success" value="Change Password" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>