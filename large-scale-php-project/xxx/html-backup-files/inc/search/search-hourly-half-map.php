<div class="half-map-search main-search-wrap">
    <div class="container-fluid">
        <div class="search-wrap hidden-xs">
            <form class="clearfix">
                <div class="half-map-search-inner-wrap hourly-half-map-search-inner-wrap">
                    <div class="search-destination">
                        <label class="animated-label">Where to go?</label>
                        <input type="text" class="form-control input-search" placeholder="Where to go?">
                    </div>
                    <div class="search-date-range">
                        <div class="search-date-range-arrive search-date-hourly-arrive">
                            <input type="text" class="form-control" placeholder="Arrive">
                        </div>
                        <?php include ('inc/search/search-calendar-single.php'); ?>
                    </div>
                    <div class="search-hours-range clearfix">
                        <div class="search-hours-range-left">
                            <select class="selectpicker" title="Starts">
                                <option>8:00 AM</option>
                                <option>8:30 AM</option>
                                <option>9:00 AM</option>
                                <option>9:30 AM</option>
                                <option>10:00 AM</option>
                                <option>10:30 AM</option>
                                <option>11:00 AM</option>
                                <option>11:30 AM</option>
                                <option>12:00 AM</option>
                                <option>12:30 AM</option>
                                <option>1:00 PM</option>
                                <option>1:30 PM</option>
                                <option>2:00 PM</option>
                                <option>2:30 PM</option>
                                <option>3:00 PM</option>
                                <option>3:30 PM</option>
                                <option>4:00 PM</option>
                                <option>4:30 PM</option>
                                <option>5:00 PM</option>
                                <option>5:30 PM</option>
                                <option>6:00 PM</option>
                            </select>
                        </div>
                        <div class="search-hours-range-right">
                            <select class="selectpicker" title="Ends">
                                <option>8:00 AM</option>
                                <option>8:30 AM</option>
                                <option>9:00 AM</option>
                                <option>9:30 AM</option>
                                <option>10:00 AM</option>
                                <option>10:30 AM</option>
                                <option>11:00 AM</option>
                                <option>11:30 AM</option>
                                <option>12:00 AM</option>
                                <option>12:30 AM</option>
                                <option>1:00 PM</option>
                                <option>1:30 PM</option>
                                <option>2:00 PM</option>
                                <option>2:30 PM</option>
                                <option>3:00 PM</option>
                                <option>3:30 PM</option>
                                <option>4:00 PM</option>
                                <option>4:30 PM</option>
                                <option>5:00 PM</option>
                                <option>5:30 PM</option>
                                <option>6:00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="search-guests">
                        <!-- <label class="animated-label">Guests</label> -->
                        <input type="text" class="form-control" placeholder="Guests">
                        <?php include ('inc/search/search-guests.php'); ?>
                    </div>
                </div>
            </form>
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
    <?php include ('inc/search/search-filter-full-width.php'); ?>
</div>