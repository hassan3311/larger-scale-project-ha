<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php';?>
</head>
<body>

    <div class="header-dashboard">
        <div class="nav-area header-type-1">
            <!-- desktop nav -->
            <header class="header-nav hidden-sm hidden-xs">
                <div class="container-fluid">
                    <div class="header-inner table-block">
                        <div class="header-comp-logo">
                            <?php include ('inc/header/logo.php'); ?>
                        </div>
                        <div class="header-comp-nav text-left">
                            <?php include ('inc/header/main-nav.php'); ?>
                        </div>
                        <div class="header-comp-right">
                            <?php include ('inc/header/account-user.php'); ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- mobile header -->
            <?php include ('inc/header/header-mobile-full-width.php'); ?>
        </div>    
    </div>   
    
    <section id="body-area">

        <div class="dashboard-page-title">
            <h1>Reservations</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="block">
                                    <div class="block-head">
                                        <div class="block-left">
                                            <h2 class="title">Select the payment method</h2>
                                        </div><!-- block-left -->
                                    </div><!-- block-head -->
                                
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-12">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Payment</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <?php include ('inc/booking/commercial-payment-list.php'); ?>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->
                                </div><!-- .block -->

                                
                                <div class="payment-buttons">
                                    <button class="btn btn-success btn-full-width" onclick="window.location.href='dashboard-reservation-confirmed-user.php'">Process Payment</button>
                                </div>
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>