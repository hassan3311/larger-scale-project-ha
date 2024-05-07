<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('inc/head.php'); ?>
</head>
<body>
    <div class="nav-area header-type-1">
        <!-- desktop nav -->
        <header class="header-nav hidden-sm hidden-xs">
            <div class="container">
                <div class="header-inner table-block">
                    <div class="header-comp-logo">
                        <?php include ('inc/header/logo.php'); ?>
                    </div><!-- header-comp-logo -->
                    <div class="header-comp-nav text-left">
                        <?php include ('inc/header/main-nav.php'); ?>
                    </div><!-- header-comp-nav -->
                    <div class="header-comp-right">
                        <?php include ('inc/header/login-register-v1.php'); ?>
                    </div><!-- header-comp-right -->
                </div><!-- header-inner -->
            </div><!-- container -->
        </header><!-- header-nav hidden-sm hidden-xs -->
        <!-- mobile header -->
        <?php include ('inc/header/header-mobile.php'); ?>
    </div><!-- .nav-area -->



    <section class="main-content-area user-profile host-profile">
        <div class="container">
            <div class="host-section clearfix">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="block">
                            <div class="block-head">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/host-avatar-70x70.png" class="img-circle media-object avatar" alt="Image" width="70" height="70">
                                    </div>
                                    <div class="media-body">
                                        <h2 class="title"><span>Hi, I'm</span> Patricia Wilson</h2>
                                        <address><i class="homey-icon homey-icon-style-two-pin-marker" aria-hidden="true"></i> Miami Beach, FL</address>
                                        <a href="#" class="edit-link">Edit <i class="homey-icon homey-icon-qpencil-interface-essential" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div><!-- block-head -->
                            <div class="block-body">

                                <p>Bio. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut consectetuer adipist ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliqui.</p>

                                <div class="profile-social-icons">
                                    Follow me: 
                                    <a href="#" class="btn-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
                                    <a href="#" class="btn-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
                                    <a href="#" class="btn-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
                                    <a href="#" class="btn-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
                                    <a href="#" class="btn-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
                                    <a href="#" class="btn-linkedin"><i class="homey-icon homey-icon-professional-network-linkedin"></i></a>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <dl>
                                            <dt>Languages</dt>
                                            <dd>English, Español</dd>
                                        </dl>    
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <dl>
                                            <dt>Profile Status</dt>
                                            <dd class="text-success"><i class="homey-icon homey-icon-check-circle-1"></i> Verified</dd>
                                        </dl>    
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <dl>
                                            <dt>Host Rating</dt>
                                            <dd>
                                                <div class="rating">
                                                    <i class="homey-icon homey-icon-rating-star"></i><span class="star-text-right">4.96 - <a href="#">24 Reviews</a></span>
                                                </div>
                                            </dd>
                                        </dl>    
                                    </div>
                                </div>

                                
                            </div><!-- block-body -->
                        </div><!-- block -->

                    </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="host-contact-form">
                            <div class="block">
                                <div class="block-body">
                                    <h3 class="title mb-20">Contact me</h3>
                                    <div class="review-form-block">
                                        <form class="form-msg">
                                            <div class="form-group">
                                                <!-- <label>Your name</label> -->
                                                <input type="text" class="form-control" placeholder="Enter your name">
                                            </div>
                                            <div class="form-group">
                                                <!-- <label>Email address</label> -->
                                                <input type="email" class="form-control" placeholder="Enter your email">
                                            </div>
                                            <div class="form-group">
                                                <!-- <label>Message</label> -->
                                                <textarea class="form-control" placeholder="Type your message" rows="5"></textarea>
                                            </div>
                                            <button class="btn btn-primary btn-full-width">Send Message</button>
                                        </form>
                                    </div>
                                </div><!-- block-body -->
                            </div>
                        </div>
                    </div><!-- col-xs-12 col-sm-12 col-md-4 col-lg-4 -->
                </div>
            </div><!-- host-section -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">    
                    <div class="host-profile-tabs">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#listings" aria-controls="listings" role="tab" data-toggle="tab">Listings</a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                            <li role="presentation"><a href="#posts" aria-controls="posts" role="tab" data-toggle="tab">Posts</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="listings">
                                <div class="host-property-section">
                                    <div class="listing-wrap host-listing-wrap">
                                        <div class="item-row item-list-view">
                                            <?php include ('inc/listing/item-list.php'); ?>
                                            <?php include ('inc/listing/item-list.php'); ?>
                                            <?php include ('inc/listing/item-list.php'); ?>
                                            <?php include ('inc/listing/item-list.php'); ?>
                                        </div>
                                    </div>
                                </div><!-- host-property-section -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="host-rating-section">
                                    <div class="block">
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
                                                                        <div>
                                                                            <strong>Mike</strong> 
                                                                            <span class="rating">
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star"></i>
                                                                                <i class="homey-icon homey-icon-rating-star"></i>
                                                                                <span class="label label-success">Excellent</span>
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
                                                                        <div>
                                                                            <strong>Mike</strong> 
                                                                            <span class="rating">
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star-full"></i>
                                                                                <i class="homey-icon homey-icon-rating-star"></i>
                                                                                <i class="homey-icon homey-icon-rating-star"></i>
                                                                                <span class="label label-success">Excellent</span>
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
                            <div role="tabpanel" class="tab-pane fade" id="posts">
                                <div class="block">
                                    <div class="block-body">
                                        <?php include ('inc/blog/related-posts.php'); ?>
                                        <?php include ('inc/blog/related-posts.php'); ?>
                                        <?php include ('inc/blog/related-posts.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- host-profile-tabs -->
                </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div>
        </div>
    </div>
</section><!-- main-content-area -->
<?php include('inc/booking/overlay-booking-module.php'); ?>
<?php include ('inc/footer.php'); ?>
<?php include ('inc/scripts.php'); ?>
</body>
</html>