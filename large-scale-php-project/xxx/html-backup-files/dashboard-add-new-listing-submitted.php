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
            <h1>Review your listing</h1>
        </div>
        <!-- .dashboard-page-title -->
        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>
        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Congratulations. Your listing has been submiited for approval.
                                </div>
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Complete your listing</h2>
                                        </div>
                                        <!-- block-left -->
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <h3>Update calendar</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula eget turpis laoreet pulvinar.</p>
                                                <p><a class="btn btn-slim btn-primary" href="dashboard-edit-listing.php">Update calendar</a></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <h3>Setup Custom Prices</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula eget turpis laoreet pulvinar.</p>
                                                <p><a class="btn btn-slim btn-primary" href="dashboard-upgrade-to-featured.php">Setup Custom Prices</a></p>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <h3>Upgrade to featured</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula eget turpis laoreet pulvinar.</p>
                                                <p><a class="btn btn-slim btn-primary" href="dashboard-upgrade-to-featured.php">Upgrade to featured</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- block-body -->
                                </div>
                                <!-- block -->
                            </div>
                            <!-- .dashboard-area -->
                        </div>
                        <!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div>
                <!-- .container-fluid -->
            </div>
            <!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-sidebar-add-new-item.php';?>
            </aside>
            <!-- .dashboard-sidebar -->
        </div>
        <!-- .user-dashboard-right -->
    </section>
    <!-- #body-area -->
    <?php include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>
</body>
</html>