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
            <h1>Earnings</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="block">
                                    <div class="block-head">
                                        <div class="block-left">
                                            <h2 class="title">Details</h2>
                                        </div><!-- block-left -->
                                        <div class="block-right">
                                            <div class="custom-actions">
                                                <button class="btn-action" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print"><i class="homey-icon homey-icon-print-text"></i></button>
                                            </div><!-- custom-actions -->
                                        </div><!-- block-right -->
                                    </div><!-- block-head -->
                                    
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Reservation</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <div class="payment-list">
                                                <ul>
                                                    <li><strong>Reservation ID:</strong> <span><a href="#">#000001</a></span></li>
                                                    <li><strong>Date:</strong> <span>July 16, 2017</span></li>
                                                    <li><strong>Listing:</strong> <span><a href="#">Apartment for Rent</a></span></li>
                                                    <li><strong>From:</strong> <span>Mike Lawrence</span></li>
                                                </ul>
                                                </div>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->  
                                    
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Earnings</h2>
                                            </div><!-- block-left -->

                                            <div class="block-right">
                                                <div class="payment-list earnings-detail-list">
                                                    <ul>
                                                        <li class="sub-total">Reservation <i class="homey-icon homey-icon-question-circle-interface-essential" data-toggle="tooltip" data-placement="top" title="Tooltip on left" aria-hidden="true"></i></li>
                                                        <li>Upfront payment <span> $1,000.00</span></li>
                                                        <li>Security deposit <span> $1,000.00</span></li>
                                                        <li>Payment due <span> $3,000.00</span></li>
                                                        <li>Paid locally <span> $3,000.00</span></li>
                                                        
                                                        <li class="sub-total">Gross Payment <i class="homey-icon homey-icon-question-circle-interface-essential" data-toggle="tooltip" data-placement="top" title="Tooltip on left" aria-hidden="true"></i></li>
                                                        <li>Total amount <span>$5,000.00</span></li>

                                                        <li class="sub-total">Fees <i class="homey-icon homey-icon-question-circle-interface-essential" data-toggle="tooltip" data-placement="top" title="Tooltip on left" aria-hidden="true"></i></li>
                                                        <li>Service Fee <span>- $100.00</span></li>
                                                        <li>Host Fee (10%) <span>- $500.00</span></li>

                                                        <li class="sub-total">Net Earnings <i class="homey-icon homey-icon-question-circle-interface-essential" data-toggle="tooltip" data-placement="top" title="Tooltip on left" aria-hidden="true"></i></li>
                                                        <li>Total amount<span>$4,400.00</span></li>
                                                        <li class="total">
                                                            <div class="payment-list-price-detail clearfix">
                                                                <div class="pull-left">
                                                                    <div class="payment-list-price-detail-total-price">Payout</div>
                                                                </div>
                                                                <div class="pull-right text-right">
                                                                    <div class="payment-list-price-detail-total-price">$4,400.00</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->
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