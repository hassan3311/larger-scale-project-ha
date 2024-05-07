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
                            <?php include ('inc/header/login-register-v1.php'); ?>
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
            <div class="steps-header-inner">
                <div class="dashboard-page-title-left">
                    <ol class="breadcrumb steps-breadcrumb">
                        <li>Listings</li>
                        <li><strong>Edit</strong> Office For Rent </li>
                    </ol>
                </div>
            </div>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="block">
                                    <div class="block-head table-block">
                                        <div class="block-left">
                                            <h2 class="title">Office For Rent</h2>
                                            <address class="title-address"><i class="homey-icon homey-icon-style-two-pin-marker v-middle"></i> 9701 W Broadview Dr, Bay Harbor Islands, FL 31175</address>
                                        </div>
                                        <div class="block-right">
                                            <a class="btn btn-secondary btn-slim upgrade-button" href="#">Upgrade to featured</a>
                                        </div>
                                    </div>
                                    <div class="listing-submit-wrap">
                                        <a href="#" class="btn btn-dark-grey btn-preview-listing">Preview</a>
                                        <button class="btn btn-dark-grey btn-save-listing">Update</button>
                                    </div>
                                </div>
                                <div class="homy-taber-module">
                                    <ul class="taber-nav taber-nav-fixed" role="tablist">
                                        <li role="presentation" >
                                            <a href="#description-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Info</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#features-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Features</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#location-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Location</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#bedrooms-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Services</a>
                                        </li>
                                        <li role="presentation" class="active">
                                            <a href="#calendar-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">calendar</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#media-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Media</a>
                                        </li>
                                        <!-- <li role="presentation">
                                            <a href="#meals-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab"><i class="homey-icon homey-icon-restaurant-eating-set" aria-hidden="true"></i> <span>Meals</span></a>
                                        </li> -->
                                        <li role="presentation" >
                                            <a href="#pricing-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Pricing</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#rules-tab" aria-controls="calendar-tab" role="tab" data-toggle="tab">Terms</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block">

                                    <div class="tab-content">
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-information-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-features-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-location-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-services-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-calendar-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-media-tab.php';?>
                                        <?php // include 'inc/dashboard/dashboard-listing-edit-meals-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-pricing-tab.php';?>
                                        <?php include 'inc/dashboard/commercial-dashboard-listing-edit-terms-and-rules-tab.php';?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .dashboard-area -->
                    </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                </div>
            </div><!-- .container-fluid -->
        </div><!-- .dashboard-content-area -->    

        <aside class="dashboard-sidebar">
            <div class="item-grid-view">

                <?php include 'inc/listing/item-grid-commercial.php';?>

            </div>
        </aside><!-- .dashboard-sidebar -->

    </div><!-- .user-dashboard-right -->

</section><!-- #body-area -->

<?php // include 'inc/dashboard/dashboard-footer.php';?>
<?php include 'inc/scripts.php';?>


</body>
</html>