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
            <h1>Reservations</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-user.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Well done! Payment received the reservation has been booked.
                                </div>

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Thank you! Your review has been submitted.
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
                                    
                                    <div class="review-form-block review-form-block-user">
                                        <div class="block">
                                            <div class="block-title">
                                                <h3 class="title">Leave a Review</h3>
                                            </div><!-- block-head -->
                                            <div class="block-body">
                                                <div class="review-form-block">
                                                    <div class="stars">
                                                        <div class="rating">
                                                            <div class="form-group">
                                                                <select name="property-type" class="selectpicker" id="bedrooms-number" data-live-search="false" title="Select your rating">
                                                                    <option>1 Star - Poor</option>
                                                                    <option>2 Star -  Fair</option>
                                                                    <option>3 Star - Average</option>
                                                                    <option>4 Star - Good</option>
                                                                    <option>5 Star - Excellent</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form class="form-msg">
                                                        <div class="msg-type-block">
                                                            <textarea class="form-control" placeholder="Type your review here..." rows="5"></textarea>
                                                        </div>
                                                        <div class="form-msg-btns">
                                                            <button class="btn btn-primary btn-xs-full-width">Send</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- block-body -->
                                        </div>
                                    </div>

                                    <div class="collapse" id="decline-reservation">
                                        <div class="reason-msg-block">
                                            <h3 class="title">Revervation Cancellation Reason</h3>
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
                                                <a class="btn btn-primary btn-slim" href="#">Reply</a>
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
                                <div class="payment-buttons">
                                    <span class="btn btn-success-outlined btn-half-width"><i class="homey-icon homey-icon-check-circle-1"></i> Booked</span>
                                    <button class="btn btn-grey-light btn-half-width" data-toggle="collapse" data-target="#decline-reservation" aria-expanded="false" aria-controls="collapseExample">Cancel</button>
                                </div>
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-payment-details-block.php';?>
                <span class="btn btn-success-outlined btn-full-width"><i class="homey-icon homey-icon-check-circle-1"></i> Booked</span>
                <button class="btn btn-grey-light btn-full-width" data-toggle="collapse" data-target="#decline-reservation" aria-expanded="false" aria-controls="collapseExample">Cancel</button>
            </aside><!-- .dashboard-sidebar -->
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>