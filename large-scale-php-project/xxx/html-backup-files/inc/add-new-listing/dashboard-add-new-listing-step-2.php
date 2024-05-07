<div class="form-step">
    <!--step pricing-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Pricing</h2>
            </div>
        </div>
        <div class="block-body">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <p class="help-block">
                        <strong>Note:</strong> 15% of your booking will be taken as commission when the guest books.<br>
                    </p>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <label>Booking</label>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="control control--checkbox radio-tab">Allow instant booking for this place.
                            <input type="checkbox" name="friday">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="night-price">Nightly</label>
                        <input type="text" name="night_price" class="form-control" id="night-price" placeholder="Enter price for 1 night">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="weekends">Weekends</label>
                        <input type="text" name="weekends" class="form-control" id="weekends" placeholder="Enter price for 1 weekend">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <label>Select the days to apply weekend pricing</label>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--checkbox radio-tab">Friday
                            <input type="checkbox" name="friday" checked="checked">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--checkbox radio-tab">Saturday
                            <input type="checkbox" name="saturday">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="control control--checkbox radio-tab">Sunday
                            <input type="checkbox" name="sunday">
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
            </div>
            <hr class="row-separator">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h3 class="sub-title">Long-term Pricing</h3>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="priceWeek">Weekly <span class="text-normal">- 7 Nights</span></label>
                        <input type="text" name="priceWeek" class="form-control" id="priceWeek" placeholder="Enter price for 1 week">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="priceMonthly">Monthly - <span class="text-normal">30 Nights</span></label>
                        <input type="text" name="priceMonthly" class="form-control" id="priceMonthly" placeholder="Enter price for 1 week">
                    </div>
                </div>
            </div>
            <hr class="row-separator">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h3 class="sub-title">Additional Costs</h3>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="additionalGuests">Additional Guests</label>
                        <input type="text" name="additionalGuests" class="form-control" id="additionalGuests" placeholder="Enter price for 1 addigional guest">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="securityDeposit">Security Deposit</label>
                        <input type="text" name="securityDeposit" class="form-control" id="securityDeposit" placeholder="Enter price for security deposit">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <label>Cleaning Fee</label>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="additionalGuests" class="form-control" placeholder="Enter price for cleaning fee">
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="form-group">
                        <label class="control control--radio radio-tab">
                            <input type="radio" name="fee-type" value="1" checked="checked">
                            <span class="control-text">Daily</span>
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="form-group">
                        <label class="control control--radio radio-tab">
                            <input type="radio" name="fee-type" value="2" checked="checked">
                            <span class="control-text">Per stay</span>
                            <span class="control__indicator"></span>
                            <span class="radio-tab-inner"></span>
                        </label>
                    </div>
                </div>
<!--                 <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="mealPrice">Meal Price</label>
                        <input type="text" name="mealPrice" class="form-control" id="mealPrice" placeholder="Enter price for meal">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--step terms-->
    <div class="block">
        <div class="block-title">
            <div class="block-left">
                <h2 class="title">Terms &amp; Rules</h2>
            </div>
        </div>
        <div class="block-body">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="cancel">Cancellation Policy</label>
                        <select name="cancellation_policy" class="selectpicker" id="cancel" data-live-search="false" title=" Flexible: Full refund 1 day prior arrival, exceept fees ">
                            <option>Policy 1</option>
                            <option>Policy 2</option>
                            <option>Policy 3</option>
                            <option>Policy 4</option>
                            <option>Policy 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="min-nights">Minimum Nights</label>
                        <select name="max-nights" class="selectpicker" id="min-nights" data-live-search="false" title="Select">
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
                        <label for="max-nights">Maximum Nights</label>
                        <select name="max-nights" class="selectpicker" id="max-nights" data-live-search="false" title="Select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="check-after">Check In After</label>
                        <select name="check-after" class="selectpicker" id="check-after" data-live-search="false" title="Select">
                            <option>2:00 PM</option>
                            <option>2:00 PM</option>
                            <option>2:00 PM</option>
                            <option>2:00 PM</option>
                            <option>2:00 PM</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="check-before">Check In Before</label>
                        <select name="check-before" class="selectpicker" id="check-before" data-live-search="false" title="Select">
                            <option>12:00 PM</option>
                            <option>12:00 PM</option>
                            <option>12:00 PM</option>
                            <option>12:00 PM</option>
                            <option>12:00 PM</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Smoking-->
                <div class="col-sm-6 col-xs-12">
                    <label class="label-condition">Smoking allowed?</label>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="smoke" value="1" checked="checked" type="radio">
                                    <span class="control-text">Yes</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="smoke" value="0" type="radio">
                                    <span class="control-text">No</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Pets-->
                <div class="col-sm-6 col-xs-12">
                    <label class="label-condition">Pets allowed?</label>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="pets" value="1" checked="checked" type="radio">
                                    <span class="control-text">Yes</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="pets" value="0" type="radio">
                                    <span class="control-text">No</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Party-->
                <div class="col-sm-6 col-xs-12">
                    <label class="label-condition">Party allowed?</label>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="party" value="1" checked="checked" type="radio">
                                    <span class="control-text">Yes</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="party" value="0" type="radio">
                                    <span class="control-text">No</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Children-->
                <div class="col-sm-6 col-xs-12">
                    <label class="label-condition">Children allowed?</label>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="children" value="1" checked="checked" type="radio">
                                    <span class="control-text">Yes</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="control control--radio radio-tab">
                                    <input name="children" value="0" type="radio">
                                    <span class="control-text">No</span>
                                    <span class="control__indicator"></span>
                                    <span class="radio-tab-inner"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-sm-12">
                    <div class="form-group">
                        <label for="rules">Additional rules info (optional)</label>
                        <textarea class="form-control" id="rules" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>