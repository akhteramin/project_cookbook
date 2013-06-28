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
        echo form_open('registration/insert_registration_data');
        ?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Be ICON Member</legend>
            <label>Name</label>
            <input type="text" placeholder="Type name here" name="student_name">
			<label>Username</label>
            <input type="text" placeholder="Username" name="username">
			<label>Email</label>
            <input type="text" placeholder="Email" name="email">
			 <label>Contact Info</label>
            <input type="text" placeholder="Phone no" name="contact_info">
			 <label>Job Description</label>
            <textarea rows="6" cols="10" name="job_description" placeholder="Give job description here"> </textarea>
            <label>Password</label>
            <input type="password" placeholder="Password" name="student_password">
			 <label>Confirm Password</label>
            <input type="password" placeholder="Confirm Password" name="password">
			
			<label>School Name</label>
            <input type="text" placeholder="School name" name="school">
			 <label>College Name</label>
            <input type="text" placeholder="College name" name="college">
			<label>Address</label>
            <textarea rows="6" cols="15" name="area" placeholder="Give Adress Here"> </textarea>
			
            <br/>
			

        </fieldset>
         <input type="submit" class ="btn btn-success" value="Create" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>