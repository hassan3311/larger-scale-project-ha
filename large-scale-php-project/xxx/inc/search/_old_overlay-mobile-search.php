<div id="overlay-search-module" class="overlay-search-module overlay-search-contentscale">
	<button type="button" class="overlay-search-module-close btn-blank"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button>
	
	<div class="overlay-search-module-module">
		<div class="block">
			<div class="overlay-search-module-body">
				<div class="block-body-overlay-search-module">
					
					<input type="text" class="overlay-search-field form-control input-search"  placeholder="Where to go?">
					
					<!-- <div class="search-auto-complete">
						<ul>
							<li><strong>Miami FL</strong>, United States</li>
							<li><strong>Miami FL</strong>, United States</li>
							<li><strong>Miami FL</strong>, United States</li>
							<li><strong>Miami FL</strong>, United States</li>
							<li><strong>Miami FL</strong>, United States</li>
						</ul>
					</div> --><!-- .search-auto-complete -->

					<div class="filters-wrap">
						<div class="datepicker-overlay-search-module">
							<div class="filters"><strong>Check In - Check Out</strong></div>
							<input type="text" class="overlay-search-module-date-range form-control" onfocus="blur();" />
						</div>

						<div class="filters"><strong>Guests</strong></div>
						<select class="selectpicker">
							<option>1 Guest</option>
							<option>2 Guests</option>
							<option>3 Guests</option>
							<option>4 Guests</option>
							<option>5 Guests</option>
						</select>
					</div>

					<?php include ('inc/search-filter-full-width-mobile.php'); ?>
					
					<button type="button" class="overlay-search-button btn btn-full-width btn-primary">Search</button>

				</div><!-- block-body-sidebar -->
			</div><!-- sidebar-booking-module-body -->
		</div><!-- block -->
	</div><!-- sidebar-booking-module -->
</div>



