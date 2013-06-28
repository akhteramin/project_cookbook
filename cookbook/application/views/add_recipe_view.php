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
	

      <div class="row-fluid"style="min-height: 450px">
        <div class="span4"></div>
           <div class="span5">
    <?php echo validation_errors();
	
    ?>
        <?php
        echo form_open_multipart('admin_add_recipe/insert_recipe');
        ?>
        <fieldset>
            <legend>Add Recipe</legend>
            <label>Category</label>
            <input type="text" placeholder="type category" name="category"/>
            <label>Title</label>
            <input type="title" placeholder="title" name="title"/>
				<div class="control-group" id="image">
                <label class="control-label" >Choose File</label>
               
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
                    <p>  <input type="file" name="userfile"  size='18'/><br/></p>
					
               
            </div>
			
			<label>Engradients</label>
            <textarea rows="3" cols="15" name="engradients" placeholder="Write the engredients needed"> </textarea>
			<label>Procedure</label>
            <textarea rows="6" cols="15" name="procedure" placeholder="Write procedure"> </textarea>
            <br/>

        </fieldset>
         <input type="submit" class ="btn btn-success" value="Submit" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>
			 </div>
<?php $this->load->view('add_image_javascript');?>
<?php $this->load->view('includes/footer') ?>
