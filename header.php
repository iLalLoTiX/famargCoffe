<!DOCTYPE html>
<html lang="en">

<head>
    <title>Famarg Comercializadora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <div class="awe-page-loading">
            <div class="awe-loading-wrapper">
                <div class="awe-loading-icon">
                <img src="<?php echo bloginfo('template_url');?>/images/logo_1.png" alt="images">
                </div>
                <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>  
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand">
                <img width="25%" src="<?php echo bloginfo('template_url');?>/images/logo_1.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="oi oi-menu"></span> Menu
	        </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'ftco-nav',
                'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
            ));
            ?>
        </div>
    </nav>
    <!-- END nav -->