<div class="widget widget-advanced-search widget-advanced-search-experiences">
    <!-- <div class="widget-top">
        <h3 class="widget-title">Advanced Search</h3>
    </div> -->
    <div class="widget-body">

        <form class="clearfix">

            <div class="widget-advanced-search-form clearfix">
                <h4 class="widget-filter-title">Search</h4>
                <div class="search-destination">
                    <label class="animated-label">Where?</label>
                    <input type="text" class="form-control input-search" placeholder="Where?">
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
                        <input type="text" class="form-control" placeholder="Date">
                    </div>
                    <?php include ('inc/search/search-calendar.php'); ?>
                </div>
                <div class="search-guests">
                    <input type="text" class="form-control" placeholder="Guests">
                    <?php include ('inc/search/search-guests.php'); ?>
                </div>
                <!-- <div class="search-button">
                    <button type="submit" class="btn btn-primary btn-full-width">Search</button>
                </div> -->
            </div><!-- widget-advanced-search-form -->

            <div class="widget-advanced-search-filters widget-advanced-search-price">
                <h4 class="widget-filter-title">Price</h4>
                <select class="selectpicker" title=Min.>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
                <select class="selectpicker" title=Max.>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                </select>
            </div><!-- widget-advanced-search-filters widget-advanced-search-price -->

            <div class="widget-advanced-search-filters widget-advanced-search-amenities">
                <h4 class="widget-filter-title">Amenities</h4>
                <div class="filters">
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                </div><!-- filters -->

                <div class="collapse" id="collapseAmenities-mobile">
                    <div class="filters">
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                    </div>
                </div><!-- collapse -->

                <div class="filters">
                    <a role="button" data-toggle="collapse" href="#collapseAmenities-mobile" aria-expanded="false" aria-controls="collapseAmenities-mobile">
                        <span class="filter-more-link">More</span> 
                        <i class="homey-icon homey-icon-navigation-menu-horizontal-interface-essential" aria-hidden="true"></i> 
                    </a>
                </div><!-- filters -->
            </div><!-- widget-advanced-search-filters widget-advanced-search-amenities -->

            <div class="widget-advanced-search-filters widget-advanced-search-facilities">
                <h4 class="widget-filter-title">Facilities</h4>
                <div class="filters">
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                </div><!-- filters -->

                <div class="collapse" id="collapseFacilities-mobile">
                    <div class="filters">
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                        <label class="control control--checkbox">
                            <input name="Option Name" type="checkbox">
                            <span class="contro-text">Option Name</span>
                            <span class="control__indicator"></span>
                        </label>
                    </div>
                </div><!-- collapse -->

                <div class="filters">
                    <a role="button" data-toggle="collapse" href="#collapseFacilities-mobile" aria-expanded="false" aria-controls="collapseFacilities-mobile">
                        <span class="filter-more-link">More</span> 
                        <i class="homey-icon homey-icon-navigation-menu-horizontal-interface-essential" aria-hidden="true"></i> 
                    </a>
                </div><!-- filters -->
            </div><!-- widget-advanced-search-filters widget-advanced-search-facilities -->

            <div class="widget-advanced-search-filters widget-advanced-search-host-languages">
                <h4 class="widget-filter-title">Host Language</h4>
                <div class="filters">
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input name="Option Name" type="checkbox">
                        <span class="contro-text">Option Name</span>
                        <span class="control__indicator"></span>
                    </label>
                </div><!-- filters -->
            </div><!-- widget-advanced-search-filters widget-advanced-search-host-languages -->

        </form>

    </div>
</div>