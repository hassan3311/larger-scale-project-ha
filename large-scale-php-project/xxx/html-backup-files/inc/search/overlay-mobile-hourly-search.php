<div id="overlay-search-advanced-module" class="overlay-search-module overlay-search-advanced-module overlay-search-contentscale">
	<div class="overlay-search-title">Search</div>
	<button type="button" class="overlay-search-module-close btn-blank"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
	
	<div class="search-wrap search-banner">
		<form class="clearfix">
			<div class="search-destination">
				<label class="animated-label">Where to go?</label>
				<input type="text" class="form-control input-search" placeholder="Where to go?">

			</div>
			<div class="search-date-range">
				<div class="search-date-range-arrive search-date-hourly-arrive">
					<input type="text" class="form-control" placeholder="Arrive">
				</div>
				<?php include ('inc/search/search-calendar-single.php'); ?>
			</div>
			<div class="search-hours-range clearfix">
				<div class="search-hours-range-left">
					<select class="selectpicker" title="Starts">
						<option>8:00 AM</option>
						<option>8:30 AM</option>
						<option>9:00 AM</option>
						<option>9:30 AM</option>
						<option>10:00 AM</option>
						<option>10:30 AM</option>
						<option>11:00 AM</option>
						<option>11:30 AM</option>
						<option>12:00 AM</option>
						<option>12:30 AM</option>
						<option>1:00 PM</option>
						<option>1:30 PM</option>
						<option>2:00 PM</option>
						<option>2:30 PM</option>
						<option>3:00 PM</option>
						<option>3:30 PM</option>
						<option>4:00 PM</option>
						<option>4:30 PM</option>
						<option>5:00 PM</option>
						<option>5:30 PM</option>
						<option>6:00 PM</option>
					</select>
				</div>
				<div class="search-hours-range-right">
					<select class="selectpicker" title="Ends">
						<option>8:00 AM</option>
						<option>8:30 AM</option>
						<option>9:00 AM</option>
						<option>9:30 AM</option>
						<option>10:00 AM</option>
						<option>10:30 AM</option>
						<option>11:00 AM</option>
						<option>11:30 AM</option>
						<option>12:00 AM</option>
						<option>12:30 AM</option>
						<option>1:00 PM</option>
						<option>1:30 PM</option>
						<option>2:00 PM</option>
						<option>2:30 PM</option>
						<option>3:00 PM</option>
						<option>3:30 PM</option>
						<option>4:00 PM</option>
						<option>4:30 PM</option>
						<option>5:00 PM</option>
						<option>5:30 PM</option>
						<option>6:00 PM</option>
					</select>
				</div>
			</div>
			<div class="search-guests">
				<!-- <label class="animated-label">Guests</label> -->
				<input type="text" class="form-control" placeholder="Guests">
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



