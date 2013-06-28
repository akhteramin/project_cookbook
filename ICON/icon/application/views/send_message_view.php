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
        echo form_open_multipart('message/save_message');
        ?>
		<?php
		
		?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Send Message</legend>
            <label>Reciever Email</label>
			<?php
			if(isset ($sender_mail) )
			{
			
			?>
			 <input type="text" placeholder="Email" name="reciever_mail" value="<?php echo $sender_mail;?>" >
			 <?php }
			 else {?>
			
			  <input type="text" placeholder="Email" name="reciever_mail">
			   <?php
			   }
			 ?>
			 <label>Subject</label>
			  <input type="text" placeholder="Subject" name="subject">
			 

	<div class="control-group">
                <label class="control-label" >Choose File</label>
               
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
                    <p>  <input type="file" name="userfile"  size='18'/><br/></p>
               
            </div>
			
			  <label>Write Here</label>
            <textarea rows="6" cols="15" name="message" placeholder="Write here"> </textarea>
			 
			
 </fieldset>
         <input type="submit" class ="btn btn-success" value="Send Message" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>