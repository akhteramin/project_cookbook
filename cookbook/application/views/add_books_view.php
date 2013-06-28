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
	

      <div class="row-fluid"  style="min-height: 450px">
        <div class="span4"></div>
           <div class="span5">
    <?php echo validation_errors();
	
    ?>
        <?php
        echo form_open_multipart('admin_add_books/insert_books');
        ?>
        <fieldset>
            <legend>Add Books</legend>
            <label>Title</label>
            <input type="title" placeholder="title" name="title">
				<label>Writter Name</label>
            <input type="title" placeholder="Type Writter Name" name="writter">
			<div class="control-group">
                <label class="control-label" >Choose File</label>
               
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
                    <p>  <input type="file" name="userfile"  size='18'/><br/></p>
               
            </div>
			<label>Overview</label>
            <textarea rows="3" cols="15" name="description" placeholder="Write overview"> </textarea>
			<label>Price</label>
            <textarea rows="1" cols="3" name="price"> </textarea>BDT
            <br/>

        </fieldset>
         <input type="submit" class ="btn btn-success" value="Submit" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>
			 </div>

<?php $this->load->view('includes/footer') ?>
