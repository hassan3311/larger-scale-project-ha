<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
    <div class="nav-area header-type-1 transparent-header">
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
    </div>
    
    <section class="top-banner-wrap top-banner-wrap-fullscreen">    

        <div class="header-slider">

            <div class="header-slider-item" style="background-image: url(img/image-1920x600.jpg);">
                <?php include ('inc/header-slider-item.php'); ?>
            </div>
            
            <div class="header-slider-item" style="background-image: url(img/image-1920x600.jpg);">
                <?php include ('inc/header-slider-item.php'); ?>
            </div>

            <div class="header-slider-item" style="background-image: url(img/image-1920x600.jpg);">
                <?php include ('inc/header-slider-item.php'); ?>
            </div>

        </div><!-- top-gallery-section -->

    </section><!-- header-parallax -->

    <section class="main-content-area" style="height: 1000px;">
        <!-- Page content goes here  -->
    </section><!-- main-content-area -->

    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>