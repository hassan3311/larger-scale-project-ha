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
            <h1>Host Profile</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Information</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="#"><strong>View Profile</strong></a>
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
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Name</strong> John Doe</li>
                                                    <li><strong>Email</strong> <a href="mailto:john.doe@email.com">john.doe@email.com</a> <span class="text-success"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span></li>
                                                    <li><strong>ID</strong> <a href="#">View Picture</a> <span class="text-success"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span></li>
                                                    <li><strong>Role</strong> Guest</li>
                                                </ul>
                                                <!-- <ul class="list-unstyled list-lined">
                                                    <li><strong>Address</strong> 7898 Michigan Avenue, Miami Beach, FL 33139</li>
                                                </ul>

                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Native Language</strong> English</li>
                                                    <li><strong>Other Language</strong> Spanish, Italian</li>
                                                </ul>
                                                <ul class="list-unstyled mb-0">
                                                    <li><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat vel quasi reiciendis quo tempora, quibusdam cum adipisci, officia, autem voluptas non molestiae sequi enim ipsam cumque iste. Molestias, inventore, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat vel quasi reiciendis quo tempora, quibusdam cum adipisci, officia, autem voluptas non molestiae sequi enim ipsam cumque iste. Molestias, inventore, mollitia.</li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar admin-dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-admin-guest-user-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>