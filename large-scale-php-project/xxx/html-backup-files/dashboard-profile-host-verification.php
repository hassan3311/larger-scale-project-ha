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
            <h1>Profile</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <?php include 'inc/dashboard/dashboard-profile-progress-block.php';?>

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Verify Your Email </h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-9 col-xs-12">
                                                <label for="email">Email Address</label>
                                                <div class="form-group">
                                                    <input class="form-control" id="email" placeholder="your@email.com" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="verified">
                                                    <span class="btn btn-full-width" href="#"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Upload your ID</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="profile-image">
                                                    <img src="img/100x100.png" width="100" height="100" alt="profile image">
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <p class="profile-image-note"><strong>Choose an image from your computer</strong><br>
                                                Upload your ID, Passport or Driver License</p>
                                                <button type="button" class="btn btn-primary btn-xs-full-width">Browse</button>
                                                <button type="button" class="btn btn-grey-outlined btn-xs-full-width">Delete</button>    
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="verified">
                                                    <span class="btn btn-full-width" href="#"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span>
                                                </div>
                                                <button class="btn btn-primary btn-full-width" href="#">Verify Your ID</button>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label for="country2">Country Code</label>
                                                    <input class="form-control" id="phone-number"  placeholder="Enter country code number ie +01">
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label for="phone-code">Phone number</label>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <input class="form-control" id="phone-number"  placeholder="Enter the phone number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="not-verified">
                                                    <a class="btn btn-secondary btn-full-width" href="#">Add Number</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div><!-- block -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-host-profile-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
            
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>