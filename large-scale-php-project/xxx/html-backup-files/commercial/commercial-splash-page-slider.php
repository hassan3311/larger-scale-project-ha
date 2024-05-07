<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body class="splash-page splash-page-image">
    <div class="banner-inner">

        <div class="nav-area header-type-1 transparent-header">

            <!-- desktop nav -->
            <header class="header-nav hidden-sm hidden-xs">
                <div class="container-fluid">
                    <div class="header-inner table-block">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-nav text-left">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- mobile nav -->
            <?php include ('inc/header/header-mobile.php'); ?>

        </div><!-- nav-area header-type-1 transparent-header -->
        
        <div class="splash-slider">
            <div class="splash-slider-item" style="background-image: url(img/image-1440x960.png);"></div>
            <div class="splash-slider-item" style="background-image: url(img/image-1440x960.png);"></div>
            <div class="splash-slider-item" style="background-image: url(img/image-1440x960.png);"></div>
        </div><!-- background-slider -->

        <div class="banner-caption">

            <h1 class="banner-title">Book and Experience Unique Places</h1>
            <p class="banner-subtitle">WordPress Theme For Rentals</p>

            <?php include ('inc/search/commercial-search-for-banners.php'); ?>

        </div><!-- banner-caption -->

        <?php include 'inc/dashboard/dashboard-footer.php';?>
        
        <?php include 'inc/modal-window-login.php';?>
        <?php include 'inc/modal-window-register.php';?>
        <?php include 'inc/modal-window-forgot-password.php';?>
        <?php include ('inc/search/commercial-overlay-mobile-search.php'); ?>
        <?php include ('inc/search/commercial-overlay-advanced-mobile-search.php'); ?>
    </div><!-- banner-inner -->
    
    <?php include 'inc/scripts.php';?>
</body>



<?php //include ('inc/search/main-search.php'); ?>