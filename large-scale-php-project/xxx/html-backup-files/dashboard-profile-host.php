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
            <h1>Profile</h1>
        </div><!-- .dashboard-page-title -->

        <?php include 'inc/dashboard/dashboard-side-menu-host.php';?>

        <div class="user-dashboard-right dashboard-with-sidebar">
            <div class="dashboard-content-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="dashboard-area">
                                <?php include 'inc/dashboard/dashboard-profile-progress-block.php';?>
                                
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Photo</h2>
                                        </div>
                                        <div class="block-right">
                                            <a href="#"><strong>View Profile</strong></a>
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
                                                <p class="profile-image-note"><strong>Choose an image from your computer</strong><br>
                                                Minimum size 100 x 100 px</p>
                                                <button type="button" class="btn btn-primary btn-xs-full-width">Browse</button>
                                                <button type="button" class="btn btn-grey-outlined btn-xs-full-width">Delete</button>    
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Information</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="first-name">First name</label>
                                                    <input type="text" id="first-name" class="form-control" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last-name">Last Name</label>
                                                    <input type="text" id="last-name" class="form-control" placeholder="Enter last name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="native-language">Native Language</label>
                                                    <select name="native-language" class="selectpicker" id="native-language" data-live-search="false" title="Languages">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="other-language">Other Language</label>
                                                    <input type="text" id="other-language" class="form-control" placeholder="Other languages">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="bio">Bio</label>
                                                    <textarea id="bio" class="form-control" placeholder="Bio" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- block -->

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Address</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label for="street-address">Street Address</label>
                                                    <input type="text" id="street-address" class="form-control" placeholder="Enter street address">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="apt-suit"> Apt, Suite </label>
                                                    <input type="text" id="apt-suit" class="form-control" placeholder=" Ex. #123 ">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" id="city" class="form-control" placeholder="Enter your city">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="state">State</label>
                                                    <input type="text" id="state" class="form-control" placeholder="Enter your state">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip-code">Zip Code</label>
                                                    <input type="text" id="zip-code" class="form-control" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="neighborhood">Neighborhood</label>
                                                    <input type="text" id="neighborhood" class="form-control" placeholder="Neighborhood">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="counter">Country</label>
                                                    <select name="country" class="selectpicker" id="counter" data-live-search="false" title="Select Country">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- block -->
                                
                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Emergency Contact</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Contact Name</label>
                                                        <input type="text" id="contact-name" class="form-control" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="relationship">Relationship</label>
                                                        <select name="country" class="selectpicker" id="relationship" data-live-search="false" title="Please Select">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="country2">Country Code</label>
                                                        <input class="form-control" id="phone-number"  placeholder="Enter country code number ie +01">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="tel" class="form-control" placeholder="Enter the phone number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-right">
                                                    <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- block -->

                                <div class="block">
                                    <div class="block-title">
                                        <div class="block-left">
                                            <h2 class="title">Social Media</h2>
                                        </div>
                                    </div>
                                    <div class="block-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Facebook</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Facebook profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Twitter</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Twitter profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Google Plus</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Google Plus profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Instagram</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Instagram profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Pinterest</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Pinterest profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="contact-name">Linkedin</label>
                                                        <input type="text" class="form-control" placeholder="Enter your Linkedin profile address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-right">
                                                    <button type="submit" class="btn btn-success btn-xs-full-width">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- block -->
                            </div><!-- .dashboard-area -->
                        </div><!-- col-lg-12 col-md-12 col-sm-12 -->
                    </div>
                </div><!-- .container-fluid -->
            </div><!-- .dashboard-content-area -->    
            
            <aside class="dashboard-sidebar">
                <?php include 'inc/dashboard/dashboard-host-profile-widget.php';?>
            </aside><!-- .dashboard-sidebar -->
            
        </div><!-- .user-dashboard-right -->

    </section><!-- #body-area -->

    <?php // include 'inc/dashboard/dashboard-footer.php';?>
    <?php include 'inc/scripts.php';?>

</body>
</html>