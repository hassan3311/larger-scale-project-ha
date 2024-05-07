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
                    </div><!-- header-comp-logo -->

                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div><!-- header-comp-right -->
                </div><!-- header-inner -->
            </div><!-- container -->
        </header><!-- header-nav hidden-sm hidden-xs -->
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div><!-- .nav-area -->



    <section class="main-content-area booking-page">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-title text-center">
                        <div class="block-top-title">
                            <h1 class="listing-title">Enjoy and book with confidence.</h1>
                            <p>Leave the ability to add content in this page <a href="#">Learn More</a></p>
                        </div><!-- block-top-title -->
                    </div><!-- page-title -->
                    <div class="alert alert-info" role="alert">
                        <i class="homey-icon homey-icon-time-clock-circle"></i> Please act quickly! Rates and availability may subject to change.
                    </div>
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-push-7 col-lg-push-7">
                    
                    <?php include ('inc/booking/sidebar-booking-page.php'); ?>
                    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-md-pull-5 col-lg-pull-5">

                    <div class="block mb-0">
                        <div class="block-head table-block">
                            <h2 class="title"><span class="circle-icon">1</span> Start booking <i class="homey-icon check-circle-1 text-success" aria-hidden="true"></i> <a class="edit-booking-form" href="instant-booking-payment-page-step-1.php">Edit</a></h2>
                        </div>
                    </div>

                    <div class="block">
                        <div class="block-head table-block">
                            <h2 class="title"><span class="circle-icon">2</span> Rules & Policies</h2>
                        </div>
                        
                        <div class="block-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Cancellation Policy: Flexible</h3>
                                    <p>Full refund 1 day prior arrival, exceept fees</p>

                                    <h3>Owner rules</h3>
                                    <ul class="list-unstyled rules-options">
                                        <li>
                                            <i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i> Smoking allowed: <span>No</span>
                                        </li>
                                        <li>
                                            <i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Pets allowed: <span>Yes</span>
                                        </li>
                                        <li>
                                            <i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Party allowed: <span>Yes</span>
                                        </li>
                                        <li>
                                            <i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i> Children allowed: <span>No</span>
                                        </li>
                                    </ul>

                                    <p>This come from additional rules. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                    <div class="rental-agreement-download">
                                        <a href="#"><i class="homey-icon homey-icon-common-file-text-files-folders" aria-hidden="true"></i> Rental Agreement</a>
                                    </div>
                                    
                                    <div class="well">
                                        <!-- the div here below must be hidden and visible only if users doesn't check the policy agreement -->
                                        <div style="display: none;" class="mb-10"><i class="homey-icon alert-circle-interface-essential text-danger" aria-hidden="true"></i> You must review and agree to all rules and policies to continue.</div>
                                        
                                        <label class="control control--checkbox mb-0">
                                            <input type="checkbox" name="agreement">
                                            <span class="contro-text">I have read and agree with all rental policies and terms.</span>
                                            <span class="control__indicator"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="continue-block-button">
                                <button type="button" class="btn btn-booking btn-full-width" onclick="window.location.href='instant-booking-payment-page-step-3.php'">Continue</button>
                            </div>
                        </div>
                    </div>

                    <div class="block inactive mb-0">
                        <div class="block-head table-block">
                            <h2 class="title"><span class="circle-icon">3</span> Payment</h2>
                        </div>
                    </div>
                </div>

            </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->

        </div><!-- .row -->
    </div>   <!-- .container -->
</section><!-- main-content-area -->
<?php include 'inc/dashboard/dashboard-footer.php';?>
<?php include ('inc/scripts.php'); ?>
</body>
</html>