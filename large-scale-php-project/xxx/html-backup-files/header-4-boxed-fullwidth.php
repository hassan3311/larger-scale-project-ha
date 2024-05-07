<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body class="side-nav-active">

    <div class="nav-area header-type-4">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container-fluid">
                <div class="header-inner table-block">
                    <div class="header-comp-navicon">
                        <span class="side-nav-trigger">
                            <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div>
    <?php include ('inc/header/side-nav.php'); ?>

    
    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 4 boxed legged in user</h1>


    <div class="nav-area header-type-4">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container-fluid">
                <div class="header-inner table-block">
                    <div class="header-comp-navicon">
                        <span class="side-nav-trigger">
                            <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include ('inc/header/account.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div>

    
    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 4 boxed with social</h1>

    <div class="nav-area header-type-4">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container-fluid">
                <div class="header-inner table-block">
                    <div class="header-comp-navicon">
                        <span class="side-nav-trigger">
                            <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include ('inc/header/social.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div>
        

    
    
    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <?php include ('inc/footer.php'); ?>
    <?php include ('inc/scripts.php'); ?>
</body>
</html>