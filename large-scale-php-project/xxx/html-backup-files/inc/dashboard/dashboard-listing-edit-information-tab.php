<div id="description-tab" class="tab-pane fade">
    <div class="block-title visible-xs">
        <h3 class="title">Information</h3>    
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
    </div>
</div><!-- description-tab -->