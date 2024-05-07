<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container">
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
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>

        <!-- desktop and tablet search -->
        <?php //include ('inc/header-1-search.php'); ?>
        <?php //include ('inc/header-1-search-mobile.php'); ?>
    </div>
    
    <section class="top-banner-wrap" style="height: 600px;"><!-- remove this inline css from WP -->   

        <div class="banner-inner parallax" data-parallax-bg-image="img/image-1440x960.png"></div><!-- banner-inner parallax -->
        
        <div class="banner-caption">

            <h1 class="banner-title">Love The Place You Work</h1>
            <p class="banner-subtitle">WordPress Theme For Rentals</p>

            <?php include ('inc/search/commercial-search-for-banners.php'); ?>

        </div><!-- banner-caption -->

    </section><!-- header-parallax -->

    <section class="main-content-area" style="height: 1000px;">
        <!-- Page content goes here  -->
    </section><!-- main-content-area -->

    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/commercial-footer.php'); ?>
</body>
</html>