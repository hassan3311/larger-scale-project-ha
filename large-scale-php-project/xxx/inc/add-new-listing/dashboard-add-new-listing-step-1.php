<div class="form-step">
    <!--step information-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Information</h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <div class="col-sm-12 col-xs-12"><label> What kind of place you want to list? </label></div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--radio radio-tab">
                            <input type="radio" name="place-type" value="1" checked="checked">
                            <span class="control-text">Entire Home</span>
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--radio radio-tab">
                            <input type="radio" name="place-type" value="2">
                            <span class="control-text">Private Room</span>
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--radio radio-tab">
                            <input type="radio" name="place-type" value="3">
                            <span class="control-text">Shared Room</span>
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="property-title">Title</label>
                        <input type="text" name="title" class="form-control" id="property-title" placeholder="Enter the property title">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter the property description"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="bedrooms-number"> Number of Bedrooms </label>
                        <select name="property-type" class="selectpicker" id="bedrooms-number" data-live-search="false" title="Select Beds">
                            <option>1 Bed</option>
                            <option>2 Bed</option>
                            <option>3 Bed</option>
                            <option>4 Bed</option>
                            <option>5 Bed</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="guests-number"> Number of Guest </label>
                        <select name="property-type" class="selectpicker" id="guests-number" data-live-search="false" title="Select Guests">
                            <option value="1">For 1 Guest</option>
                            <option value="2">For 2 Guests</option>
                            <option value="3">For 3 Guests</option>
                            <option value="4">For 4 Guests</option>
                            <option value="5">For 5 Guests</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="beds-number"> Number of Beds </label>
                        <select name="beds-number" class="selectpicker" id="beds-number" data-live-search="false" title="Select Beds">
                            <option value="1">1 Bed</option>
                            <option value="2">2 Beds</option>
                            <option value="3">3 Beds</option>
                            <option value="4">4 Beds</option>
                            <option value="5">5 Beds</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="baths-number"> Number of Bathrooms </label>
                        <select name="property-type" class="selectpicker" id="baths-number" data-live-search="false" title="Select Bathrooms">
                            <option value="1">1 Bathroom</option>
                            <option value="2">2 Bathrooms</option>
                            <option value="3">3 Bathrooms</option>
                            <option value="4">4 Bathrooms</option>
                            <option value="5">5 Bathrooms</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="property-type"> Type of property </label>
                        <select name="property-type" class="selectpicker" id="property-type" data-live-search="false" data-live-search-style="begins" title="Select Property Type">
                            <option>Single Home</option>
                            <option>Single Home</option>
                            <option>Single Home</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="property-size"> Size in Sq Ft </label>
                        <input type="text" class="form-control" id="property-size" placeholder="Enter Size">
                    </div>
                </div>
            </div>




            <div class="listing-form-row">
                <div class="house-features-list">
                    <label class="label-title">Amenities</label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="air-conditioning">
                        <span class="contro-text">Air Conditioning</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="microwave">
                        <span class="control-text">Microwave</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="swimming-pool">
                        <span class="control-text">Heating</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="outdoor-shower">
                        <span class="control-text">Outdoor Shower</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="washer">
                        <span class="control-text">Washer</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="tv-cable">
                        <span class="control-text">TV Cable</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="sauna">
                        <span class="control-text">Sauna</span>
                        <span class="control__indicator"></span>
                    </label>
                </div>
            </div>
            <div class="listing-form-row">
                <div class="house-features-list">
                    <label class="label-title">Facilities</label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="air-conditioning">
                        <span class="contro-text">Free Parking</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="microwave">
                        <span class="control-text">Gym</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="swimming-pool">
                        <span class="control-text">Swimming Pool</span>
                        <span class="control__indicator"></span>
                    </label>
                    <label class="control control--checkbox">
                        <input type="checkbox" name="outdoor-shower">
                        <span class="control-text">Laundry</span>
                        <span class="control__indicator"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--step location-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Location</h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="property-address">Address</label>
                        <input type="text" name="address" class="form-control" id="property-address" placeholder="Enter your property address">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="aptSuit"> Apt, Suite (optional) </label>
                        <input type="text" name="aptSuit" class="form-control" id="aptSuit" placeholder="Ex. #123">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter your City">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" name="state" class="form-control" id="state" placeholder="Enter the State">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" name="zip" class="form-control" id="zip" placeholder="Enter Zip Code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="neighborhood">Neighborhood</label>
                        <select name="country" class="selectpicker" id="neighborhood" data-live-search="false" data-live-search-style="begins" title="Select Neighborhood">
                            <option>Neighborhood 1</option>
                            <option>Neighborhood 2</option>
                            <option>Neighborhood 3</option>
                            <option>Neighborhood 4</option>
                            <option>Neighborhood 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" class="selectpicker" id="country" data-live-search="false" data-live-search-style="begins" title="Select Country">
                            <option>Country 1</option>
                            <option>Country 2</option>
                            <option>Country 3</option>
                            <option>Country 4</option>
                            <option>Country 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Map - Drag pin to change location</label>
                        <div id="map">
                            <img src="img/870x300.png" alt="Map">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label>Find the address on the map</label>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Longitude">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Latitude">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <button class="btn btn-primary btn-full-width">Find Address</button>
                </div>
            </div>
        </div>
    </div>
    <!--step bedrooms-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Bedrooms</h2>
            </div><!-- block-left -->
        </div>
        <div class="block-body">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="bedroomName">Bedroom name</label>
                        <input type="text" name="bedroom_name" class="form-control" id="bedroomName" placeholder=" Eg. Master Room or Room 1 ">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="guestsNumber"> Number of guests in this room </label>
                        <select name="property-type" class="selectpicker" id="guestsNumber" data-live-search="false" data-live-search-style="begins" title="Select">
                            <option>1 Guest</option>
                            <option>2 Guest</option>
                            <option>3 Guest</option>
                            <option>4 Guest</option>
                            <option>5 Guest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="bedsNumber"> Number of Beds </label>
                        <select name="property-type" class="selectpicker" id="bedsNumber" data-live-search="false" data-live-search-style="begins" title="Select">
                            <option>1 Bed</option>
                            <option>2 Bed</option>
                            <option>3 Bed</option>
                            <option>4 Bed</option>
                            <option>5 Bed</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="bedType"> Bedroom type </label>
                        <select name="property-type" class="selectpicker" id="bedType" data-live-search="false" data-live-search-style="begins" title="Type">
                            <option>Type 1</option>
                            <option>Type 2</option>
                            <option>Type 3</option>
                            <option>Type 4</option>
                            <option>Type 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12 text-right">
                    <button type="button" class="btn btn-primary"><i class="homey-icon homey-icon-add-circle-interface-essential"></i> Add another room</button>
                </div>
            </div>
        </div>
    </div>
</div>