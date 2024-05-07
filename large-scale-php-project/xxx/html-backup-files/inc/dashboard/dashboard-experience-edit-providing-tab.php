<div id="providing-tab" class="tab-pane fade">

    <div class="block-title">
        <div class="block-left">
            <h2 class="title">I will provide</h2>
        </div><!-- block-left -->
        <div class="block-right">
            <label class="control control--checkbox margin-0">
                <input type="checkbox" name="nothing-provided">
                <span class="contro-text">Nothing to provide</span>
                <span class="control__indicator"></span>
            </label>
        </div><!-- block-left -->
    </div>

    <div class="block-body">
        <h2 class="title mb-30">Add an item</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="guestsNumber">Type</label>
                    <select name="property-type" class="selectpicker" id="guestsNumber" data-live-search="false" data-live-search-style="begins" title="Select">
                        <option>Meal</option>
                        <option>Drink</option>
                        <option>Tickets</option>
                        <option>Transportation</option>
                        <option>Equipments</option>
                        <option>Snacks</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Type description here"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary">Remove this item</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-right">
                <button type="button" class="btn btn-primary"><i class="homey-icon homey-icon-add-circle-interface-essential"></i> Add another item</button>
            </div>
        </div>
    </div>

    <div class="block-title border-top">
        <div class="block-left">
            <h2 class="title">Guests have to bring with them</h2>
        </div><!-- block-left -->
        <div class="block-right">
            <label class="control control--checkbox margin-0">
                <input type="checkbox" name="nothing-to-bring">
                <span class="contro-text">Nothing to bring</span>
                <span class="control__indicator"></span>
            </label>
        </div><!-- block-left -->
    </div>

    <div class="block-body">
        <h2 class="title mb-30">Add an item</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" placeholder="Type description here"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <button type="button" id="add_more_bedrooms" data-increment="2" class="btn btn-primary">Remove this item</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-right">
                <button type="button" class="btn btn-primary"><i class="homey-icon homey-icon-add-circle-interface-essential"></i> Add another item</button>
            </div>
        </div>
    </div>

</div><!-- bedrooms-tab -->