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
        <?php //include ('inc/header-1-search.php'); ?>
        <?php //include ('inc/header-1-search-mobile.php'); ?>
    </div>

    <section class="main-content-area listing-page listing-page-full-width">
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <h1 style="text-align: center; margin: 30px 0 50px;">Property List Module</h1>
                    <?php include ('inc/modules/property-module-list.php'); ?>
                    
                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Grid Module</h1>
                    <?php include ('inc/modules/property-module-grid.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Card Module</h1>
                    <?php include ('inc/modules/property-module-card.php'); ?>
                    
                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Grid Slider Module -  3Cols</h1>
                    <?php include ('inc/modules/property-module-grid-slider-3cols.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Grid Slider Module -  4Cols</h1>
                    <?php include ('inc/modules/property-module-grid-slider-4cols.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Card Slider Module -  3Cols</h1>
                    <?php include ('inc/modules/property-module-card-slider-3cols.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Card Slider Module -  4Cols</h1>
                    <?php include ('inc/modules/property-module-card-slider-4cols.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Property Module by ID</h1>
                    <?php include ('inc/modules/property-module-by-id.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Taxonomy Grids</h1>
                    <?php include ('inc/modules/taxonomy-grids-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Taxonomy Grids v2</h1>
                    <?php include ('inc/modules/taxonomy-grids-module-v2.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Testimonials</h1>
                    <?php include ('inc/modules/testimonials-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Testimonials - Slider</h1>
                    <?php include ('inc/modules/testimonials-module-slider.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Partners</h1>
                    <?php include ('inc/modules/partners-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Text With Icons</h1>
                    <?php include ('inc/modules/text-with-icons-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Blog Module</h1>
                    <?php include ('inc/modules/blog-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Blog Module Slider</h1>
                    <?php include ('inc/modules/blog-module-slider.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Promo Box Module</h1>
                    <?php include ('inc/modules/promo-box-module.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Experiences Grid Module</h1>
                    <?php include ('inc/modules/experiences-module-grid.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Experiences Grid Slider Module -  3Cols</h1>
                    <?php include ('inc/modules/experiences-module-grid-slider-3cols.php'); ?>

                    <h1 style="text-align: center; margin: 30px 0 50px;">Experiences Grid Slider Module -  4Cols</h1>
                    <?php include ('inc/modules/experiences-module-grid-slider-4cols.php'); ?>

                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
            </div><!-- .row -->
        </div>   <!-- .container -->
        
        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>