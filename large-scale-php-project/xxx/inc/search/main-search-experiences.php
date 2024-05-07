<div class="main-search main-search-experiences">
	<div class="container">
		<div class="search-wrap hidden-sm hidden-xs">
			<form class="clearfix">
				<div class="search-destination">
					<label class="animated-label">Where?</label>
					<input type="text" class="form-control input-search" placeholder="Where?">
					<!-- <button type="reset" class="btn clear-input-btn"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button> -->
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
						<!-- <label class="animated-label">Date</label> -->
						<input type="text" class="form-control" placeholder="Date">
					</div>
					<?php include ('inc/search/search-calendar.php'); ?>
				</div>
				<div class="search-guests">
					<!-- <label class="animated-label">Guests</label> -->
					<input type="text" class="form-control" placeholder="Guests">
					<?php include ('inc/search/search-guests.php'); ?>
				</div>
				<div class="search-filters">
					<button type="button" class="btn btn-grey-outlined search-filter-btn"><i class="homey-icon homey-icon-settings-slider" aria-hidden="true"></i></button>
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
		<div class="search-wrap search-banner-mobile search-banner-mobile-experiences">
			<form class="clearfix">
				<div class="search-destination">
					<input type="text" class="form-control" placeholder="Where?" onfocus="blur();">
				</div>
			</form>
		</div><!-- search-wrap -->	
		<?php include ('inc/search/search-filter-full-width-experiences.php'); ?>		
	</div>
</div>
