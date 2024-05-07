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
                            <?php include ('inc/header/account-user.php'); ?>
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

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Verify your email address to activate your account.
                                </div>

                                <div class="block">
                                    <div class="user-host-title">
                                        <div class="block-head text-center">
                                            <h2 class="title">Welcome back, Mike!</h2>
                                        </div>
                                    </div>
                                </div><!-- .block -->

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">My Reservations</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="#" class="block-link pull-right">View All <i cclass="homey-icon homey-icon-navigation-right-circle-1-interface-essential" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="table-block dashboard-reservation-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>ID</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Address</th>
                                                    <th>Starts</th>
                                                    <th>Ends</th>
                                                    <th>Subtotal</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include 'inc/dashboard/commercial-dashboard-reservation-user.php';?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Incoming Messages</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="#" class="block-link pull-right">View All <i cclass="homey-icon homey-icon-navigation-right-circle-1-interface-essential" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="table-block dashboard-message-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>From</th>
                                                    <th>Date</th>
                                                    <th>Message</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include 'inc/dashboard/dashboard-message-unread-block.php';?>
                                                <?php include 'inc/dashboard/dashboard-message-read-block.php';?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .block -->

                                
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