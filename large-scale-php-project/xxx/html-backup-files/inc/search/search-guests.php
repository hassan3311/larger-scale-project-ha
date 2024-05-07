<div id="search-guests-wrap" class="search-guests-wrap clearfix">
	<div class="adults-calculator">
		<input type="text" min="0" max="20" class="quantity-calculator" value="20" disabled>
		<span class="calculator-label">Adults</span>
		<button class="btn btn-secondary-outlined" type="button"><i class="homey-icon homey-icon-add" aria-hidden="true"></i></button>
		<button class="btn btn-secondary-outlined" type="button"><i class="homey-icon homey-icon-subtract" aria-hidden="true"></i></button>
	</div><!-- adults-calculator -->
	<div class="children-calculator">
		<input type="text" min="0" max="20" class="quantity-calculator" value="0" disabled>
		<span class="calculator-label">Children</span>
		<button class="btn btn-secondary-outlined" type="button"><i class="homey-icon homey-icon-add" aria-hidden="true"></i></button>
		<button class="btn btn-secondary-outlined" type="button"><i class="homey-icon homey-icon-subtract" aria-hidden="true"></i></button>
	</div><!-- children-calculator -->
	<div class="pets-calculator">
		
		<span class="calculator-label">Pets</span>
		<div class="pets-calculator-control-wrap">
			<label class="control control--radio radio-tab">
				<input type="radio" name="pets-calculator" value="1">
				<span class="control-text">Yes</span>
				<span class="control__indicator"></span>
				<span class="radio-tab-inner"></span>
			</label>
			<label class="control control--radio radio-tab">
				<input type="radio" name="place-type" value="1">
				<span class="control-text">No</span>
				<span class="control__indicator"></span>
				<span class="radio-tab-inner"></span>
			</label>		
		</div>
	</div><!-- pets-calculator -->
	<div class="guest-apply-btn">
		<button class="btn btn-primary" type="button">Apply</button>
	</div><!-- guest-apply-btn -->
</div><!-- search-guests -->