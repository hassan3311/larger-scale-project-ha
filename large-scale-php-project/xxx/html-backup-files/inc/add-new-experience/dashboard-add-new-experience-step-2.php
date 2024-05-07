<div class="form-step">
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Location</h2>
            </div>
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
</div>