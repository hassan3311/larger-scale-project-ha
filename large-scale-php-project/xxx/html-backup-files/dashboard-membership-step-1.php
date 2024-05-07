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
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Select Package</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <p>You don't have any package. You need to buy a memebrship package in order to preceed.</p>
                                        <a href="dashboard-membership-step-2.php" class="btn btn-primary">Select Package</a>
                                    </div>
                                </div>
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