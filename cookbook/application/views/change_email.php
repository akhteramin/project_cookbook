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
        echo form_open('setting/update_email');
        ?>
		<?php
		
		?>
        <div class="row-fluid"style="min-height: 450px">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Change Email</legend>
            
			 

	 <label>Type old Email</label>
           <input type="text" placeholder="type email" name="old_email">
			
			  <label>New Email</label>
           <input type="email" placeholder="type new email" name="email">
			
			 
			
 </fieldset>
         <input type="submit" class ="btn btn-success" value="Change Email" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>