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

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <div class="block">
                                    <div class="block-title">
                                        <h2 class="title">Manage</h2>
                                    </div>
                                    <div class="invoice-search-block">
                                        <div class="row">   
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control selectpicker">
                                                        <option>All</option>
                                                        <option>Pending</option>
                                                        <option>Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label>Date Requested</label>
                                                    <input type="text" class="form-control" placeholder="MM/DD/YY">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label>Date Processed</label>
                                                    <input type="text" class="form-control" placeholder="MM/DD/YY">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input type="text" class="form-control" placeholder="Enter the apyout ID">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label>Host Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter the Host name">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="table-block dashboard-reservation-table dashboard-table">
                                        <div class="table-block dashboard-withdraw-table dashboard-table">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Date Requested</th>
                                                        <th>ID</th>
                                                        <th>Amount</th>
                                                        <th>Host</th>
                                                        <th>Payout Method</th>
                                                        <th>Status</th>
                                                        <th>Date Processed</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Date Requested">
                                                            10 Mar 2019
                                                        </td>
                                                        <td data-label="ID">
                                                            #000001
                                                        </td>
                                                        <td data-label="Amount">
                                                            $ 9,765.00
                                                        </td>
                                                        <td data-label="Host">
                                                            John Doe
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
                                                        <td data-label="Actions">
                                                            <div class="custom-actions">
                                                                <button class="btn btn-secondary" onclick="window.location.href='dashboard-payout-admin-detail.php'">Details</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Date Requested">
                                                            10 Mar 2019
                                                        </td>
                                                        <td data-label="ID">
                                                            #000001
                                                        </td>
                                                        <td data-label="Amount">
                                                            $ 9,765.00
                                                        </td>
                                                        <td data-label="Host">
                                                            John Doe
                                                        </td>
                                                        <td data-label="Payout Method">
                                                            PayPal to email@email.com
                                                        </td>
                                                        <td data-label="Status">
                                                            <span class="label label-success">COMPLETED</span>
                                                        </td>
                                                        <td data-label="Date Processed">
                                                            15 Mar 2019
                                                        </td>
                                                        <td data-label="Actions">
                                                            <div class="custom-actions">
                                                                <button class="btn btn-secondary" onclick="window.location.href='dashboard-payout-admin-detail.php'">Details</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- .block -->    
                                <?php include 'inc/listing/pagination.php';?>
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