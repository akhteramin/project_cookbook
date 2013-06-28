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
        echo form_open('topics/save_topics');
        ?>
		<?php
		
		?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Create Your Topics</legend>
           
			 <label>Topics Heading</label>
			  <input type="text" placeholder="Topics name" name="topics_name">
			
			  <label>Write Here</label>
            <textarea rows="10" cols="120" name="description" placeholder="Write here"> </textarea>
			 
			
 </fieldset>
         <input type="submit" class ="btn btn-success" value="Create Discussion" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>