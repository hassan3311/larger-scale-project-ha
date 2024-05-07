<div id="overlay-search-module-experiences" class="overlay-search-module overlay-search-module-experiences overlay-search-contentscale">
	<div class="overlay-search-title">Search</div>
	<button type="button" class="overlay-search-module-close btn-blank"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
	
	<div class="search-wrap search-banner">
		<form class="clearfix">
			<div class="search-destination">
				<label class="animated-label">Where?</label>
				<input type="text" class="form-control input-search" placeholder="Where?">
				<!-- <button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button> -->
				<a class="btn location-trigger" href="#">
					<i class="homey-icon homey-icon-location-target-maps-navigation"></i>
				</a>
			</div>
			<div class="search-date-range">
				<div class="search-date-range-arrive">
					<label class="animated-label">Date</label>
					<input type="text" class="form-control" placeholder="Date" onfocus="blur();">
				</div>
				<?php include ('inc/search/search-calendar.php'); ?>
			</div>
			<div class="search-guests">
				<label class="animated-label">Guests</label>
				<input type="text" class="form-control" placeholder="Guests" onfocus="blur();">
				<?php include ('inc/search/search-guests.php'); ?>
			</div>
			<div class="search-button">
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



