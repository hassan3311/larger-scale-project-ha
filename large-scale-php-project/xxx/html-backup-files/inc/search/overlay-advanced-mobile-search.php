<div id="overlay-search-advanced-module" class="overlay-search-module overlay-search-advanced-module overlay-search-contentscale">
	<div class="overlay-search-title">Search</div>
	<button type="button" class="overlay-search-module-close btn-blank"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
	
	<div class="search-wrap search-banner">
		<form class="clearfix">
			<div class="search-destination">
				<label class="animated-label">Where to go?</label>
				<input type="text" class="form-control input-search" placeholder="Where to go?">
				<a class="btn location-trigger" href="#">
					<i class="homey-icon homey-icon-location-target-maps-navigation"></i>
				</a>
				<!-- <button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button> -->
				<!-- <div class="search-auto-complete">
					<ul>
						<li><strong>Miami, FL</strong>, USA</li>
						<li><strong>Miami Beach, FL</strong>, USA</li>
						<li><strong>Miami Gardens, FL</strong>, USA</li>
					</ul>
				</div> -->
			</div>
			<div class="search-type search-radius-dropdown">
				<select class="selectpicker" title="Radius">
					<option>10 mi</option>
					<option>20 mi</option>
					<option>30 mi</option>
					<option>40 mi</option>
					<option>50 mi</option>
				</select>
			</div>
			<div class="search-date-range">
				<div class="search-date-range-arrive">
					<label class="animated-label">Arrive</label>
					<input type="text" class="form-control" placeholder="Arrive" onfocus="blur();">
				</div>
				<div class="search-date-range-depart">
					<label class="animated-label">Depart</label>
					<input type="text" class="form-control" placeholder="Depart" onfocus="blur();">
				</div>
				<?php include ('inc/search/search-calendar-single.php'); ?>
			</div>
			<div class="search-guests">
				<label class="animated-label">Guests</label>
				<input type="text" class="form-control" placeholder="Guests" onfocus="blur();">
				<?php include ('inc/search/search-guests.php'); ?>
			</div>
			<div class="search-button">
				<button type="button" class="btn btn-grey-outlined search-filter-mobile-btn"><i class="homey-icon homey-icon-settings-slider" aria-hidden="true"></i> Advanced</button>
				<?php include ('inc/search/search-filter-full-width.php'); ?>
				<!-- <button type="submit" class="btn btn-primary">Search</button> -->
				<div class="btn btn-primary spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>
		</form>
	</div><!-- search-wrap -->
</div>



