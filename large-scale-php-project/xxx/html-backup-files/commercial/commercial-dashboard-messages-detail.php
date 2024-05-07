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
                            <?php include ('inc/header/login-register-v1.php'); ?>
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
            <h1>Messages</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-without-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    The message has been sent.
                                </div>

                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="homey-icon homey-icon-close"></i></button>
                                    Something went wrong. Please try again.
                                </div>
                                
                                <div class="messages-area-user-info">
                                    <div class="messages-area-user-status">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" class="media-object">
                                                    <img src="img/70x70.png" class="img-circle" width="70" height="70" alt="user Image">
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <div class="msg-user-info">
                                                    <div class="msg-user-left">
                                                        <div><strong>Mike</strong> on <strong>Office for Rent</strong></div>
                                                        <div class="user-status">
                                                            <i class="homey-icon homey-icon-circle text-success" aria-hidden="true"></i> Status: <strong>Online</strong>
                                                        </div>
                                                        <div class="user-status">
                                                            <i class="homey-icon homey-icon-circle text-danger" aria-hidden="true"></i> Status: <strong>Offline</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="messages-area">
                                    <div class="msg-to-agent-block">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" class="media-object">
                                                    <img src="img/70x70.png" class="img-circle" width="70" height="70" alt="user Image">
                                                </a>
                                            </div>
                                            <div class="media-body media-middle">
                                                <div class="msg-user-info">
                                                    <div class="msg-user-left">
                                                        <div><strong>Mike</strong> on <strong>Office for Rent</strong></div>
                                                        <div class="message-date">
                                                            <time datetime="2017-05-15T16:30"><i class="homey-icon homey-icon-calendar-3"></i> May 15, 2017 <i class="homey-icon homey-icon-time-clock-circle"></i> 4:30 pm</time>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="custom-actions">
                                                        <button class="btn-action" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="homey-icon homey-icon-check-circle-1"></i></button>
                                                        <button class="btn-action" data-toggle="tooltip" data-placement="top" title="Report"><i class="homey-icon homey-icon-flag-plain-3-social-medias-rewards-rating"></i></button>
                                                    </div> -->
                                                </div>
                                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ipsum nec elit condimentum luctus. Nam efficitur libero eget orci sagittis luctus. Aliquam erat volutpat. Curabitur luctus maximus molestie. In ultrices velit nec nisl porttitor, in sagittis orci porta. Sed bibendum blandit nulla, ac facilisis lacus scelerisque id. Donec nec augue et tortor viverra dictum id a magna.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="msgs-reply-list">
                                        <div class="media msg-me">
                                            <div class="media-left">
                                                <a href="#" class="media-object">
                                                    <img src="img/50x50.png" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading"> Patricia
                                                    <span class="message-date">
                                                        <span><i class="homey-icon homey-icon-calendar-3"></i> Nov. 18, 2016 </span>
                                                        <span><i class="homey-icon homey-icon-time-clock-circle"></i>  4:30 pm </span>
                                                    </span>
                                                </div>
                                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ipsum nec elit condimentum luctus. Nam efficitur libero eget orci sagittis luctus. Aliquam erat volutpat. Curabitur luctus maximus molestie. In ultrices velit nec nisl porttitor, in sagittis orci porta. Sed bibendum blandit nulla, ac facilisis lacus scelerisque id. Donec nec augue et tortor viverra dictum id a magna.</p>
                                                <p> Thanks, Dave. </p>

                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" class="media-object">
                                                    <img src="img/50x50.png" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Mike
                                                    <span class="message-date">
                                                        <span><i class="homey-icon homey-icon-calendar-3"></i> Nov. 18, 2016 </span>
                                                        <span><i class="homey-icon homey-icon-time-clock-circle"></i>  4:30 pm </span>
                                                    </span>
                                                </h4>
                                                <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut ipsum nec elit condimentum luctus. Nam efficitur libero eget orci sagittis luctus. Aliquam erat volutpat. Curabitur luctus maximus molestie. In ultrices velit nec nisl porttitor, in sagittis orci porta. Sed bibendum blandit nulla, ac facilisis lacus scelerisque id. Donec nec augue et tortor viverra dictum id a magna.</p>
                                                <p> Thanks, Dave. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media msg-send-block">
                                        <div class="media-left">
                                            <div class="media-object">
                                                <img src="img/50x50.png" class="img-circle" alt="User image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Reply</h4>
                                            <form class="form-msg">
                                                <div class="msg-type-block">
                                                    <div class="arrow"></div>
                                                    <textarea class="form-control" placeholder="Type your message here..." rows="5"></textarea>
                                                    <div class="msg-attachment-row">
                                                        
                                                        <div class="msg-attachment">
                                                            <div class="attach-icon">
                                                                <i class="homey-icon homey-icon-attachment-interface-essential"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-msg-btns">
                                                    <button class="btn btn-success">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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