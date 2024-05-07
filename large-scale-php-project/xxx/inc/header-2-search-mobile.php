<div class="header-search mobile-header-search mobile-header-search-sticky visible-xs">
	<div class="container">
		<div class="header-1-search-wrap mobile-header-search-wrap">
			<form class="form-inline">
				<div class="form-group">
					<div class="search-wrap">
						<div class="input-group">
							<span class="input-group-addon"><i class="homey-icon homey-icon-search-1"></i></span>
							<input type="text" class="form-control input-search" placeholder="Where to go?" data-toggle="collapse" data-target="#mobileSearchModal">
							<span class="input-group-addon" data-toggle="collapse" data-target="#mobileSearchModal"><i class="homey-icon homey-icon-remove-circle"></i></span>
						</div><!-- .input-group -->
					</div><!-- .search-wrap -->
				</div><!-- .form-group -->
			</form><!-- .form-inline -->
		</div><!-- .header-1-search-wrap -->
	</div><!-- .container -->
</div><!-- .header-search -->


<div class="collapse" id="mobileSearchModal">
	<div class="mobile-search">
		<form class="form-inline">
			<div class="form-group">
				<h5>Check-in &amp; Check-out</h5>
				<div class="datepicker-wrap">
					<div class="input-group">
						<span class="input-group-addon"><i class="homey-icon homey-icon-calendar-3"></i></span>
						<input type="text" class="mobile-date-range form-control" placeholder="Check-In - Check-out" />
					</div>
				</div><!-- .datepicker-wrap -->
			</div><!-- .form-group -->

			<div class="form-group">
				<h5>Number of Guests</h5>
				<div class="guest-select-wrap">
					<div class="input-group">
						<span class="input-group-addon"><i class="homey-icon homey-icon-multiple-man-woman-2"></i></span>
						<select class="selectpicker">
							<option>1 Guest</option>
							<option>2 Guests</option>
							<option>3 Guests</option>
							<option>4 Guests</option>
							<option>5 Guests</option>
						</select>
					</div>
				</div><!-- .guest-select-wrap -->
			</div><!-- .form-group -->
			<button type="button" class="btn btn-primary"><i class="homey-icon homey-icon-search-1" aria-hidden="true"></i> Search</button>
		</form><!-- .form-inline -->
	</div><!-- .mobile-search -->
</div><!-- .collapse -->