<?php $this->load->view('includes/header') ?>
<html lang="en">
<head>
            <title>ICON</title>
                <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo base_url() . 'jquery' ?>/jquery.js"></script>
        <!-- Bootstrap -->
        <link href="<?php echo base_url() . 'assets' ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url() . 'assets' ?>/js/bootstrap.min.js"></script>

 
<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


</head>
<body>
    <?php $this->load->view('includes/navigation') ?>

    <div style='height:20px;'></div>
    <div>
        <?php echo $output; ?>

    </div>

<?php $this->load->view('includes/footer') ?>
