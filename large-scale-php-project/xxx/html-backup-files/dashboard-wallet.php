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
            <h1>Wallet</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="wallet-box-wrap">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">$56,989.00</div>
                                                <h3>Total Earnings <span class="wallet-label">Fees: 10%</span></h3>
                                                <div class="wallet-box-info">Excluding the service fee, the host fee and the security deposit</div>
                                                <a class="btn btn-primary btn-slim" href="dashboard-wallet-earnings.php">Details</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">$3,596.98</div>
                                                <h3>Available Balance</h3>
                                                <div class="wallet-box-info">Represents the available amount you can currently withdraw to your account</div>
                                                <a class="btn btn-primary btn-slim" href="dashboard-request-payout.php">Request a Payout</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="wallet-box">
                                                <div class="block-big-text">546</div>
                                                <h3>Total reservations</h3>
                                                <div class="wallet-box-info">Represents the total number of paid reservations you have received</div>
                                                <a class="btn btn-primary btn-slim" href="dashboard-reservations-host.php">Manage</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wallet-box-wrap">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">

                                            <div class="block">
                                                <div class="block-title">
                                                    <h2 class="title">Earnings</h2>
                                                </div>

                                                <div class="block-body">
                                                    At the moment there are no earnings.
                                                </div>
                                            </div>

                                            <div class="block table-block dashboard-withdraw-table dashboard-table">
                                                <div class="block-title">
                                                    <div class="block-left">
                                                        <h2 class="title">Earnings</h2>
                                                    </div>
                                                    <div class="block-right">
                                                        <a class="btn btn-primary btn-slim" href="dashboard-wallet-earnings.php">View All</a>
                                                    </div>
                                                </div>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Date</th>
                                                            <th>Listing</th>
                                                            <th>Net Amount</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td data-label="ID">
                                                                <a href="#">#00002</a>
                                                            </td>
                                                            <td data-label="Date">
                                                                12 Mar 2019
                                                            </td>
                                                            <td data-label="Listing">
                                                                <a href="#">Apartment For Rent</a>
                                                            </td>
                                                            <td data-label="Net Amount">
                                                                <strong>$4,600.00</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="ID">
                                                                <a href="#">#00001</a>
                                                            </td>
                                                            <td data-label="Date">
                                                                11 Mar 2019
                                                            </td>
                                                            <td data-label="Listing">
                                                                <a href="#">Apartment For Rent</a>
                                                            </td>
                                                            <td data-label="Net Amount">
                                                                <strong>$4,600.00</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="ID">
                                                                <a href="#">#00001</a>
                                                            </td>
                                                            <td data-label="Date">
                                                                11 Mar 2019
                                                            </td>
                                                            <td data-label="Listing">
                                                                <a href="#">Apartment For Rent</a>
                                                            </td>
                                                            <td data-label="Net Amount">
                                                                <strong>$4,600.00</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="ID">
                                                                <a href="#">#00001</a>
                                                            </td>
                                                            <td data-label="Date">
                                                                11 Mar 2019
                                                            </td>
                                                            <td data-label="Listing">
                                                                <a href="#">Apartment For Rent</a>
                                                            </td>
                                                            <td data-label="Net Amount">
                                                                <strong>$4,600.00</strong>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="ID">
                                                                <a href="#">#00001</a>
                                                            </td>
                                                            <td data-label="Date">
                                                                11 Mar 2019
                                                            </td>
                                                            <td data-label="Listing">
                                                                <a href="#">Apartment For Rent</a>
                                                            </td>
                                                            <td data-label="Net Amount">
                                                                <strong>$4,600.00</strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">

                                            <div class="block">
                                                <div class="block-title">
                                                    <div class="block-left">
                                                        <h2 class="title">Payouts</h2>
                                                    </div>
                                                    <div class="block-right">
                                                        <a href="dashboard-withdraw-setup.php" class="btn btn-primary btn-slim">Setup The Payout Method</a>
                                                    </div>
                                                </div>

                                                <div class="block-body">
                                                    At the moment there are no payouts.
                                                </div>
                                            </div>

                                            <div class="block table-block dashboard-withdraw-table dashboard-table">
                                                <div class="block-title">                           
                                                    <div class="block-left">
                                                        <h2 class="title">Payouts</h2>
                                                    </div>
                                                    <div class="block-right">
                                                        <a class="btn btn-primary btn-slim" href="dashboard-withdraw-history.php">View All</a>
                                                    </div>
                                                </div>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Date Requested</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                            <th>Date Processed</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-label="Date Requested">
                                                                10 Mar 2019
                                                            </td>
                                                            <td data-label="Amount">
                                                                $ 9,765.00
                                                            </td>
                                                            <td data-label="Status">
                                                                <span class="label label-warning">PENDING</span>
                                                            </td>
                                                            <td data-label="Date Processed">
                                                                15 Mar 2019
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="Date Requested">
                                                                10 Mar 2019
                                                            </td>
                                                            <td data-label="Amount">
                                                                $ 9,765.00
                                                            </td>
                                                            <td data-label="Status">
                                                                <span class="label label-warning">PENDING</span>
                                                            </td>
                                                            <td data-label="Date Processed">
                                                                15 Mar 2019
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="Date Requested">
                                                                10 Mar 2019
                                                            </td>
                                                            <td data-label="Amount">
                                                                $ 9,765.00
                                                            </td>
                                                            <td data-label="Status">
                                                                <span class="label label-warning">PENDING</span>
                                                            </td>
                                                            <td data-label="Date Processed">
                                                                15 Mar 2019
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="Date Requested">
                                                                10 Mar 2019
                                                            </td>
                                                            <td data-label="Amount">
                                                                $ 9,765.00
                                                            </td>
                                                            <td data-label="Status">
                                                                <span class="label label-warning">PENDING</span>
                                                            </td>
                                                            <td data-label="Date Processed">
                                                                15 Mar 2019
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td data-label="Date Requested">
                                                                10 Mar 2019
                                                            </td>
                                                            <td data-label="Amount">
                                                                $ 9,765.00
                                                            </td>
                                                            <td data-label="Status">
                                                                <span class="label label-warning">PENDING</span>
                                                            </td>
                                                            <td data-label="Date Processed">
                                                                15 Mar 2019
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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