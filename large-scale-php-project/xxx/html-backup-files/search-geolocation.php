<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>

    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div>
                    <div class="header-comp-nav text-left">
                        <?php include ('inc/header/main-nav.php'); ?>
                    </div>
                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>

        <!-- desktop and tablet search -->
        <?php include ('inc/search/main-search-geolocation.php'); ?>
    </div>

    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <?php include ('inc/footer.php'); ?>
    <?php include ('inc/scripts.php'); ?>
</body>
</html>