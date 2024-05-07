<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body style="background-color: #fff;">
    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div><!-- header-comp-logo -->
                    <div class="header-comp-nav text-left">
                        <?php include ('inc/header/main-nav.php'); ?>
                    </div><!-- header-comp-nav -->
                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div><!-- header-comp-right -->
                </div><!-- header-inner -->
            </div><!-- container -->
        </header><!-- header-nav hidden-sm hidden-xs -->
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div><!-- .nav-area -->

    <section class="detail-property-page-header-area detail-property-page-header-area-v6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php include ('inc/experience-detail-page/title-section.php'); ?>
                    <?php include ('inc/property-detail-page/top-gallery-grid-section.php'); ?>
                </div>
            </div>
        </div>
    </section><!-- header-area -->

    <section class="main-content-area detail-property-page detail-property-page-v6 block-section-no-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="content-area">
                        <?php include ('inc/experience-detail-page/about-section-v5.php'); ?>                        
                        <?php include ('inc/experience-detail-page/gallery-section.php'); ?>
                        <?php include ('inc/experience-detail-page/host-description-section.php'); ?>
                        <?php include ('inc/experience-detail-page/providing-section.php'); ?>
                        <?php include ('inc/experience-detail-page/map-section.php'); ?>
                        <?php include ('inc/experience-detail-page/what-nearby-section.php'); ?>
                        <?php include ('inc/experience-detail-page/video-section.php'); ?>
                        <?php include ('inc/experience-detail-page/rules-section.php'); ?>
                        <?php include ('inc/experience-detail-page/availability-section.php'); ?>
                        <?php include ('inc/experience-detail-page/host-section.php'); ?>
                        <?php include ('inc/experience-detail-page/reviews-section.php'); ?>
                        <?php include ('inc/experience-detail-page/similar-listing-section.php'); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <?php include('inc/booking/sidebar-booking-experience-module.php'); ?>
                </div>
            </div>
        </div>
    </section><!-- main-content-area -->
    <?php include('inc/booking/overlay-booking-module.php'); ?>
    <?php include ('inc/footer.php'); ?>
    <?php include ('inc/scripts.php'); ?>
</body>
</html>