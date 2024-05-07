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

        <?php include ('inc/search/main-search.php'); ?>
    </div>

    <section class="main-content-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-title">
                        <div class="block-top-title">
                            <?php include ('inc/breadcrumb.php'); ?>
                            <h1 class="listing-title">Blog</h1>
                        </div><!-- block-top-title -->
                    </div><!-- page-title -->
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    
                    <div class="blog-wrap">
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/blog/post.php'); ?>
                        <?php include ('inc/listing/pagination.php'); ?>
                    </div><!-- grid-listing-page -->

                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="sidebar">
                        <?php include ('inc/widgets/widget-search.php'); ?>
                        <?php include ('inc/widgets/widget-properties.php'); ?>
                        <?php include ('inc/widgets/widget-properties-card.php'); ?>
                        <?php include ('inc/widgets/widget-properties-slider.php'); ?>
                        <?php include ('inc/widgets/widget-login-register.php'); ?>
                        <?php include ('inc/widgets/widget-reviews.php'); ?>
                        <?php include ('inc/widgets/widget-comments.php'); ?>
                        <?php include ('inc/widgets/widget-taxonomies-card.php'); ?>
                        <?php include ('inc/widgets/widget-latest-posts.php'); ?>
                        <?php include ('inc/widgets/widget-newsletter.php'); ?>
                        <?php include ('inc/widgets/widget-image-banner.php'); ?>
                        <?php include ('inc/widgets/widget-taxonomies.php'); ?>
                        <?php include ('inc/widgets/widget-archives.php'); ?>
                        <?php include ('inc/widgets/widget-pages.php'); ?>
                        <?php include ('inc/widgets/widget-meta.php'); ?>
                        <?php include ('inc/widgets/widget-twitter.php'); ?>
                        <?php include ('inc/widgets/widget-instagram.php'); ?>
                    </div>
                </div>
            </div><!-- .row -->
        </div>   <!-- .container -->
        
        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>