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
    
    <section class="top-banner-wrap half-search">    

        <div class="container">
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="banner-caption-side-search">
                        <div class="half-search-wrap">

                            <h1 class="banner-title">Find The Next Place To Work</h1>
                            <p class="banner-subtitle">Homey enable you to list office spaces and commercial properties.</p>

                            <?php include ('inc/search/side-search-for-banners.php'); ?>
                        </div>
                    </div><!-- banner-caption -->
                </div>
                
                <div class="col-sm-6">
                    <div class="half-header-image" style="background-image: url(https://via.placeholder.com/554x554);">

                    </div><!-- half-header-image -->
                </div>
            </div>    
        </div>
        

        

    </section><!-- header-parallax -->

    <section class="main-content-area" style="height: 1000px;">
        <!-- Page content goes here  -->
    </section><!-- main-content-area -->

    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>