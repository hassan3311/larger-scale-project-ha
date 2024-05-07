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
            <h1>Host Profile</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-admin.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#documents" aria-controls="documents" role="tab" data-toggle="tab">Documents</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="information">
                                        <div class="block">
                                            <div class="block-title">
                                                <div class="block-left">
                                                    <h2 class="title">Profile</h2>
                                                </div>
                                                <div class="block-right">
                                                    <a href="#" class="btn btn-primary btn-slim"><strong>View Profile</strong></a>
                                                </div>
                                            </div>
                                            <div class="block-body">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="profile-image">
                                                            <img class="img-circle" src="img/100x100.png" width="100" height="100" alt="profile image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <ul class="list-unstyled list-lined">
                                                            <li><strong>Name</strong> John Doe</li>
                                                            <li><strong>Email</strong> <a href="mailto:john.doe@email.com">john.doe@email.com</a> <span class="text-success"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span></li>
                                                            <li><strong>ID</strong> <a href="#">View Picture</a> <span class="text-success"><i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Verified</span></li>
                                                            <li><strong>Role</strong> <i class="homey-icon homey-icon-award-badge-1" aria-hidden="true"></i> Super Host</li>
                                                        </ul>
                                                        <ul class="list-unstyled list-lined">
                                                            <li><strong>Address</strong> 7898 Michigan Avenue, Miami Beach, FL 33139</li>
                                                        </ul>

                                                        <ul class="list-unstyled list-lined">
                                                            <li><strong>Native Language</strong> English</li>
                                                            <li><strong>Other Language</strong> Spanish, Italian</li>
                                                        </ul>
                                                        <ul class="list-unstyled mb-0">
                                                            <li><strong>Bio:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat vel quasi reiciendis quo tempora, quibusdam cum adipisci, officia, autem voluptas non molestiae sequi enim ipsam cumque iste. Molestias, inventore, mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat vel quasi reiciendis quo tempora, quibusdam cum adipisci, officia, autem voluptas non molestiae sequi enim ipsam cumque iste. Molestias, inventore, mollitia.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block">
                                            <div class="block-title">
                                                <div class="block-left">
                                                    <h2 class="title">Withdraw Method</h2>
                                                </div>
                                                <div class="block-right">
                                                    <a href="#" class="btn btn-primary btn-slim"><strong>View Earnings</strong></a>
                                                </div>
                                            </div>
                                            <div class="block-body">
                                                <ul class="list-unstyled">
                                                    <li><strong>Method</strong> Wire Transfert</li>
                                                </ul>
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Beneficiary Name</strong> John Doe</li>
                                                    <li><strong>Company Name</strong> My Company LTD</li>
                                                    <li><strong>Tax Identification Number</strong> 9876543210</li>
                                                </ul>
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Address</strong> 7898 Michigan Avenue, Miami Beach, FL 33139</li>
                                                </ul>

                                                <ul class="list-unstyled list-lined mb-0">
                                                    <li><strong>Beneficiary Account Number</strong> 3216459876546</li>
                                                    <li><strong>SWIFT</strong> BAF91238</li>
                                                    <li><strong>Bank Name</strong> Bank Inc.</li>
                                                    <li><strong>Bank Address</strong> 2736 Jefferson Avenue, Miami Beach, FL 33139</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="block">
                                            <div class="block-title">
                                                <h2 class="title">Emergency Contact</h2>
                                            </div>
                                            <div class="block-body">
                                                <ul class="list-unstyled list-lined">
                                                    <li><strong>Contact Name</strong> Patricia Whatson</li>
                                                    <li><strong>Relationship</strong> Wife</li>
                                                </ul>
                                                <ul class="list-unstyled list-lined mb-0">
                                                    <li><strong>Phone Number</strong> +1 (123) 987 8765</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="block">
                                            <div class="block-title">
                                                <h2 class="title">Social Media</h2>
                                            </div>
                                            <div class="block-body">
                                                <ul class="list-unstyled mb-0 list-lined">
                                                    <li><strong>Facebook</strong> <a href="#">View profile</a></li>
                                                    <li><strong>Twitter</strong> <a href="#">View profile</a></li>
                                                    <li><strong>Google Plus</strong> <a href="#">View profile</a></li>
                                                    <li><strong>Instagram</strong> <a href="#">View profile</a></li>
                                                    <li><strong>Pinterest</strong> <a href="#">View profile</a></li>
                                                    <li><strong>Linkedin</strong> <a href="#">View profile</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <div class="host-rating-section">
                                            <div class="block">
                                                <div class="block-title">
                                                    <h2 class="title">Reviews and Ratings</h2>
                                                </div>
                                                <div class="block-body">
                                                    <div class="reviews-section">
                                                        <ul class="list-unstyled">
                                                            <li class="review-block">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <a href="#" class="media-object">
                                                                            <img src="img/guest-avatar-70x70.png" class="img-circle" width="70" height="70" alt="user Image">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body media-middle">
                                                                        <div class="msg-user-info">
                                                                            <div class="msg-user-left">
                                                                                <strong>Mike</strong>
                                                                                <div>
                                                                                    on <a href="#">Apartment With Ocean View</a> 
                                                                                    <span class="rating">
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star"></i>
                                                                                        <span class="label label-success">Fair</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="message-date">
                                                                                    <time datetime="2017-05-15T16:30"><i class="homey-icon homey-icon-calendar-3"></i> May 15, 2017 <i class="homey-icon homey-icon-time-clock-circle"></i> 4:30 pm</time>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ipsum nec elit condimentum luctus. Nam efficitur libero eget orci sagittis luctus. Aliquam erat volutpat. Curabitur luctus maximus molestie. In ultrices velit nec nisl porttitor, in sagittis orci porta. Sed bibendum blandit nulla, ac facilisis lacus scelerisque id. Donec nec augue et tortor viverra dictum id a magna.</p>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li class="review-block">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <a href="#" class="media-object">
                                                                            <img src="img/guest-avatar-70x70.png" class="img-circle" width="70" height="70" alt="user Image">
                                                                        </a>
                                                                    </div>
                                                                    <div class="media-body media-middle">
                                                                        <div class="msg-user-info">
                                                                            <div class="msg-user-left">
                                                                                <strong>Mike</strong>
                                                                                <div>
                                                                                    on <a href="#">Apartment With Ocean View</a> 
                                                                                    <span class="rating">
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star"></i>
                                                                                        <i class="homey-icon homey-icon-rating-star"></i>
                                                                                        <span class="label label-success">Fair</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="message-date">
                                                                                    <time datetime="2017-05-15T16:30"><i class="homey-icon homey-icon-calendar-3"></i> May 15, 2017 <i class="homey-icon homey-icon-time-clock-circle"></i> 4:30 pm</time>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ipsum nec elit condimentum luctus. Nam efficitur libero eget orci sagittis luctus. Aliquam erat volutpat. Curabitur luctus maximus molestie. In ultrices velit nec nisl porttitor, in sagittis orci porta. Sed bibendum blandit nulla, ac facilisis lacus scelerisque id. Donec nec augue et tortor viverra dictum id a magna.</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><!-- reviews-section -->
                                                </div><!-- block-body -->
                                            </div><!-- block -->
                                        </div><!-- host-rating-section -->    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="documents">
                                        <div class="block">
                                            <div class="block-title">
                                                <h2 class="title">Uploaded Documents</h2>
                                            </div>
                                            <div class="block-body">
                                                <img src="img/800x600.png" alt="image" class="img-responsive" width="800" height="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            <aside class="dashboard-sidebar admin-dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-admin-host-user-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>