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
                            <?php include ('inc/header/account-host.php'); ?>
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
            <h1>Payout Setup</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Alert content here
                                </div>

                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Alert content here
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-12">

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12"></div>
                                </div>
                                
                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Beneficiary Information</h2>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="first-name">First name</label>
                                                    <input type="text" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last-name">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter last name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last-name">Company Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter the company name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last-name">Tax Identification Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter the company name">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label for="street-address">Street Address</label>
                                                    <input type="text" id="street-address" class="form-control" placeholder="Enter street address">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="apt-suit"> Apt, Suite </label>
                                                    <input type="text" id="apt-suit" class="form-control" placeholder=" Ex. #123 ">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" id="city" class="form-control" placeholder="Enter your city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="state">State</label>
                                                    <input type="text" id="state" class="form-control" placeholder="Enter your state">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip-code">Zip Code</label>
                                                    <input type="text" id="zip-code" class="form-control" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Select Your Payout Method</h2>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control control--radio radio-tab">
                                                        <input type="radio" name="place-type" value="1" checked="checked">
                                                        <span class="control-text">Paypal</span>
                                                        <span class="control__indicator"></span>
                                                        <span class="radio-tab-inner"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control control--radio radio-tab">
                                                        <input type="radio" name="place-type" value="2">
                                                        <span class="control-text">Skrill</span>
                                                        <span class="control__indicator"></span>
                                                        <span class="radio-tab-inner"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control control--radio radio-tab">
                                                        <input type="radio" name="place-type" value="3">
                                                        <span class="control-text">Wire Transfert</span>
                                                        <span class="control__indicator"></span>
                                                        <span class="radio-tab-inner"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Wire Transfert Information</h2>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Beneficiary Account Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter your account number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>SWIFT or IBN</label>
                                                    <input type="text" class="form-control" placeholder="Enter the SWIFT code">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Bank Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter the bank name">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label for="street-address">Street Address</label>
                                                    <input type="text" id="street-address" class="form-control" placeholder="Enter street address">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="apt-suit"> Apt, Suite </label>
                                                    <input type="text" id="apt-suit" class="form-control" placeholder=" Ex. #123 ">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" id="city" class="form-control" placeholder="Enter your city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="state">State</label>
                                                    <input type="text" id="state" class="form-control" placeholder="Enter your state">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip-code">Zip Code</label>
                                                    <input type="text" id="zip-code" class="form-control" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .block -->
                                
                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">PayPal Account Information</h2>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Recipient Email</label>
                                                    <input type="text" class="form-control" placeholder="Enter your PayPal email">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .block -->

                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Skrill Account Information</h2>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Recipient Email</label>
                                                    <input type="text" class="form-control" placeholder="Enter your PayPal email">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .block -->

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