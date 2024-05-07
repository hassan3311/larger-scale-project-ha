<div id="bedrooms-tab" class="tab-pane fade">
    <div class="block-title visible-xs">
        <h3 class="title">Bedrooms</h3>    
    </div>
    <div class="block-body">
        <div id="more_bedrooms_main">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="acc_bedroom_name">Bedroom name</label>
                        <input type="text" name="homey_accomodation[0][acc_bedroom_name]" value="Master Room 01" class="form-control" placeholder="Eg. Master Room or Room 1">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="acc_guests"> Number of guests </label>
                        <input type="text" name="homey_accomodation[0][acc_guests]" value="2" class="form-control" placeholder="Enter number of guests in this room">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="acc_no_of_beds">Number of Beds </label>
                        <input type="text" name="homey_accomodation[0][acc_no_of_beds]" value="1" class="form-control" placeholder="Enter number of Beds">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="acc_bedroom_type">Bedroom type</label>
                        <input type="text" name="homey_accomodation[0][acc_bedroom_type]" value="King Size" class="form-control" placeholder="Enter bedroom type">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary">Remove this room</button>
                </div>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-right">
                <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary"><i class="homey-icon homey-icon-add-circle-interface-essential"></i> Add another room</button>
            </div>
        </div>
    </div>
</div><!-- bedrooms-tab -->