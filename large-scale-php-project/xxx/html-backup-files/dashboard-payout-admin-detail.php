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
            <h1>Payout</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

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
                                                <h2 class="title">Payout</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <div class="payment-list">
                                                    <ul class="list-unstyled list-lined">
                                                        <li><strong>ID:</strong> <span>#000001</span></li>
                                                        <li><strong>Amount:</strong> <span>$3,234.00</span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->  
                                    
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Date</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <div class="payment-list">
                                                    <ul class="list-unstyled list-lined">
                                                        <li><strong>Date Requested:</strong> <span>July 16, 2017</span></li>
                                                        <li><strong>Date Processed:</strong> <span>July 17, 2017</span></li>
                                                        <li><strong>ID:</strong> <span><a href="#">#000001</a></span></li>
                                                        <li><strong>From:</strong> <span>Mike Lawrence</span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->  

                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Host</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <div class="payment-list">
                                                    <ul class="list-unstyled list-lined">
                                                        <li><strong>Name:</strong> <span>John Doe</span></li>
                                                        <li><strong>Email:</strong> <span>john.doe@email.com</span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->  

                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Method</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <ul class="list-unstyled">
                                                    <li><strong>Method</strong> Wire Transfert</li>
                                                </ul>
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Beneficiary Name</strong> John Doe</li>
                                                    <li><strong>Company Name</strong> My Company LTD</li>
                                                    <li><strong>Tax Identification Number</strong> 9876543210</li>
                                                </ul>
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Address</strong> 7898 Michigan Avenue, Miami Beach, FL 33139</li>
                                                </ul>

                                                <ul class="list-unstyled list-lined mb-0">
                                                    <li><strong>Beneficiary Account Number</strong> 3216459876546</li>
                                                    <li><strong>SWIFT</strong> BAF91238</li>
                                                    <li><strong>Bank Name</strong> Bank Inc.</li>
                                                    <li><strong>Bank Address</strong> 2736 Jefferson Avenue, Miami Beach, FL 33139</li>
                                                </ul>
                                            </div>
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->  
                                    
                                </div><!-- .block -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->   
            <aside class="dashboard-sidebar admin-dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-admin-payout-widget.php';?>
            </aside><!-- .dashboard-sidebar --> 
        </div><!-- .user-dashboard-right -->
    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>