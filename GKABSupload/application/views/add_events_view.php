<?php $this->load->view('includes/header') ?>
<script>
    $(document).ready(

    function()
    {

<?php $data['selected_nav'] = "add_events_navbar";
$this->load->view('includes/nav_helper', $data) ?>

    });
</script>
</head>
<body>

    <?php $this->load->view('includes/navigation') ?>
    <?php echo validation_errors(); if(isset ($msg) )echo $msg; ?>
    <div id="Create">
        <?php
        echo form_open('events/save_events');
        ?>
		<?php
		
		?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Create Events</legend>
           
			 <label>Evants Name</label>
			  <input type="text" placeholder="Events name" name="events_name">
			
			  <label>Write Here</label>
            <textarea rows="10" cols="120" name="description" placeholder="Write here"> </textarea>
			 
			
 </fieldset>
         <input type="submit" class ="btn btn-success" value="Create Events" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>