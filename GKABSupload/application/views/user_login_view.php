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


    <?php echo validation_errors(); ?>
    <div id="login">


        <?php
        echo form_open('user_auth/login');
        ?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>User Login</legend>
            <label>Student ID</label>
            <input type="text" placeholder="type student id here" name="student_id">
            <label>Password</label>
            <input type="password" placeholder="Write you password here!!" name="password">
            <br/>

        </fieldset>
                   <input type="submit" class="btn btn-success"  value="Login" />

                            </div>
             <div class="span3"></div>

        </div>
<?php echo form_close(); ?>
</div>

<?php $this->load->view('includes/footer') ?>
