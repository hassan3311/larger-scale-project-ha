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

                    <div class="block">
                        <div class="block-head table-block">
                            <h2 class="title"><span class="circle-icon">1</span> Start booking</h2>
                        </div>
                        <div class="block-body">
                            <button type="button" class="btn btn-facebook-lined btn-half-width"><i class="homey-icon homey-icon-social-media-facebook" aria-hidden="true"></i> Login with Facebook</button>
                            <button type="button" class="btn btn-google-plus-lined btn-half-width"><i class="homey-icon homey-icon-social-media-google-plus-1" aria-hidden="true"></i> Login with Google</button>
                            <p class="text-center mt-20 mb-0">Do you already have an account? <a href="#" data-toggle="modal" data-target="#modal-login" data-dismiss="modal">Log In</a></p>
                        </div>
                        <div class="block-sub-title">
                            <h3 class="margin-0">Continue with your email</h3>
                        </div>
                        <div class="block-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="first-name">First name</label>
                                        <input type="text" id="first-name" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" placeholder="Enter your last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">Password</label>
                                        <input type="passowrd" id="city" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="city">Confirm Password</label>
                                        <input type="passowrd" id="city" class="form-control" placeholder="Rpeat password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-sub-title">
                            <h3 class="margin-0">Introduce your self to the host</h3>
                        </div>
                        <div class="block-body">
                            <div class="msg-send-block">
                                <div class="msg-send-block-host-avatar clearfix">
                                    <img src="img/host-avatar-70x70.png" class="img-circle avatar" alt="Image" width="70" height="70">
                                    <div class="msg-send-block-host-info">
                                        <h4>Patricia Watson</h4>
                                        <p>Speaks: English, Spanish, Italian</p>
                                    </div>
                                </div>
                                <form class="form-msg">
                                    <div class="msg-type-block">
                                        <textarea class="form-control" rows="5" placeholder="Type your message here..."></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="continue-block-button">
                                <button type="button" class="btn btn-booking btn-full-width" onclick="window.location.href='instant-booking-payment-page-step-2.php'">Continue</button>
                                <p class="text-center mb-0">By clicking Continue you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="block inactive mb-0">
                        <div class="block-head table-block">
                            <h2 class="title"><span class="circle-icon">2</span> Rules & Policies</h2>
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