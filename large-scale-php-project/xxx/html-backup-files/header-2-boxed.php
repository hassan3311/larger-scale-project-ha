<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>

    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed left align</h1>

    <div class="nav-area header-type-2">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-nav text-left">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>

        <!-- desktop and tablet search -->
        <?php include ('inc/search/main-search.php'); ?>
    </div>

    
    <hr style="margin-top: 200px; margin-bottom: 0; border: none;">
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed center align</h1>

    <div class="nav-area header-type-2">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
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
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed  with social</h1>


    <div class="nav-area header-type-2">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/social.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
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
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed logged in</h1>

    <div class="nav-area header-type-2">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/account.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
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
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed with top bar currency switcher, language switcher and socials</h1>

    <div class="nav-area header-type-2">
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="crncy-lang-block">
                            <li class="currency-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="crn-dropdown">USD <i class="homey-icon homey-icon-arrow-down-1"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="crn-dropdown">
                                    <li>USD</li>
                                    <li>EU</li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="crncy-lang-block">
                            <li class="language-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="lang-dropdown"><img src="img/lang-image.png" class="flag-img" alt="img"> <i class="homey-icon homey-icon-arrow-down-1"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="lang-dropdown">
                                    <li>English <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li>Spanish <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li>Italian <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <div class="social-icons">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
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
    <h1 style="background-color: #eee; margin: 0; padding: 20px; line-height: 16px; font-size: 16px;">Nav 2 boxed with top bar address, hours, phone and contacts</h1>

    <div class="nav-area header-type-2">
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <div class="social-icons">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                    <div class="top-bar-right">
                        <ul class="top-contact-address hidden-sm hidden-xs">
                            <li><a class="phone-number" href="tel:8008888686"><i class="homey-icon homey-icon-phone-circle"></i> Call us (800) 888 8686</a></li>
                            <li><a class="email-contact" href="#"><i class="homey-icon homey-icon-unread-emails"></i> Contact us</a></li>
                        </ul>
                        <ul class="top-contact-address top-contact-address-mobile hidden-md hidden-lg">
                            <li><a class="phone-number" href="tel:8008888686"><i class="homey-icon homey-icon-phone-circle"></i></a></li>
                            <li><a class="email-contact" href="#"><i class="homey-icon homey-icon-unread-emails"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="top-inner-header">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/login-register-v1.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-inner-header">
                <div class="container">
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