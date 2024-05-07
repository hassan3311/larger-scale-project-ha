<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'inc/head.php';?>
    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
            background-color: #fff;
            font-size: 1em;
        }
        h2 {
            margin: 0 0 40px;
            text-transform: capitalize;
            background-color: #eee;
            padding: 30px;
        }
        ul {
            list-style: none;
        }
        ul li {
            margin: 5px 0;
            text-transform: capitalize;
        }
        .nav {
            position: fixed;
            width: 200px;
            height: 100%;
            top: 0;
            right: 0;
            padding: 0;
            border-left: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            background-color: #fff;
        }
        .nav ul {
            padding: 0;
            margin: 0;
        }
        .nav li {
            border-bottom: 1px solid #ddd;
            padding: 5px 15px;
            margin: 0;
        }
        .nav-title {
            background-color: #eee;
        }
        .divider {
            border: none; 
            margin: 35px 0 0;
        }
        .divider:first-of-type {
            border: none; 
            margin: 0;
        }
    </style>
</head>
<body>


    <nav class="nav">
        <ul>
            <li class="nav-title"><strong>Dashboard</strong></li>
            <li><a href="#admin-dashboard">Admin dashboard</a></li>
            <li><a href="#host-dashboard">Host dashboard</a></li>
            <li><a href="#guest-dashboard">Guest dashboard</a></li>
        </ul>
    </nav>

    <hr id="admin-dashboard" class="divider">

    <h2><a href="dashboard-admin.php">Admin dashboard</a></h2>
    <ul>
        <li><strong>Listings</strong>
            <ul>
                <li><a href="dashboard-admin-pending-listings.php">Pending listings</a></li>
                <li><a href="dashboard-admin-published-listings.php">Published listings</a></li>
                <li><a href="dashboard-admin-listing-details.php">Listing detail</a></li>
            </ul>
        </li>
        <li><strong>Messages</strong>
            <ul>
                <li><a href="dashboard-admin-messages.php">All messages</a></li>
            </ul>
        </li>
        <li><strong>Activities</strong>
            <ul>
                <li><a href="dashboard-admin-activities.php">All activities</a></li>
            </ul>
        </li>
        <li><strong>Users</strong>
            <ul>
                <li><a href="dashboard-admin-users.php">All users</a>
                    <ul>
                        <li><a href="dashboard-admin-all-guests.php">All guests</a></li>
                        <li><a href="dashboard-admin-guest-user-detail.php">Guest detail</a></li>
                        <li><a href="dashboard-admin-all-hosts.php">All hosts</a></li>
                        <li><a href="dashboard-admin-host-user-detail.php">Host detail</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Payouts</strong>
            <ul>
                <li><a href="dashboard-payouts-admin-all.php">All Payouts</a></li>
                <li><a href="dashboard-payouts-admin-all.php">Payout details</a></li>
            </ul>
        </li>
        <li><strong>Reservations</strong>
            <ul>
                <li><strong>Listings</strong>
                    <ul>
                        <li><a href="dashboard-reservations-admin-all.php">All Reservations</a></li>
                        <li><a href="dashboard-reservation-empty.php">Reservations (empty)</a></li>

                        <li><a href="dashboard-reservations-admin-new.php">New Reservation details</a></li>
                        <li><a href="dashboard-reservation-available-admin.php">Available Reservation details</a></li>
                        <li><a href="dashboard-reservations-admin-booked.php">All booked Reservation</a></li>
                        <li><a href="dashboard-reservation-booked-admin.php">Booked Reservation detail</a></li>
                        <li><a href="dashboard-reservations-admin-cancelled.php">All Cancelled Reservations</a></li>
                        <li><a href="dashboard-reservation-cancelled-admin.php">Cancelled Reservation detail</a></li>
                        <li><a href="dashboard-reservations-admin-declined.php">All Declined Reservations</a></li>
                        <li><a href="dashboard-reservation-declined-host.php">Declined Reservation detail</a></li>
                        <li><a href="dashboard-reservations-admin-pending.php">All Pending Reservations</a></li>
                    </ul>
                </li>
                <li><strong>Experiences</strong>
                    <ul>
                        <li><a href="dashboard-experience-reservation-details-host.php">Experience - Reservation details</a></li>
                        <li><a href="dashboard-experience-reservation-available-host.php">Experience - Reservation available</a></li>
                        <li><a href="dashboard-experience-reservation-booked-host.php">Experience - Reservation booked</a></li>
                        <li><a href="dashboard-experience-reservation-cancelled-host.php">Experience - Reservation cancelled</a></li>
                        <li><a href="dashboard-experience-reservation-declined-host.php">Experience - Reservation declined</a></li>
                    </ul>
                </li>
            </ul>
        </li>      
    </ul>

    <hr id="host-dashboard" class="divider">

    <h2><a href="dashboard-host.php">Host dashboard</a></h2>    
    <ul>    
        <li><strong>Listings</strong>
            <ul>
                <li><a href="dashboard-listings.php">All listings</a></li>
                <li><a href="dashboard-listings-empty.php">All listings (empty)</a></li>
                <li><a href="dashboard-add-new-listing.php">Add new listing</a></li>
                <li><a href="dashboard-add-new-listing-submitted.php">Listing submitted</a></li>
                <li><a href="dashboard-edit-listing.php">Edit a listing</a></li>
                <li><a href="dashboard-upgrade-to-featured.php">Upgrade to featured</a></li>
            </ul>
        </li>
        <li><strong>Experiences</strong>
            <ul>
                <li><a href="dashboard-experiences.php">All experiences</a></li>
                <li><a href="dashboard-add-new-experience.php">Add new experience</a></li>
                <li><a href="dashboard-add-new-experience-submitted.php">Experience submitted</a></li>
                <li><a href="dashboard-edit-experience.php">Edit experience</a></li>
            </ul>
        </li>
        <li><strong>Favorites</strong>
            <ul>
                <li><a href="dashboard-favorites.php">Favorite listings</a></li>
                <li><a href="dashboard-favorites-empty.php">Favorite listings (empty)</a></li>
            </ul>
        </li>
        <li><strong>Messages</strong>
            <ul>
                <li><a href="dashboard-messages.php">All Messages</a></li>
                <li><a href="dashboard-messages-empty.php">All Messages (empty)</a></li>
                <li><a href="dashboard-messages-detail.php">Message detail</a></li>
            </ul>
        </li>
        <li><strong>Reservations</strong>
            <ul>
                <li><strong>Listings</strong>
                    <ul>
                        <li><a href="dashboard-reservations-host.php">Reservations</a></li>
                        <li><a href="dashboard-reservation-empty.php">Reservations (empty)</a></li>
                        <li><a href="dashboard-reservation-details-host.php">Reservation details</a></li>
                        <li><a href="dashboard-reservation-available-host.php">Reservation available</a></li>
                        <li><a href="dashboard-reservation-booked-host.php">Reservation booked</a></li>
                        <li><a href="dashboard-reservation-cancelled-host.php">Reservation cancelled</a></li>
                        <li><a href="dashboard-reservation-declined-host.php">Reservation declined</a></li>
                    </ul>
                </li>
                <li><strong>Experiences</strong>
                    <ul>
                        <li><a href="dashboard-reservations-experiences-host.php">All Reservations</a></li>
                        <li><a href="dashboard-experience-reservation-details-host.php">Reservation details</a></li>
                        <li><a href="dashboard-experience-reservation-available-host.php">Reservation available</a></li>
                        <li><a href="dashboard-experience-reservation-booked-host.php">Reservation booked</a></li>
                        <li><a href="dashboard-experience-reservation-cancelled-host.php">Reservation cancelled</a></li>
                        <li><a href="dashboard-experience-reservation-declined-host.php">Reservation declined</a></li>
                    </ul>
                </li>
            </ul>
        </li>        
        <li><strong>Profile</strong>
            <ul>
                <li><a href="dashboard-profile-host.php">Profile</a></li>
                <li><a href="dashboard-profile-host-verification.php">Profile verification</a></li>
                <li><a href="dashboard-profile-host-password.php">Change password</a></li>
            </ul>
        </li>
        <li><strong>Invoices</strong>
            <ul>
                <li><a href="dashboard-invoices.php">All invoices</a></li>
                <li><a href="dashboard-invoice-detail.php">Invoice detail</a></li>
            </ul>
        </li>
        <li><strong>Wallet</strong>
            <ul>
                <li><a href="dashboard-wallet.php">Wallet Homepage</a></li>
                <li><a href="dashboard-wallet-setup.php">Wallet setup</a></li>
                <li><a href="dashboard-wallet-earnings.php">Earnings</a></li>
                <li><a href="dashboard-wallet-earnings-detail.php">Earnings detail</a></li>
                <li><a href="dashboard-request-payout.php">Request Payout</a></li>
                <li><a href="dashboard-withdraw-history.php">Payout history</a></li>
            </ul>
        </li>
    </ul>

    <hr id="guest-dashboard" class="divider">

    <h2><a href="dashboard-user.php">Guest dashboard</a></h2>
    <ul>
        <li><strong>Profile</strong>
            <ul>
                <li><a href="dashboard-profile-guest.php">Profile</a></li>
                <li><a href="dashboard-profile-guest-verification.php">Profile verification</a></li>
                <li><a href="dashboard-profile-guest-password.php">Change password</a></li>
            </ul>
        </li>

        <li><strong>Reservations</strong>
            <ul>
                <li><strong>Listings</strong>
                    <ul>
                        <li><a href="dashboard-reservations-user.php">Reservations</a></li>
                        <li><a href="dashboard-reservation-details-user.php">Reservation details</a></li>
                        <li><a href="dashboard-reservation-details-user.php">Reservation details</a></li>
                        <li><a href="dashboard-reservation-available-user.php">Reservation available</a></li>
                        <li><a href="dashboard-reservation-booked-user.php">Reservation booked</a></li>
                        <li><a href="dashboard-reservation-declined-user.php">Reservation declined</a></li>
                        <li><a href="dashboard-reservation-payment-user.php">Reservation payment user</a></li>
                    </ul>
                </li>
                <li><strong>Experiences</strong>
                    <ul>

                    </ul>
                </li>
            </ul>
        </li>
    </ul>

    <hr class="divider">

    <h2>Navigation menu</h2>
    <ul>
        <li><a href="header-1-boxed.php">Header 1 Boxed</a></li>
        <li><a href="header-1-fullwidth.php">Header 1 full width</a></li>
        <li><a href="header-1-boxed-left-nav-with-login.php">header-1-boxed-left-nav-with-login.php</a></li>
        
        <li><a href="header-1-boxed-hourly-search.php">header-1-boxed-hourly-search.php</a></li>
        
        <li><a href="header-2-boxed.php">header-2-boxed.php</a></li>
        <li><a href="header-2-boxed-fullwidth.php">header-2-boxed-fullwidth.php</a></li>
        <li><a href="header-3-boxed.php">header-3-boxed.php</a></li>
        <li><a href="header-3-boxed-fullwidth.php">header-3-boxed-fullwidth.php</a></li>
        <li><a href="header-4-boxed.php">header-4-boxed.php</a></li>
        <li><a href="header-4-boxed-fullwidth.php">header-4-boxed-fullwidth.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Searches</h2>

    <h2>Nightly search</h2>
    <ul>
        <li><a href="header-with-side-search.php">Side search</a></li>
    </ul>
    
    <h2>Hourly search</h2>
    
    <ul>
        <li><a href="header-1-boxed-hourly-search.php">Header hourly search</a></li>
        <li><a href="header-with-side-mixed-search.php">Side mixed search</a></li>
    </ul>

    <h2>Experiences search</h2>
    <ul>
        <li><a href="header-search-experiences.php">header-search-experiences.php</a></li>
    </ul>

    <h2>Mixed search</h2>
    <ul>
        <li><a href="header-1-boxed-mixed-search.php">Header mixed search</a></li>
        <li><a href="header-with-parallax-mixed-search.php">Parallax header mixed search</a></li>
        <li><a href="header-with-side-mixed-search.php">Side mixed search</a></li>
        <li><a href="header-half-mixed-search.php">Half mixed search</a></li>
    </ul>

    <hr class="divider">

    <h2>Recidencial headers</h2>
    <ul>
        <li><a href="header-with-map.php">header-with-map.php</a></li>
        <li><a href="header-with-map-fullscreen.php">header-with-map-fullscreen.php</a></li>
        <li><a href="header-with-slider.php">header-with-slider.php</a></li>
        <li><a href="header-with-slider-fullscreen.php">header-with-slider-fullscreen.php.php</a></li>
        <li><a href="header-with-slider-fullscreen-transparent-header.php">header-with-slider-fullscreen-transparent-header.php</a></li>
        <li><a href="header-with-video-fullscreen-transparent-header.php">header-with-video-fullscreen-transparent-header.php</a></li>
        <li><a href="header-with-video-fullscreen.php">header-with-video-fullscreen.php</a></li>
        <li><a href="header-with-video.php">header-with-video.php</a></li>
    </ul>
    <h2>Listings banner search</h2>
    <ul>
        <li><a href="header-with-parallax.php">header-with-parallax.php</a></li>
        <li><a href="header-with-parallax-fullscreen.php">header-with-parallax-fullscreen.php</a></li>
        <li><a href="header-with-parallax-fullscreen-transparent-header.php">header-with-parallax-fullscreen-transparent-header.php</a></li>
        <li><a href="header-transparent.php">header-transparent.php</a></li>
        <li><a href="header-with-side-search.php">header-with-side-search.php</a></li>
        <li><a href="header-with-side-search-fullscreen.php">header-with-side-search-fullscreen.php</a></li>
        <li><a href="header-with-parallax-hourly-search.php">header-with-parallax-hourly-search.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Experiences banner search</h2>
    <ul>
        <li><a href="header-with-parallax-experiences.php">header-with-parallax-experiences.php</a></li>
        <li><a href="header-with-parallax-fullscreen-experiences.php">header-with-parallax-fullscreen-experiences.php</a></li>
        <li><a href="header-with-parallax-fullscreen-transparent-header-experiences.php">header-with-parallax-fullscreen-transparent-header-experiences.php</a></li>
        <li><a href="header-with-side-search-experiences.php">header-with-side-search-experiences.php</a></li>
        <li><a href="header-with-parallax-mixed-search-experiences.php">header-with-parallax-mixed-search-experiences.php</a></li>
        <li><a href="header-with-side-mixed-search-experiences.php">header-with-side-mixed-search-experiences.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Host profile</h2>
    <ul>
        <li><a href="host-profile-frontend.php">host-profile-frontend.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Instant bookiing</h2>
    <ul>
        <li><a href="instant-booking-payment-page-step-1.php">instant-booking-payment-page-step-1.php</a></li>
        <li><a href="instant-booking-payment-page-step-2.php">instant-booking-payment-page-step-2.php</a></li>
        <li><a href="instant-booking-payment-page-step-3.php">instant-booking-payment-page-step-3.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Residencial listing</h2>
    <ul>
        <li><a href="listing-autoload.php">listing-autoload.php</a></li>
        <li><a href="listing-full-width-card.php">listing-full-width-card.php</a></li>
        <li><a href="listing-full-width-grid.php">listing-full-width-grid.php</a></li>
        <li><a href="listing-full-width-list.php">listing-full-width-list.php</a></li>
        <li><a href="listing-loadmore.php">listing-loadmore.php</a></li>
        <li><a href="listing-with-left-sidebar-card.php">listing-with-left-sidebar-card.php</a></li>
        <li><a href="listing-with-left-sidebar-grid.php">listing-with-left-sidebar-grid.php</a></li>
        <li><a href="listing-with-left-sidebar-list.php">listing-with-left-sidebar-list.php</a></li>
        <li><a href="listing-with-right-sidebar-card.php">listing-with-right-sidebar-card.php</a></li>
        <li><a href="listing-with-right-sidebar-grid.php">listing-with-right-sidebar-grid.php</a></li>
        <li><a href="listing-with-right-sidebar-list.php">listing-with-right-sidebar-list.php</a></li>
        <li><a href="listing-with-sticky-map-list.php">listing-with-sticky-map-list.php</a></li>
        <li><a href="half-map-listing-map-on-left.php">half-map-listing-map-on-left.php</a></li>
        <li><a href="half-map-listing-map-on-right.php">half-map-listing-map-on-right.php</a></li>
        <li><a href="listing-with-compare-property.php">listing-with-compare-property.php</a></li>
        <li><a href="compare-listings.php">compare-listings.php</a></li>
    </ul>

    <h2>Experiences listing</h2>
    <ul>
        <li><a href="experiences-listing-autoload.php">experiences-listing-autoload.php</a></li>
        <li><a href="experiences-listing-full-width-card.php">experiences-listing-full-width-card.php</a></li>
        <li><a href="experiences-listing-full-width-grid.php">experiences-listing-full-width-grid.php</a></li>
        <li><a href="experiences-listing-full-width-list.php">experiences-listing-full-width-list.php</a></li>
        <li><a href="experiences-listing-loadmore.php">experiences-listing-loadmore.php</a></li>
        <li><a href="experiences-listing-with-left-sidebar-card.php">experiences-listing-with-left-sidebar-card.php</a></li>
        <li><a href="experiences-listing-with-left-sidebar-grid.php">experiences-listing-with-left-sidebar-grid.php</a></li>
        <li><a href="experiences-listing-with-left-sidebar-list.php">experiences-listing-with-left-sidebar-list.php</a></li>
        <li><a href="experiences-listing-with-right-sidebar-card.php">experiences-listing-with-right-sidebar-card.php</a></li>
        <li><a href="experiences-listing-with-right-sidebar-grid.php">experiences-listing-with-right-sidebar-grid.php</a></li>
        <li><a href="experiences-listing-with-right-sidebar-list.php">experiences-listing-with-right-sidebar-list.php</a></li>
        <li><a href="experiences-listing-with-sticky-map-list.php">experiences-listing-with-sticky-map-list.php</a></li>
        <li><a href="experiences-half-map-listing-map-on-left.php">experiences-half-map-listing-map-on-left.php</a></li>
        <li><a href="experiences-half-map-listing-map-on-right.php">experiences-half-map-listing-map-on-right.php</a></li>
        <li><a href="experiences-listing-with-compare-property.php">experiences-listing-with-compare-property.php</a></li>
        <li><a href="experiences-compare-listings.php">experiences-compare-listings.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Commercial listing</h2>
    <ul>
        <li><a href="listing-commercial-full-width-card.php">listing-commercial-full-width-card.php</a></li>
        <li><a href="listing-commercial-full-width-grid.php">listing-commercial-full-width-grid.php</a></li>
        <li><a href="listing-commercial-full-width-list.php">listing-commercial-full-width-list.php</a></li>
        <li><a href="listing-commercial-with-left-sidebar-card.php">listing-commercial-with-left-sidebar-card.php</a></li>
        <li><a href="listing-commercial-with-left-sidebar-grid.php">listing-commercial-with-left-sidebar-grid.php</a></li>
        <li><a href="listing-commercial-with-left-sidebar-list.php">listing-commercial-with-left-sidebar-list.php</a></li>
        <li><a href="listing-commercial-with-right-sidebar-card.php">listing-commercial-with-right-sidebar-card.php</a></li>
        <li><a href="listing-commercial-with-right-sidebar-grid.php">listing-commercial-with-right-sidebar-grid.php</a></li>
        <li><a href="listing-commercial-with-right-sidebar-list.php">listing-commercial-with-right-sidebar-list.php</a></li>
        <li><a href="listing-commercial-with-sticky-map-list.php">listing-commercial-with-sticky-map-list.php</a></li>
        <li><a href="half-map-commercial-listing-map-on-left.php">half-map-commercial-listing-map-on-left.php</a></li>
        <li><a href="half-map-commercial-listing-map-on-right.php">half-map-commercial-listing-map-on-right.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Property detail page</h2>
    <ul>
        <li><a href="property-details-page-v1.php">property-details-page-v1.php</a></li>
        <li><a href="property-details-page-v2.php">property-details-page-v2.php</a></li>
        <li><a href="property-details-page-v3.php">property-details-page-v3.php</a></li>
        <li><a href="property-details-page-v4.php">property-details-page-v4.php</a></li>
        <li><a href="property-details-page-v1-hourly-booking.php">property-details-page-v1-hourly-booking.php</a></li>
        <li><a href="property-details-page-v2-hourly-booking.php">property-details-page-v2-hourly-booking.php</a></li>
        <li><a href="property-details-page-v3-hourly-booking.php">property-details-page-v3-hourly-booking.php</a></li>
        <li><a href="property-details-page-v4-hourly-booking.php">property-details-page-v4-hourly-booking.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Commercial property detail page</h2>
    <ul>
        <li><a href="commercial-property-details-page-v1.php">commercial-property-details-page-v1.php</a></li>
        <li><a href="commercial-property-details-page-v2.php">commercial-property-details-page-v2.php</a></li>
        <li><a href="commercial-property-details-page-v3.php">commercial-property-details-page-v3.php</a></li>
        <li><a href="commercial-property-details-page-v4.php">commercial-property-details-page-v4.php</a></li>
        <li><a href="commercial-property-details-page-v1-hourly-booking.php">commercial-property-details-page-v1-hourly-booking.php</a></li>
        <li><a href="commercial-property-details-page-v2-hourly-booking.php">commercial-property-details-page-v2-hourly-booking.php</a></li>
        <li><a href="commercial-property-details-page-v3-hourly-booking.php">commercial-property-details-page-v3-hourly-booking.php</a></li>
        <li><a href="commercial-property-details-page-v4-hourly-booking.php">commercial-property-details-page-v4-hourly-booking.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Modules</h2>
    <ul>
        <li><a href="vc-modules.php">vc-modules.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Widgets</h2>
    <ul>
        <li><a href="widgets.php">widgets.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Blog</h2>
    <ul>
        <li><a href="blog.php">blog.php</a></li>
        <li><a href="single-post.php">single-post.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Pages</h2>
    <ul>
        <li><a href="page-right-sidebar.php">page-right-sidebar.php</a></li>
        <li><a href="page-left-sidebar.php">page-left-sidebar.php</a></li>
        <li><a href="page-full-width.php">page-full-width.php</a></li>
        <li><a href="404.php">404.php</a></li>
    </ul>

    <hr class="divider">

    <h2>Splash page residencial</h2>
    <ul>
        <li><a href="splash-page-image.php">splash-page-image.php</a></li>
        <li><a href="splash-page-image.php">splash-page-slider.php</a></li>
        <li><a href="splash-page-image.php">splash-page-video.php</a></li>
    </ul>
    
    <hr class="divider">
    
    <h2>Splash page commercial</h2>
    <ul>
        <li><a href="commercial-splash-page-image.php">commercial-splash-page-image.php</a></li>
        <li><a href="commercial-splash-page-image.php">commercial-splash-page-slider.php</a></li>
        <li><a href="commercial-splash-page-image.php">commercial-splash-page-video.php</a></li>
    </ul>

    <?php include 'inc/scripts.php';?>

</body>
</html>