<div class="half-map-search half-map-search-experiences main-search-wrap">
    <div class="container-fluid">
        <div class="search-wrap hidden-xs">
            <form class="clearfix">
                <div class="half-map-search-inner-wrap">
                    <div class="search-destination">
                        <label class="animated-label">Where?</label>
                        <input type="text" class="form-control input-search" placeholder="Where?">
                        <a class="btn location-trigger" href="#">
                            <i class="homey-icon homey-icon-location-target-maps-navigation"></i>
                        </a>
                        <!-- <button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button> -->
                    <!-- <div class="search-auto-complete">
                        <ul>
                            <li><strong>Miami, FL</strong>, USA</li>
                            <li><strong>Miami Beach, FL</strong>, USA</li>
                            <li><strong>Miami Gardens, FL</strong>, USA</li>
                        </ul>
                    </div> -->
                </div>
                <div class="search-date-range">
                    <div class="search-date-range-arrive">
                        <!-- <label class="animated-label">Arrive</label> -->
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                    <?php include ('inc/search/search-calendar.php'); ?>
                </div>
                <div class="search-guests">
                    <!-- <label class="animated-label">Guests</label> -->
                    <input type="text" class="form-control" placeholder="Guests">
                    <?php include ('inc/search/search-guests.php'); ?>
                </div>
            </div>
            
            <div class="search-radius-slider">
                <div class="search-radius-distance">
                    <label class="control control--checkbox">
                        <input type="checkbox" name="air-conditioning" checked="">Radius: <strong>20 mi</strong>
                        <span class="control__indicator"></span>
                    </label>    
                </div>
                <div class="distance-range-wrap">
                    <div class="distance-range"></div><!-- price-range -->
                </div><!-- price-range-wrap -->
            </div><!-- search-radius-slider -->

            <div class="half-map-search-buttons">
                <button type="button" class="btn btn-secondary save-search-btn">Save Search</button>
                <button type="button" class="btn btn-grey-outlined hidden-xs" data-toggle="collapse" data-target="#half-map-search-collapse" aria-expanded="false" aria-controls="collapseExample""><i class="homey-icon homey-icon-settings-slider" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-grey-outlined visible-xs" data-toggle="collapse" data-target="#half-map-search-collapse" aria-expanded="false" aria-controls="collapseExample"">Advanced</button>
                
                <button type="button" class="btn btn-primary">Search</button>
            </div>

        </form>
    </div><!-- search-wrap -->

    <div class="search-wrap search-banner-mobile">
        <form class="clearfix">
            <div class="search-destination">
                <input type="text" class="form-control" placeholder="Where to go?" onfocus="blur();">
            </div>
        </form>
    </div><!-- search-wrap -->      
</div>
</div>
<div class="collapse half-map-search-filters" id="half-map-search-collapse">
    <?php include ('inc/search/search-filter-full-width-experiences.php'); ?>
</div>