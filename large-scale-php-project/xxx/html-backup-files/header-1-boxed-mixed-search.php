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

        <!-- mixed search -->
        <div class="mixed-search-panel mixed-search-nav">

            <div class="container">
                <ul class="nav nav-pills">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Type</a>
                        <ul class="dropdown-menu">    
                            <li>
                                <a href="#nightly-search-panel" role="tab" data-toggle="tab">Nightly</a>
                            </li>
                            <li>
                                <a href="#hourly-search-panel" role="tab" data-toggle="tab">Hourly</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane in active" id="nightly-search-panel">
                        <?php include ('inc/search/main-search.php'); ?>
                    </div>
                    <div class="tab-pane" id="hourly-search-panel">
                        <?php include ('inc/search/main-hourly-search.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('inc/footer.php'); ?>
    <?php include ('inc/scripts.php'); ?>
</body>
</html>
