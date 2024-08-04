<!DOCTYPE html>
<html>
<head>
<title>Karam Production</title>
<link href="<?php echo base_url('assets2/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets2/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="<?php echo base_url('assets2/js/jquery.min.js') ?>"></script>
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <!-- header-section-starts -->
    <div class="full">
            <div class="menu">
                <ul>
                    <?php echo generate_sidemenu_view();?>;
                </ul>
            </div>
        <div class="main">
            <div class="top-header">
                <div class="logo">
                    <p>Karam Production</p>
                </div>
                <div class="text-right">
                    <?php if($this->session->userdata('logined')) {
                        ?>
                    <a class="b-home" href="<?php echo site_url('Login/Logout')?>"><?php echo $this->session->userdata('Username_Customer'); ?></a>
                    <?php } else { ?>
                    <a class="b-home" href="<?php echo site_url('Login')?>">Login</a>
                    <?php }  ?>
                </div>
                <div class="clearfix"></div>
            </div>
        