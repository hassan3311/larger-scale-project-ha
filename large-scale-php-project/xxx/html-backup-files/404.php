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
                    <div class="page-wrap">
                        <div class="article-main">
                            <article class="single-page-article text-center">
                                <div class="article-detail block-body">
                                    <h1>Oh oh! Page not found.</h1>
                                    <p>We're sorry, but the page you are looking for doesn't exist.<br>
                                    The link you clicked may be broken or the page may have been removed.</p>
                                    <p><a href="#">Back to the homepage</a></p>
                                </div>
                            </article>
                        </div>
                    </div><!-- grid-listing-page -->
                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
            </div><!-- .row -->
        </div>   <!-- .container -->
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>