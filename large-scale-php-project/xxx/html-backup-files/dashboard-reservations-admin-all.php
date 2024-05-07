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
            <h1>Reservations</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Manage</h2>
                                        <div class="mt-10">
                                            <a class="btn btn-primary btn-slim" href="#">New (30)</a>
                                            <a class="btn btn-primary btn-slim" href="#">Available (5)</a>
                                            <a class="btn btn-primary btn-slim" href="#">Booked (25)</a>
                                            <a class="btn btn-primary btn-slim" href="#">Declined (25)</a>
                                            <a class="btn btn-primary btn-slim" href="#">Cancelled (25)</a>
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
                                                    <th>Check-in</th>
                                                    <th>Check-out</th>
                                                    <th>Guests</th>
                                                    <th>Pets</th>
                                                    <th>Subtotal</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include 'inc/dashboard/dashboard-reservation-admin-all-new.php';?>
                                                <?php include 'inc/dashboard/dashboard-reservation-admin-all-booked.php';?>
                                                <?php include 'inc/dashboard/dashboard-reservation-admin-all-pending.php';?>
                                                <?php include 'inc/dashboard/dashboard-reservation-admin-all-declined.php';?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .block -->    
                                <?php include 'inc/listing/pagination.php';?>
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