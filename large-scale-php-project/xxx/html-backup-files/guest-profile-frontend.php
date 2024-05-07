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



    <section class="main-content-area user-profile guest-profile">
        <div class="container">
            <div class="guest-section clearfix">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="block">
                            <div class="block-head">

                                <img src="img/host-avatar-70x70.png" class="img-circle media-object avatar mb-30" alt="Image" width="70" height="70">
                                <h2 class="title"><span>Hi, I'm</span> Patricia Wilson</h2>
                                <address class="mb-30"><i class="homey-icon homey-icon-style-two-pin-marker" aria-hidden="true"></i> Miami Beach, FL</address>

                                <dl>
                                    <dt class="mb-10">Guest Rating</dt>
                                    <dd>
                                        <div class="rating">
                                            <i class="homey-icon homey-icon-rating-star"></i><span class="star-text-right">4.96 - <a href="#">24 Reviews</a></span>
                                        </div>
                                    </dd>
                                </dl>

                                <dl class="mb-30">
                                    <dt class="mb-10">Profile Status</dt>
                                    <dd class="text-success"><i class="homey-icon homey-icon-check-circle-1"></i> Verified</dd>
                                </dl> 

                                <dl class="mb-0">
                                    <dt class="mb-10">Patricia provided</dt>
                                    <dd>Government ID</dd>
                                    <dd>Email address</dd>
                                    <dd>Phone number</dd>
                                </dl> 

                            </div><!-- block-head -->
                        </div><!-- block -->
                    </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">    

                        <div class="block">
                            <div class="block-body">
                                <h3 class="mb-0">No Reviews</h3>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-body">
                                <h3>4 Reviews</h3>
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
                            </div><!-- block-body -->
                        </div><!-- block -->
                        
                        <?php include('inc/listing/pagination.php'); ?>
                        
                    </div><!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
                </div>
            </div><!-- guest-section -->
            
            

        </div>
    </div>
</section><!-- main-content-area -->
<?php include('inc/booking/overlay-booking-module.php'); ?>
<?php include ('inc/footer.php'); ?>
<?php include ('inc/scripts.php'); ?>
</body>
</html>