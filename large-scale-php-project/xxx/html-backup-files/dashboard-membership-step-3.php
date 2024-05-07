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
    <section id="body-area" class="with-dashaboard-snake-nav">

        <div class="dashboard-page-title">
            <h1>Add New Property</h1>
        </div><!-- .dashboard-page-title -->

        <div class="dashaboard-snake-nav-wrap">
            <ul class="dashaboard-snake-nav list-inline clearfix">
                <li class="step-block text-center active">Select Package</li>
                <li class="step-block text-center">Payment</li>
                <li class="step-block text-center">Create Listing</li>
                <li class="step-block text-center">Done</li>
            </ul>
        </div>

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="d-flex">
                                    <div class="order-2">
                                        <?php include 'inc/dashboard/membership-complete-order-table.php';?>
                                    </div><!-- order-2 -->
                                    <div class="order-1 flex-grow-1">
                                        <div class="dashboard-content-inner-wrap">
                                            <div class="dashboard-content-block-wrap">
                                                <div class="dashboard-content-block">
                                                    <?php include 'inc/dashboard/dashboard-select-payment.php';?>
                                                    <button type="button" class="btn btn-success btn-full-width mt-4 mb-4" onclick="window.location.href='dashboard-agent-add-new-property-payment-completed.php'">Complete Membership</button>
                                                    <div class="text-center">By clicking "Complete Membership" you agree to our <a href="#">Terms & Conditions</a></div>
                                                </div><!-- dashboard-content-block -->
                                            </div><!-- dashboard-content-block-wrap -->
                                        </div><!-- dashboard-content-inner-wrap -->
                                    </div><!-- order-1 -->
                                </div><!-- d-flex -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area --> 
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>