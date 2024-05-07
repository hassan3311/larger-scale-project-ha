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
        <?php include ('inc/header/header-mobile.php'); ?>
    </div>

    <section class="main-content-area listing-page listing-page-full-width">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    
                    <div class="page-wrap">
                        <div class="reset-password">
                            <h1 class="page-title">Reset Password</h1>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Type the password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-full-width">Reset Password</button>
                        </div>   
                    </div>

                </div><!-- col-xs-12 col-sm-12 col-md-8 col-lg-8 -->
            </div><!-- .row -->
        </div>   <!-- .container -->
        
        
    </section><!-- main-content-area listing-page grid-listing-page -->
    <?php include ('inc/scripts.php'); ?>
    <?php include ('inc/footer.php'); ?>
</body>
</html>