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
            <h1>Payouts</h1>
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
                                            <a href="dashboard-withdraw-setup.php" class="btn btn-primary btn-slim">Setup The Payout Method</a>
                                        </div>
                                    </div>

                                    <div class="block-body">
                                        At the moment there are no payouts.
                                    </div>
                                </div>

                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">History</h2>
                                    </div>
                                    <div class="table-block dashboard-withdraw-table dashboard-table">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Date Requested</th>
                                                    <th>Amount</th>
                                                    <th>Payout Method</th>
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
                                                        $ 9,765.00 (less $35 transaction fee)
                                                    </td>
                                                    <td data-label="Payout Method">
                                                        Wire Transfert
                                                    </td>
                                                    <td data-label="Status">
                                                        <span class="label label-success">COMPLETED</span>
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
                                                    <td data-label="Payout Method">
                                                        PayPal to email@email.com
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
                                                    <td data-label="Payout Method">
                                                        PayPal to email@email.com
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