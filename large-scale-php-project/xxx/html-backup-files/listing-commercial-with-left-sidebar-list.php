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

        <?php include ('inc/search/commercial-main-search.php'); ?>
    </div>

    <section class="main-content-area listing-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <div class="page-title">
                        <div class="block-top-title">
                            <?php include ('inc/breadcrumb.php'); ?>
                            <h1 class="listing-title">Listing with Left Sidebar</h1>
                        </div><!-- block-top-title -->
                    </div><!-- page-title -->
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hidden-xs">
                    <?php include ('inc/listing/layout-tool.php'); ?>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4">

                    <?php include ('inc/sort-tool.php'); ?>
                    
                    <div class="listing-wrap item-list-view">
                        <div class="row">
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                            <?php include ('inc/listing/item-list-commercial.php'); ?>
                        </div>
                        <?php include ('inc/listing/pagination.php'); ?>
                    </div><!-- grid-listing-page -->

                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8">
                    <div class="sidebar">
                        <?php include ('inc/widgets/widget-advanced-search.php'); ?>
                    </div>
                </div>
            </div><!-- .row -->
        </div>   <!-- .container -->
        
        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/commercial-footer.php'); ?>
</body>
</html>