<div class="nav-area header-type-1">
    <!-- desktop nav -->
    <header class="header-nav hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="header-inner table-block">
                <div class="header-comp-logo">
                    <?php include ('inc/header/logo.php'); ?>
                </div>
                <div class="header-comp-nav text-center">
                    <?php include ('inc/header/main-nav.php'); ?>
                </div>
                <div class="header-comp-right">
                    <div class="account-loggedin">
                        Admin
                        <span class="user-image">
                            <img src="img/24x24.png" alt="profile image" class="img-circle" width="24" height="24">
                        </span>
                        <div class="account-dropdown">
                            <ul>
                                <li> <a href="dashboard-user.php"> <i class="homey-icon homey-icon-house-2"></i>Dashboard</a></li>
                                <li> <a href="my-profile.php"> <i class="homey-icon homey-icon-single-neutral-circle"></i> Profile</a></li>
                                <li> <a href="my-listings.php"> <i class="homey-icon homey-icon-layout-agenda-interface-essential"></i>Listings</a>
                                    <ul class="sub-menu">
                                        <li><a href="add-new-property.php"> <i class="homey-icon homey-icon-arrow-right-1"></i> Add new listing</a></li>
                                        <li><a href="edit-listing.php"> <i class="homey-icon homey-icon-arrow-right-1"></i> Edit Listing</a></li>
                                    </ul>
                                </li>
                                <li> <a href="reservations.php"> <i class="homey-icon homey-icon-calendar-3"></i> Reservations</a>
                                    <ul class="sub-menu">
                                        <li><a href="reservation-detail-user.php"> <i class="homey-icon homey-icon-arrow-right-1"></i> Reservation</a></li>
                                    </ul>
                                </li>
                                <li> <a href="my-messages.php"> <i class="homey-icon homey-icon-messages-bubble-text-1-messages-chat-smileys"></i>Messages</a>
                                    <ul class="sub-menu">
                                        <li><a href="my-messages-all.php">All</a></li>
                                        <li><a href="my-messages-unread.php">Unread</a></li>
                                        <li><a href="my-messages-sent.php">Sent</a></li>
                                    </ul>
                                </li>
                                <li> <a href="my-favorite-listings.php"> <i class="homey-icon love-it"></i>Favorites</a></li>
                                <li> <a href="my-saved-searches.php"> <i class="homey-icon homey-icon-search-1"></i>Saved searches</a></li>
                                <li> <a href="my-account.php"> <i class="homey-icon homey-icon-cog-double-2-interface-essential"></i>Account</a></li>

                                <li><a href="#"> <i class="homey-icon login-interface-essential"></i>Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile nav -->
    <header class="header-nav header-mobile hidden-md hidden-lg">
        <div class="container-fluid">
            <div class="header-mobile-wrap">
                <div class="row">
                    <div class="col-xs-3">
                        <button type="button" class="btn btn-mobile-nav" data-toggle="collapse" data-target="#mobile-nav" aria-expanded="false" aria-controls="navbar">
                            <i class="homey-icon homey-icon-navigation-menu" aria-hidden="true"></i>
                        </button><!-- btn-mobile-nav -->
                    </div>
                    <div class="col-xs-6">
                        <div class="mobile-logo text-center">
                            <?php include ('inc/header/logo.php'); ?>
                        </div><!-- mobile-logo -->
                    </div>
                    <div class="col-xs-3">
                        <div class="user-menu text-right">
                            <button type="button" class="btn btn-mobile-nav" data-toggle="collapse" data-target="#user-nav" aria-expanded="false" aria-controls="navbar">
                                <i class="homey-icon homey-icon-single-neutral-circle" aria-hidden="true"></i>
                            </button>
                        </div><!-- user-menu -->
                    </div>
                </div><!-- row -->
            </div><!-- header-mobile-wrap -->
        </div><!-- container -->
        <div class="container-fluid">
            <div class="mobile-nav-wrap">
                <?php include ('inc/header/mobile-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->
        </div><!-- container -->
        <div class="container-fluid">
            <div class="user-nav-wrap">
                <?php include ('inc/header/mobile-user-menu.php'); ?>
            </div><!-- mobile-nav-wrap -->
        </div><!-- container -->
    </header><!-- header-nav header-mobile hidden-md hidden-lg -->
</div>