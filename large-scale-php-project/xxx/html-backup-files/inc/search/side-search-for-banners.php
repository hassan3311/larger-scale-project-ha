<div class="search-wrap search-banner search-banner-desktop side-search hidden-xs">
	<form class="clearfix">
		<div class="search-destination clearfix">
			<label class="animated-label">Where to go?</label>
			<input type="text" class="form-control input-search" placeholder="Where to go?">
			<button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
			<!-- <div class="search-auto-complete">
				<ul>
					<li><strong>Miami, FL</strong>, USA</li>
					<li><strong>Miami Beach, FL</strong>, USA</li>
					<li><strong>Miami Gardens, FL</strong>, USA</li>
				</ul>
			</div> -->
		</div>
		<div class="search-date-range clearfix">
			<div class="search-date-range-arrive">
				<label class="animated-label">Arrive</label>
				<input type="text" class="form-control" placeholder="Arrive">
			</div>
			<div class="search-date-range-depart">
				<label class="animated-label">Depart</label>
				<input type="text" class="form-control" placeholder="Depart">
			</div>
			<?php include ('inc/search/search-calendar.php'); ?>
		</div>
		<div class="search-guests clearfix">
			<label class="animated-label">Guests</label>
			<input type="text" class="form-control" placeholder="Guests">
			<?php include ('inc/search/search-guests.php'); ?>
		</div>
		<div class="search-button clearfix">
			<button type="submit" class="btn btn-primary">Search</button>
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

