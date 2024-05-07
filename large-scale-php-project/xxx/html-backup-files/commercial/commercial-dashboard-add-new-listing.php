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
            <h1>Add New Listing <i class="homey-icon homey-icon-arrow-right-1"></i> Step 1 of 5</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Alert content here
                                </div>

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Alert content here
                                </div>

                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Alert content here
                                </div>

                                <form method="post" id="add-property-form">
                                    
                                    <?php include 'inc/add-new-listing/commercial-dashboard-add-new-listing-step-1.php';?>
                                    <?php include 'inc/add-new-listing/commercial-dashboard-add-new-listing-step-2.php';?>
                                    <?php include 'inc/add-new-listing/commercial-dashboard-add-new-listing-step-3.php';?>
                                    <?php // include 'inc/add-new-listing/dashboard-add-new-listing-step-4.php';?>
                                    <?php include 'inc/add-new-listing/commercial-dashboard-add-new-listing-step-5.php';?>

                                    <div class="steps-nav">
                                        <button type="button" class="btn btn-grey-outlined btn-step-back btn-xs-full-width action">Back</button>
                                        <button type="button" class="btn btn-grey-outlined btn-xs-full-width">Save as Draft</button>
                                        <button type="button" class="btn btn-success btn-step-next btn-xs-full-width action">Continue</button>
                                        <button type="submit" class="btn btn-success btn-step-submit btn-xs-full-width action">Submit</button>
                                    </div><!-- steps-nav -->

                                </form><!-- #add-property-form -->
                                
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            
            <aside class="dashboard-sidebar">
                <div class="item-grid-view">
                    <?php include 'inc/dashboard/dashboard-sidebar-add-new-item.php';?>
                </div>
            </aside><!-- .dashboard-sidebar -->
            
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>