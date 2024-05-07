<div class="search-wrap search-banner search-banner-desktop hidden-xs">
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
			<div class="search-date-range-arrive">
				<label class="animated-label">Starts</label>
				<input type="text" class="form-control" placeholder="Starts">
			</div>
			<div class="search-date-range-depart">
				<label class="animated-label">Ends</label>
				<input type="text" class="form-control" placeholder="Ends">
			</div>
			<?php include ('inc/search/search-calendar.php'); ?>
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
			<input type="text" class="form-control" placeholder="Where?" onfocus="blur();">
		</div>
	</form>
</div><!-- search-wrap -->