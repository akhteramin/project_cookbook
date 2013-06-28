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
        echo form_open('forgot_password/check_email');
        ?>
        <div class="row-fluid" style="min-height: 450px">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Forgot password</legend>
            <label>Email Address</label>
            <input type="text" placeholder="type your email address here" name="email">
           
            <br/>

        </fieldset>
                   <input type="submit" class="btn btn-success"  value="Submit" />

                            </div>
             <div class="span3"></div>

        </div>
<?php echo form_close(); ?>
</div>

<?php $this->load->view('includes/footer') ?>
