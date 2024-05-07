<header class="header-nav header-mobile hidden-md hidden-lg">
    <div class="header-mobile-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    <button type="button" class="btn btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav" aria-expanded="false" aria-controls="navbar">
                        <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                    </button><!-- btn-mobile-nav -->
                </div>
                <div class="col-xs-6">
                    <div class="mobile-logo text-center">
                        <?php include ('inc/header/logo.php'); ?>
                    </div><!-- mobile-logo -->
                </div>
                <div class="col-xs-3">
                    <div class="user-menu text-right">
                        <button type="button" class="btn btn-mobile-nav" data-toggle="collapse" data-target="#user-nav" aria-expanded="false" aria-controls="navbar">
                            <i class="homey-icon homey-icon-single-neutral-circle" aria-hidden="true"></i>
                        </button>
                    </div><!-- user-menu -->
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header-mobile-wrap -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="mobile-nav-wrap">
                <?php include ('inc/header/mobile-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->    
        </div>        
    </div><!-- container -->
    <div class="container-fluid">
        <div class="row">
            <div class="user-nav-wrap">
                <?php include ('inc/header/mobile-user-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->
        </div>
    </div><!-- container -->
</header><!-- header-nav header-mobile hidden-md hidden-lg -->