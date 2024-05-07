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
            <h1>Payment confirmation</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="invoice-detail block">
                                    <div class="invoice-header clearfix">
                                        <div class="block-left">
                                            <div class="invoice-logo">
                                                <?php include ('inc/header/logo.php'); ?>
                                            </div>
                                            <ul class="list-unstyled">
                                                <li><strong>Homey LLC</strong></li>
                                                <li>2983 Halton Road, Suite #320</li>
                                                <li>Miami Beach</li>
                                                <li>Florida</li>
                                                <li>33139</li>
                                            </ul>
                                        </div>
                                        <div class="block-right">
                                            <ul class="list-unstyled">
                                                <li><strong>Invoice:</strong> 0001</li>
                                                <li><strong>Date:</strong> August 22, 2018</li>
                                            </ul>
                                        </div>
                                    </div><!-- invoice-header -->

                                    <div class="invoice-body clearfix">
                                        <ul class="list-unstyled">
                                            <li><strong>To:</strong></li>
                                            <li>John Doe</li>
                                            <li>Email: your@email.com</li>
                                        </ul>  
                                        <h2 class="title">Details</h2>    
                                        <?php include ('inc/booking/payment-list.php'); ?> 
                                    </div><!-- invoice-body -->

                                    <div class="invoice-footer clearfix">
                                        <dl>
                                            <dt>Additional information:</dt>
                                            <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                                        </dl>
                                    </div><!-- invoice-footer -->
                                </div>

                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->   
            <aside class="dashboard-sidebar">
                <button class="btn btn-grey btn-full-width">Print</span>
            </aside><!-- .dashboard-sidebar -->             
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>