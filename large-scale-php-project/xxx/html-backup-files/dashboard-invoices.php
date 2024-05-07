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
            <h1>Invoices</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

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
                                                    <label>Start date</label>
                                                    <input type="text" class="form-control" placeholder="MM/DD/YY">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label>End date</label>
                                                    <input type="text" class="form-control" placeholder="MM/DD/YY">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                <div class="form-group">
                                                    <label>Type</label>
                                                    <select class="form-control selectpicker">
                                                        <option>Type 1</option>
                                                        <option>Type 2</option>
                                                        <option>Type 3</option>
                                                        <option>Type 4</option>
                                                        <option>Type 5</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                            <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control selectpicker">
                                                        <option>Status 1</option>
                                                        <option>Status 2</option>
                                                  </select>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-block dashboard-reservation-table dashboard-table">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                                <th>Booking Date</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include 'inc/dashboard/dashboard-invoice-list.php';?>
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