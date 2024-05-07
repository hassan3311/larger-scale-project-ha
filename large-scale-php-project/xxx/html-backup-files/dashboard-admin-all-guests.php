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
            <h1>Guests</h1>
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
                                        <div class="block-left">
                                            <h2 class="title">Manage</h2>
                                            <div class="mt-10">
                                                <a class="btn btn-primary btn-slim" href="dashboard-admin-users.php">All (30)</a>
                                                <a class="btn btn-primary btn-slim" href="dashboard-admin-all-guests.php">Hosts (5)</a>
                                                <a class="btn btn-primary btn-slim" href="dashboard-admin-all-hosts.php">Guests (25)</a>
                                            </div>
                                        </div>
                                        <div class="block-right">
                                            <div class="dashboard-form-inline">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-search-icon"><i class="homey-icon homey-icon-search-1" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-block dashboard-listing-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Avatar</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Email Verification</th>
                                                    <th>ID Verification</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include 'inc/dashboard/dashboard-admin-guest-user.php';?>
                                                <?php include 'inc/dashboard/dashboard-admin-guest-user.php';?>
                                                <?php include 'inc/dashboard/dashboard-admin-guest-user.php';?>
                                                <?php include 'inc/dashboard/dashboard-admin-guest-user.php';?>
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