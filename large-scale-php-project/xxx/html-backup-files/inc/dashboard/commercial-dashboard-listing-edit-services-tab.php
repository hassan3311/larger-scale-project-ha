<div id="bedrooms-tab" class="tab-pane fade">
    <div class="block-title visible-xs">
        <h3 class="title">Bedrooms</h3>    
    </div>
    <div class="block-body">
        <div id="more_services_main">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="bedroomName">Service name</label>
                        <input type="text" class="form-control" placeholder="Ex. Projection Screen">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="guestsNumber">Service price</label>
                        <input type="text" class="form-control" placeholder="Enter the service price">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="bedsNumber">Service description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter the service description"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary">Remove this service</button>
                </div>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-right">
                <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary"><i class="homey-icon homey-icon-add-circle-interface-essential"></i> Add another service</button>
            </div>
        </div>
    </div>
</div><!-- bedrooms-tab -->