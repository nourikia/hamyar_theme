<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- add automatic title tag    -->
    <?php wp_head(); ?>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo THEME_URI.'/assets/ico/apple-touch-icon-144-precomposed.png'; ?>">
    <link rel="shortcut icon" href="<?php echo THEME_URI.'/assets/ico/favicon.ico'; ?>">

    <!-- CSS Global -->
    <link href="<?php echo Class_Asset::plugins('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('bootstrap-select/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('fontawesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('prettyphoto/css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('owl-carousel2/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('owl-carousel2/assets/owl.theme.default.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::plugins('animate/animate.min.css'); ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo Class_Asset::css('theme.css'); ?>" rel="stylesheet">
    <link href="<?php echo Class_Asset::css('theme-pink.css'); ?>" rel="stylesheet" id="theme-config-link">

    <!-- Head Libs -->
    <script src="<?php echo Class_Asset::plugins('modernizr.custom.js'); ?>"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo Class_Asset::plugins('iesupport/html5shiv.js'); ?>"></script>
    <script src="<?php echo Class_Asset::plugins('iesupport/respond.min.js'); ?>"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->
<div class="wrapper">

    <!-- Popup: Shopping cart items -->
    <?php Class_View::render_view_by_include('partials/cart-popup') ?>
    <!-- /Popup: Shopping cart items -->