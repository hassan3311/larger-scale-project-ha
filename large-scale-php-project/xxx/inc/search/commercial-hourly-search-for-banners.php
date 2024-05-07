<div class="search-wrap search-banner hourly-search-banner search-banner-desktop hidden-xs">
	<form class="clearfix">
		<div class="search-destination">
			<label class="animated-label">Where?</label>
			<input type="text" class="form-control input-search" placeholder="Where?">
			<button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
			<!-- <div class="search-auto-complete">
				<ul>
					<li><strong>Miami, FL</strong>, USA</li>
					<li><strong>Miami Beach, FL</strong>, USA</li>
					<li><strong>Miami Gardens, FL</strong>, USA</li>
				</ul>
			</div> -->
		</div>
		<div class="search-date-range">
			<div class="search-date-range-arrive search-date-hourly-arrive">
				<label class="animated-label">Date</label>
				<input type="text" class="form-control" placeholder="Date">
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
			<label class="animated-label">People</label>
			<input type="text" class="form-control" placeholder="People">
			<?php include ('inc/search/commercial-search-guests.php'); ?>
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

<div class="search-wrap search-banner search-banner-mobile">
	<form class="clearfix">
		<div class="search-destination">
			<input type="text" class="form-control" placeholder="Where to go?" onfocus="blur();">
		</div>
	</form>
</div><!-- search-wrap -->