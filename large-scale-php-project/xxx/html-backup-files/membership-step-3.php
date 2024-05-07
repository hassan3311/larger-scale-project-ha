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

        <?php //include ('inc/search/main-search.php'); ?>
    </div>

    <section class="main-content-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-title">
                        <div class="block-top-title text-center">
                            <?php include ('inc/breadcrumb.php'); ?>
                            <h1>Payment completed</h1>
                        </div><!-- block-top-title -->
                    </div><!-- page-title -->
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                    <div class="membership-package-wrap">
                        <div class="block">
                            <div class="block-title">
                                <div class="block-left">
                                    <h2 class="title">Thank you for your payment!</h2>    
                                </div><!-- block-left -->
                            </div>
                            <div class="block-body">
                                The order <strong>#283746</strong> has been completed (Payment method: PayPal) and a confirmation email has been sent to <strong>email@address.com</strong>
                            </div><!-- block-body -->
                        </div><!-- block -->
                        <div class="block">
                            <div class="block-title">
                                <div class="block-left">
                                    <h2 class="title">Order Summary</h2>    
                                </div><!-- block-left -->
                            </div>
                            <div class="block-body">
                                <ul class="list-unstyled mebership-list-info">
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Package <strong>Premium</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Price <strong>$39.00</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Time Period <strong>3 Months</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Number of Listings <strong>20</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Number of Images  <strong>20</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Taxes <strong>10%</strong></li>
                                    <li class="total-price">Total Price <strong>$42.90</strong></li>
                                </ul>
                            </div><!-- block-body -->
                        </div><!-- block -->
                    </div><!-- membership-package-wrap -->
                    <div class="membership-nav-wrap">
                        <button class="btn btn-primary btn-block" onclick="window.location.href='#'">Create a Listing</button>  
                    </div>
                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
            </div><!-- .row -->
        </div>   <!-- .container -->        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>