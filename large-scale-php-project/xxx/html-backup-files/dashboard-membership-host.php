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
            <h1>Membership</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="wallet-box-wrap">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="block table-block dashboard-withdraw-table dashboard-table">
                                                <div class="block-title">
                                                    <div class="block-left">
                                                        <h2 class="title">Package name</h2>
                                                    </div>
                                                    <div class="block-right">
                                                        <a class="btn btn-primary btn-slim" href="dashboard-wallet-earnings.php">Upgrade Membership</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wallet-box-wrap">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">10</div>
                                                <h3>Total Listings</h3>
                                                <div class="wallet-box-info mb-0">Your memebrship will expire on Nov. 12, 2022</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">7</div>
                                                <h3>Published Listings</h3>
                                                <div class="wallet-box-info mb-0">Remaining listings: <strong>3</strong> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">5</div>
                                                <h3>Featured Listings</h3>
                                                <div class="wallet-box-info mb-0">Remaining featured listings: <strong>3</strong> </div>
                                            </div>
                                        </div>
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