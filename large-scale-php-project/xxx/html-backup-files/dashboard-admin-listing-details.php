<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php';?>
</head>
<body>

    <div class="header-dashboard">
        <div class="nav-area header-type-1">
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
                            <?php include ('inc/header/account-host.php'); ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- mobile header -->
            <?php include ('inc/header/header-mobile-full-width.php'); ?>
        </div>   
    </div>    
    <section id="body-area">

        <div class="dashboard-page-title">
            <h1>Dashboard</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area admin-dashboard-area">
                                <?php // include ('inc/property-detail-page/host-section.php'); ?>
                                <?php include ('inc/property-detail-page/title-section.php'); ?>
                                <?php include ('inc/property-detail-page/about-section.php'); ?>
                                <?php include ('inc/property-detail-page/details-section.php'); ?>
                                <?php include ('inc/property-detail-page/gallery-section.php'); ?>
                                <?php include ('inc/property-detail-page/prices-section.php'); ?>
                                <?php include ('inc/property-detail-page/custom-prices-section.php'); ?>
                                <?php include ('inc/property-detail-page/accomodation-section.php'); ?>
                                <?php include ('inc/property-detail-page/features-section.php'); ?>
                                <?php include ('inc/property-detail-page/map-section.php'); ?>
                                <?php include ('inc/property-detail-page/what-nearby-section.php'); ?>
                                <?php include ('inc/property-detail-page/video-section.php'); ?>
                                <?php include ('inc/property-detail-page/rules-section.php'); ?>
                                <?php include ('inc/property-detail-page/availability-section.php'); ?>
                                
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->  

            <aside class="dashboard-sidebar admin-dashboard-sidebar">
                 <?php include 'inc/dashboard/dashboard-admin-listing-widget.php';?>
            </aside><!-- .dashboard-sidebar -->  

        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>