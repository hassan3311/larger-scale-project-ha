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

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Congratulations! The reservation has been booked
                                </div>

                                <div class="block">
                                    <div class="block-head">
                                        <div class="block-left">
                                            <h2 class="title">Reservation #0001 <span class="label label-success">BOOKED</span></h2>
                                        </div><!-- block-left -->
                                        <div class="block-right">
                                            <div class="custom-actions">
                                                <button class="btn-action" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="homey-icon homey-icon-qpencil-interface-essential"></i></button>
                                                <button class="btn-action" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print"><i class="homey-icon homey-icon-print-text"></i></button>
                                                <button class="btn-action" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Message"><i class="homey-icon homey-icon-unread-emails"></i></button>
                                                <button class="btn-action" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back"><i class="homey-icon homey-icon-move-back-interface-essential"></i></button>
                                            </div><!-- custom-actions -->
                                        </div><!-- block-right -->
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
                                                    <li><strong>From:</strong> Mike Lawrence</li>
                                                    <li>Apartment for Rent</li>
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
                                                    <li>Starts: <strong>11/29/2016</strong></li>
                                                    <li>Ends: <strong>12/03/2016</strong></li>
                                                    <li>Days: <strong>2</strong></li>
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
                                                <?php include ('inc/booking/commercial-payment-list.php'); ?>
                                            </div><!-- block-right -->
                                        </div><!-- block-body -->
                                    </div><!-- block-section -->
                                </div><!-- .block -->
                                <div class="payment-buttons">
                                    <span class="btn btn-success-outlined btn-full-width"><i class="homey-icon homey-icon-check-circle-1"></i> Booked</span>
                                </div>
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/commercial-dashboard-payment-details-block.php';?>
                <span class="btn btn-success-outlined btn-full-width"><i class="homey-icon homey-icon-check-circle-1"></i> Booked</span>
            </aside><!-- .dashboard-sidebar -->
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>