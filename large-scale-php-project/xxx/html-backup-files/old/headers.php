<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
    <h1 class="text-center">Nav 1 boxed</h1>
    <?php include ('header-1-boxed.php'); ?>

    <h1 class="text-center">Nav 1 fullwidth</h1>
    <?php include ('header-1-fullwidth.php'); ?>

    <h1 class="text-center">Nav 2 boxed</h1>
    <?php include ('header-2-boxed.php'); ?>

    <h1 class="text-center">Nav 2 fullwidth</h1>
    <?php include ('header-2-fullwidth.php'); ?>

    <hr>

    <div class="nav-area header-type-1">
        <header class="header-nav">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <h1><a href="#"><img src="img/logo.png" class="media-object" alt="Logo" width="128" height="30"></a></h1>
                    </div>
                    <div class="header-comp-nav">
                        <nav class="navi">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Dropdown 1</a></li>
                                        <li><a href="#">Dropdown 2</a></li>
                                        <li><a href="#">Dropdown 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dropdown 1</a></li>
                                                <li><a href="#">Dropdown 2</a></li>
                                                <li><a href="#">Dropdown 3</a></li>
                                                <li><a href="#">Dropdown 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown 4</a></li>
                                    </ul>
                                </li>
                                <li class="homey-megamenu"><a href="#">Megamenu</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Column 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="agent-list.php">All Agents</a></li>
                                                <li><a href="agent-detail.php">Agent Profile</a></li>
                                                <li><a href="agency-list.php">All Agencies</a></li>
                                                <li><a href="company-profile.php">Company Profile</a></li>
                                                <li><a href="compare-properties.php">Compare Properties</a></li>
                                                <li><a href="landing-page.php">Landing Page</a></li>
                                                <li><a href="map-full-search.php">Map Full Screen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.php">About Houzez</a></li>
                                                <li><a href="contact-us.php">Contact us</a></li>
                                                <li><a href="login.php">Login Page</a></li>
                                                <li><a href="register.php">Register Page</a></li>
                                                <li><a href="forget-password.php">Forget Password Page</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="faqs.php">FAQs</a></li>
                                                <li><a href="simple-page.php">Simple Page</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="headers.php">Houzez Headers</a></li>
                                                <li><a href="footer.php">Houzez Footers</a></li>
                                                <li><a href="widgets.php">Houzez Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 4</a>
                                            <ul class="sub-menu">
                                                <li><a href="search-bars.php">Houzez Search Bars</a></li>
                                                <li><a href="add-new-property.php">Create Listing Page</a></li>
                                                <li><a href="listing-select-package.php">Select Packages Page</a></li>
                                                <li><a href="listing-payment.php">Payment Page</a></li>
                                                <li><a href="listing-done.php">Listing Done Page</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 5</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-detail.php">Blog detail</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="my-properties.php">My Properties</a></li>
                                                <li><a href="my-favourite-properties.php">My Favourite Properties</a></li>
                                                <li><a href="my-saved-search.php">My Saved Searches</a></li>
                                                <li><a href="my-invoices.php">My Invoices</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
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
        <hr>
        <header class="header-nav">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <h1><a href="#"><img src="img/logo.png" class="media-object" alt="Logo" width="128" height="30"></a></h1>
                    </div>
                    <div class="header-comp-nav text-center">
                        <nav class="navi">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Dropdown 1</a></li>
                                        <li><a href="#">Dropdown 2</a></li>
                                        <li><a href="#">Dropdown 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dropdown 1</a></li>
                                                <li><a href="#">Dropdown 2</a></li>
                                                <li><a href="#">Dropdown 3</a></li>
                                                <li><a href="#">Dropdown 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown 4</a></li>
                                    </ul>
                                </li>
                                <li class="homey-megamenu"><a href="#">Megamenu</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Column 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="agent-list.php">All Agents</a></li>
                                                <li><a href="agent-detail.php">Agent Profile</a></li>
                                                <li><a href="agency-list.php">All Agencies</a></li>
                                                <li><a href="company-profile.php">Company Profile</a></li>
                                                <li><a href="compare-properties.php">Compare Properties</a></li>
                                                <li><a href="landing-page.php">Landing Page</a></li>
                                                <li><a href="map-full-search.php">Map Full Screen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.php">About Houzez</a></li>
                                                <li><a href="contact-us.php">Contact us</a></li>
                                                <li><a href="login.php">Login Page</a></li>
                                                <li><a href="register.php">Register Page</a></li>
                                                <li><a href="forget-password.php">Forget Password Page</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="faqs.php">FAQs</a></li>
                                                <li><a href="simple-page.php">Simple Page</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="headers.php">Houzez Headers</a></li>
                                                <li><a href="footer.php">Houzez Footers</a></li>
                                                <li><a href="widgets.php">Houzez Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 4</a>
                                            <ul class="sub-menu">
                                                <li><a href="search-bars.php">Houzez Search Bars</a></li>
                                                <li><a href="add-new-property.php">Create Listing Page</a></li>
                                                <li><a href="listing-select-package.php">Select Packages Page</a></li>
                                                <li><a href="listing-payment.php">Payment Page</a></li>
                                                <li><a href="listing-done.php">Listing Done Page</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 5</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-detail.php">Blog detail</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="my-properties.php">My Properties</a></li>
                                                <li><a href="my-favourite-properties.php">My Favourite Properties</a></li>
                                                <li><a href="my-saved-search.php">My Saved Searches</a></li>
                                                <li><a href="my-invoices.php">My Invoices</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-comp-right">
                        <div class="account-login">
                            <p class="login-register"><a href="#">Login</a> <i class="homey-icon homey-icon-circle"></i> <a href="#">Register</a></p>
                            <a href="#" class="btn btn-primary"> Become a Host </a>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <hr>
        <header class="header-nav">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <h1><a href="#"><img src="img/logo.png" class="media-object" alt="Logo" width="128" height="30"></a></h1>
                    </div>
                    <div class="header-comp-nav text-right">
                        <nav class="navi">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Dropdown 1</a></li>
                                        <li><a href="#">Dropdown 2</a></li>
                                        <li><a href="#">Dropdown 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dropdown 1</a></li>
                                                <li><a href="#">Dropdown 2</a></li>
                                                <li><a href="#">Dropdown 3</a></li>
                                                <li><a href="#">Dropdown 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown 4</a></li>
                                    </ul>
                                </li>
                                <li class="homey-megamenu"><a href="#">Megamenu</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Column 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="agent-list.php">All Agents</a></li>
                                                <li><a href="agent-detail.php">Agent Profile</a></li>
                                                <li><a href="agency-list.php">All Agencies</a></li>
                                                <li><a href="company-profile.php">Company Profile</a></li>
                                                <li><a href="compare-properties.php">Compare Properties</a></li>
                                                <li><a href="landing-page.php">Landing Page</a></li>
                                                <li><a href="map-full-search.php">Map Full Screen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.php">About Houzez</a></li>
                                                <li><a href="contact-us.php">Contact us</a></li>
                                                <li><a href="login.php">Login Page</a></li>
                                                <li><a href="register.php">Register Page</a></li>
                                                <li><a href="forget-password.php">Forget Password Page</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="faqs.php">FAQs</a></li>
                                                <li><a href="simple-page.php">Simple Page</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="headers.php">Houzez Headers</a></li>
                                                <li><a href="footer.php">Houzez Footers</a></li>
                                                <li><a href="widgets.php">Houzez Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 4</a>
                                            <ul class="sub-menu">
                                                <li><a href="search-bars.php">Houzez Search Bars</a></li>
                                                <li><a href="add-new-property.php">Create Listing Page</a></li>
                                                <li><a href="listing-select-package.php">Select Packages Page</a></li>
                                                <li><a href="listing-payment.php">Payment Page</a></li>
                                                <li><a href="listing-done.php">Listing Done Page</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 5</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-detail.php">Blog detail</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="my-properties.php">My Properties</a></li>
                                                <li><a href="my-favourite-properties.php">My Favourite Properties</a></li>
                                                <li><a href="my-saved-search.php">My Saved Searches</a></li>
                                                <li><a href="my-invoices.php">My Invoices</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <hr>
        <header class="header-nav">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <h1><a href="#"><img src="img/logo.png" class="media-object" alt="Logo" width="128" height="30"></a></h1>
                    </div>
                    <div class="header-comp-nav">
                        <nav class="navi">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Dropdown 1</a></li>
                                        <li><a href="#">Dropdown 2</a></li>
                                        <li><a href="#">Dropdown 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Dropdown 1</a></li>
                                                <li><a href="#">Dropdown 2</a></li>
                                                <li><a href="#">Dropdown 3</a></li>
                                                <li><a href="#">Dropdown 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Dropdown 4</a></li>
                                    </ul>
                                </li>
                                <li class="homey-megamenu"><a href="#">Megamenu</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Column 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="agent-list.php">All Agents</a></li>
                                                <li><a href="agent-detail.php">Agent Profile</a></li>
                                                <li><a href="agency-list.php">All Agencies</a></li>
                                                <li><a href="company-profile.php">Company Profile</a></li>
                                                <li><a href="compare-properties.php">Compare Properties</a></li>
                                                <li><a href="landing-page.php">Landing Page</a></li>
                                                <li><a href="map-full-search.php">Map Full Screen</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.php">About Houzez</a></li>
                                                <li><a href="contact-us.php">Contact us</a></li>
                                                <li><a href="login.php">Login Page</a></li>
                                                <li><a href="register.php">Register Page</a></li>
                                                <li><a href="forget-password.php">Forget Password Page</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="faqs.php">FAQs</a></li>
                                                <li><a href="simple-page.php">Simple Page</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="headers.php">Houzez Headers</a></li>
                                                <li><a href="footer.php">Houzez Footers</a></li>
                                                <li><a href="widgets.php">Houzez Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 4</a>
                                            <ul class="sub-menu">
                                                <li><a href="search-bars.php">Houzez Search Bars</a></li>
                                                <li><a href="add-new-property.php">Create Listing Page</a></li>
                                                <li><a href="listing-select-package.php">Select Packages Page</a></li>
                                                <li><a href="listing-payment.php">Payment Page</a></li>
                                                <li><a href="listing-done.php">Listing Done Page</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Column 5</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-detail.php">Blog detail</a></li>
                                                <li><a href="my-account.php">My Account</a></li>
                                                <li><a href="my-properties.php">My Properties</a></li>
                                                <li><a href="my-favourite-properties.php">My Favourite Properties</a></li>
                                                <li><a href="my-saved-search.php">My Saved Searches</a></li>
                                                <li><a href="my-invoices.php">My Invoices</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-comp-right">
                        <div class="social-icons social-round">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <hr>
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="crncy-lang-block">
                            <li>
                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="crn-dropdown">Currency <i class="homey-icon homey-icon-arrow-down-1"></i></span>
                                <ul class="dropdown-menu" aria-labelledby="crn-dropdown">
                                    <li>Dollars (USD)</li>
                                    <li>Euro (EU)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="lang-dropdown">Language <i class="homey-icon homey-icon-arrow-down-1"></i></span>
                                <ul class="dropdown-menu" aria-labelledby="lang-dropdown">
                                    <li> English <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li> Spanish <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li> Italian <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <div class="social-icons">
                            <a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                            <a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                            <a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                            <a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                            <a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                            <a href="#" class="btn-bg-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                            <a href="#" class="btn-bg-rss"><i class="homey-icon homey-icon-rss-feed-interface-essential"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <div class="navi top-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dropdown</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#">Menu item</a></li>
                                        <li><a href="#">Menu item</a></li>
                                        <li><a href="#">Menu item</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="top-bar-right">
                        <ul class="crncy-lang-block">
                            <li>
                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="crn-dropdown2">Currency <i class="homey-icon homey-icon-arrow-down-1"></i></span>
                                <ul class="dropdown-menu" aria-labelledby="crn-dropdown2">
                                    <li>Dollars (USD)</li>
                                    <li>Euro (EU)</li>
                                </ul>
                            </li>
                            <li>
                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button" id="lang-dropdown2">Language <i class="homey-icon homey-icon-arrow-down-1"></i></span>
                                <ul class="dropdown-menu" aria-labelledby="lang-dropdown2">
                                    <li> English <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li> Spanish <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                    <li> Italian <img src="img/lang-image.png" class="flag-img" alt="img"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="header-top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="top-contact-address">
                            <li><i class="homey-icon homey-icon-style-two-pin-marker"></i> 1611 West Ave. Miami Beach FL 33139 </li>
                            <li><i class="homey-icon homey-icon-time-clock-circle"></i> 9:00 to 6:00 Mon to Fri </li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="top-contact-address">
                            <li><i class="homey-icon homey-icon-phone-circle"></i> Call us (800) 888 8686 </li>
                            <li><a href="#"><i class="homey-icon homey-icon-unread-emails"></i> Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <!--Start Scripts-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>