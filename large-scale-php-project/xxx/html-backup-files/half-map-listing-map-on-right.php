<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
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
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile-full-width.php'); ?>
        <!-- tablet search -->
    </div>

    <section class="half-map-wrap map-on-right clearfix">
        
        <div class="half-map-right-wrap">
            <?php include ('inc/google-maps.php'); ?>
        </div><!-- .half-map-right-wrap -->

        <div class="half-map-left-wrap">
            <div class="half-map-left-inner-wrap">
                <?php include ('inc/search/search-half-map.php'); ?>
                <?php include ('inc/sort-tool.php'); ?>

                <div class="listing-wrap item-grid-view">
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/item-grid.php'); ?>
                    <?php include ('inc/listing/autoload.php'); ?>
                </div><!-- grid-listing-page -->
            </div>
        </div><!-- .half-map-left-wrap -->
        
    </section><!-- .half-map-wrap -->
    <?php include ('inc/footer-half-map.php'); ?>
    <?php include ('inc/scripts.php'); ?>
</body>
</html>