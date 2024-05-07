<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>

    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 3 boxed</h1>

    <div class="nav-area header-type-3">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container-fluid">
                    <div class="header-inner clearfix">
                        <div class="header-comp-left">
                            <?php include ('inc/header/social.php'); ?>
                        </div>
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right text-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container-fluid">
                    <div class="header-inner clearfix">
                        <div class="header-comp-nav text-center">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div>

    
    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 3 boxed logged in</h1>

    <div class="nav-area header-type-3">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container-fluid">
                    <div class="header-inner clearfix">
                        <div class="header-comp-left">
                            <?php include ('inc/header/social.php'); ?>
                        </div>
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right text-right">
                            <?php include ('inc/header/account.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container-fluid">
                    <div class="header-inner clearfix">
                        <div class="header-comp-nav text-center">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
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