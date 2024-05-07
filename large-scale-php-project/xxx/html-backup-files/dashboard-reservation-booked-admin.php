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
            <h1>Reservations</h1>
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
                                            <h2 class="title">Reservation #0001</h2>
                                        </div><!-- block-left -->
                                    </div><!-- block-head -->
                                    
                                    <div class="collapse" id="decline-reservation">
                                        <div class="reason-msg-block">
                                            <h3 class="title">Decline Reason</h3>
                                            <form>
                                                <div class="text-area-block">
                                                    <textarea name="msg-text" class="form-control" placeholder="" rows="5"></textarea>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-grey-light btn-xs-full-width">Submit</button>
                                                </div>
                                            </form>
                                        </div><!-- reason-msg-block -->
                                    </div><!-- collapse -->
                                    
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <ul class="detail-list">
                                                    <li><strong>Date:</strong></li>
                                                    <li>July 16, 2017</li>
                                                </ul>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <img src="img/guest-avatar-100x100.png" alt="Thumb" width="64" height="64" class="reserve-detail-avatar img-circle">
                                                <ul class="detail-list">
                                                    <li><strong>From:</strong> <a href="#">Mike Lawrence</a></li>
                                                    <li><strong>Email:</strong> <a href="#">email@email.com</a></li>
                                                    <li><strong>Phone:</strong> +1 987 6543 321</li>
                                                    <li>Apartment for Rent</li>
                                                </ul>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->

                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Host</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <img src="img/host-avatar-100x100.png" alt="Thumb" width="64" height="64" class="reserve-detail-avatar img-circle">
                                                <ul class="detail-list">
                                                    <li><strong>Name:</strong> <a href="#">Patricia Whatson</a></li>
                                                    <li><strong>Email:</strong> <a href="#">email@email.com</a></li>
                                                    <li><strong>Phone:</strong> <a href="#">+1 987 7654 321</a></li>
                                                </ul>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->

                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Details</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <ul class="detail-list detail-list-2-cols">
                                                    <li>Check In: <strong>11/29/2016</strong></li>
                                                    <li>Check Out: <strong>12/03/2016</strong></li>
                                                    <li>Nights: <strong>2</strong></li>
                                                    <li>Guests: <strong>2</strong></li>
                                                    <li>Additional Guests: <strong>1</strong></li>
                                                    <li>Children: <strong>0</strong></li>
                                                </ul>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->    

                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Notes</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula eget turpis laoreet pulvinar. Vestibulum condimentum massa ac hendrerit auctor. Quisque tincidunt pulvinar iaculis.</p>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section --> 
                                    
                                    <div class="block-section">
                                        <div class="block-body">
                                            <div class="block-left">
                                                <h2 class="title">Payment</h2>
                                            </div><!-- block-left -->
                                            <div class="block-right">
                                                <?php include ('inc/booking/payment-list.php'); ?>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->
                                </div><!-- .block -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar admin-dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-admin-reservation-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>