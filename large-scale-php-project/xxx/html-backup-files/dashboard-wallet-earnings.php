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

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">History</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="dashboard-request-payout.php" class="btn btn-primary btn-slim">Request a Payout</a>
                                        </div>
                                    </div>

                                    <div class="block-body">
                                        At the moment there are no earnings.
                                    </div>
                                </div>

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">History</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="dashboard-request-payout.php" class="btn btn-primary btn-slim">Request a Payout</a>
                                        </div>
                                    </div>
                                    <div class="table-block dashboard-withdraw-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Listing</th>
                                                    <th>Service Fee</th>
                                                    <th>Host Fee</th>
                                                    <th>Net Amount</th>
                                                    <th>Actions</th>
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
                                                    <td data-label="Service Fee">
                                                        $200.00
                                                    </td>
                                                    <td data-label="Host Fee">
                                                        $200.00
                                                    </td>
                                                    <td data-label="Net Amount">
                                                        <strong>$4,600.00</strong>
                                                    </td>
                                                    <td data-label="Actions">
                                                        <div class="custom-actions">
                                                            <button class="btn btn-secondary" onclick="window.location.href='dashboard-wallet-earnings-detail.php'">  Details
                                                            </button>
                                                        </div>
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
                                                    <td data-label="Service Fee">
                                                        $200.00
                                                    </td>
                                                    <td data-label="Host Fee">
                                                        $200.00
                                                    </td>
                                                    <td data-label="Net Amount">
                                                        <strong>$4,600.00</strong>
                                                    </td>
                                                    <td data-label="Actions">
                                                        <div class="custom-actions">
                                                            <button class="btn btn-secondary" onclick="window.location.href='dashboard-wallet-earnings-detail.php'">  Details
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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