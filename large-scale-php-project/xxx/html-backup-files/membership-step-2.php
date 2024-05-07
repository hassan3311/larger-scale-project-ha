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
                        <div class="block-top-title">
                            <?php include ('inc/breadcrumb.php'); ?>
                            <h1>Payment</h1>
                        </div><!-- block-top-title -->
                    </div><!-- page-title -->
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="membership-package-order-detail">
                        <div class="block">
                            <div class="block-body">
                                <h3>Membership Package</h3>

                                <ul class="list-unstyled mebership-list-info">
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Package <strong>Premium</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Price <strong>$39.00</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Time Period <strong>3 Months</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Number of Listings <strong>20</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Number of Images  <strong>20</strong></li>
                                    <li><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Taxes <strong>10%</strong></li>
                                    <li class="total-price">Total Price <strong>$42.90</strong></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div><!-- membership-package-order-detail -->
                    <div class="text-center">
                        <a href="membership-step-1.php">Change Package</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="membership-package-wrap">
                        <div class="block">
                            <div class="block-title">
                                <div class="block-left">
                                    <h2 class="title">Account Information</h2>    
                                </div><!-- block-left -->
                                <div class="block-right">
                                    Already have an account? <a href="#">Log in</a>
                                </div><!-- block-right -->
                            </div>
                            <div class="block-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control is-valid" placeholder="Enter your first name" type="text">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control is-invalid" placeholder="Enter your last name" type="text">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Username" type="text">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter your email address" type="email">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" type="password">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" placeholder="Confirm password" type="password">
                                        </div>
                                    </div><!-- col-md-6 col-sm-12 -->
                                </div>
                            </div><!-- block-body -->
                        </div><!-- block -->

                        <div class="block">
                            <div class="block-title">
                                <div class="block-left">
                                    <h2 class="title">Payment Method</h2>    
                                </div><!-- block-left -->
                            </div>


                            <div class="block-body">
                                <div class="payment-method">
                                    <div class="payment-method-block paypal-method">
                                        <div class="form-group">
                                            <label class="control control--radio radio-tab">
                                                <input name="" value="" type="radio">
                                                <span class="control-text">Paypal</span>
                                                <span class="control__indicator"></span>
                                                <span class="radio-tab-inner"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="recurring-payment-wrap">
                                        <label class="control control--checkbox">
                                            <input type="checkbox" name="air-conditioning">Set up as recurring payment
                                            <span class="control__indicator"></span>
                                        </label>
                                    </div><!-- recurring-payment-wrap -->
                                    <div class="payment-method-block stripe-method">
                                        <div class="form-group">
                                            <label class="control control--radio radio-tab">
                                                <input name="" value="" type="radio">
                                                <span class="control-text">Stripe</span>
                                                <span class="control__indicator"></span>
                                                <span class="radio-tab-inner"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="recurring-payment-wrap">
                                        <label class="control control--checkbox">
                                            <input type="checkbox" name="air-conditioning">Set up as recurring payment
                                            <span class="control__indicator"></span>
                                        </label>
                                    </div><!-- recurring-payment-wrap -->
                                    <div class="payment-method-block twocheckout-method">
                                        <div class="form-group">
                                            <label class="control control--radio radio-tab">
                                                <input name="" value="" type="radio">
                                                <span class="control-text">2Checkout</span>
                                                <span class="control__indicator"></span>
                                                <span class="radio-tab-inner"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-method-block wire-method">
                                        <div class="form-group">
                                            <label class="control control--radio radio-tab">
                                                <input name="" value="" type="radio">
                                                <span class="control-text">Bank Transfert</span>
                                                <span class="control__indicator"></span>
                                                <span class="radio-tab-inner"></span>
                                                <span class="float-right wire-method-note">Use the order ID as a reference</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- block-body -->
                        </div><!-- block -->
                    </div><!-- membership-package-wrap -->
                    <div class="membership-nav-wrap">
                        <button class="btn btn-primary btn-block" onclick="window.location.href='membership-step-3.php'">Complete Membership</button>  
                    </div>
                    <div class="membership-note text-center">By clicking "Complete Membership" you agree to our <a href="#">Terms &amp; Conditions</a></div>
                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->

            </div><!-- .row -->
        </div>   <!-- .container -->
        
        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>