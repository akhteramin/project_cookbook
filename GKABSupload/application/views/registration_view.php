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
            <legend>Be GKABS Member</legend>
            <label>Name</label>
            <input type="text" placeholder="Student name" name="student_name">
			<label>Student Id</label>
            <input type="text" placeholder="Student id" name="student_id">
			 <label>Department</label>
            <input type="text" placeholder="Department" name="department">
			 <label>Batch</label>
            <input type="text" placeholder="Batch" name="batch">
			<label>Email</label>
            <input type="text" placeholder="Email" name="email">
			 <label>Contact Info</label>
            <input type="text" placeholder="Phone no" name="contact_info">
			 <label>Job Description</label>
            <textarea rows="6" cols="15" name="job_description" placeholder="Give job description here"> </textarea>
            <label>Password</label>
            <input type="password" placeholder="Password" name="student_password">
			<label>School Name</label>
            <input type="text" placeholder="School name" name="school">
			 <label>College Name</label>
            <input type="text" placeholder="College name" name="college">
			<label>Area</label>
            <select name="area" style="width:130px;">

                 <option value= "bagerhat" >
                     <?php echo "Khulna"; ?></option>

                <option value= "satkhira" >
                     <?php echo "Sarkhira"; ?></option>

                                  <option value= "khulna" >
                     <?php echo "Bagerhat"; ?></option>
                                  
            </select>
			
            <br/>
			

        </fieldset>
         <input type="submit" class ="btn btn-success" value="Create" />
          <?php echo form_close(); ?>
         </div>
             <div class="span3"></div>

        </div>

  
</div>

<?php $this->load->view('includes/footer') ?>