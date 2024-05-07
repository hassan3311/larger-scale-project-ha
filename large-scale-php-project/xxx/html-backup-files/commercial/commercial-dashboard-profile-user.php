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

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

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
                                            <h2 class="title">Photo</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="profile-image">
                                                    <img class="img-circle" src="img/100x100.png" width="100" height="100" alt="profile image">
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <p class="profile-image-note"><strong>Choose an image from your computer</strong><br>
                                                Minimum size 100 x 100 px</p>
                                                <button type="button" class="btn btn-primary btn-xs-full-width">Browse</button>
                                                <button type="button" class="btn btn-grey-outlined btn-xs-full-width">Delete</button>    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Information</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="first-name">First name</label>
                                                    <input type="text" id="first-name" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last-name">Last Name</label>
                                                    <input type="text" id="last-name" class="form-control" placeholder="Enter last name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- block -->

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Change Password</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="new-password">New Password</label>
                                                        <input type="password" id="new-password" class="form-control" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="confirm-password">Confirm Password</label>
                                                        <input type="password" id="confirm-password" class="form-control" placeholder="Confirm new password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-right">
                                                    <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .block -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-user-profile-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
            
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>