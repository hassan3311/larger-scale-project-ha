<div class="header-search header-1-search header-1-search-full-width hidden-xs">
	<div class="container-fluid">
		<div class="header-1-search-wrap main-search-wrap">
			<form class="form-inline">
				<div class="search-wrap">
					<div class="input-group">
						<span class="input-group-addon"><i class="homey-icon homey-icon-search-1"></i></span>
						<input type="text" class="form-control input-search" placeholder="Where to go?">
						<span class="input-group-addon search-filter-btn">
							<span class="filter-text">Filters</span> <i class="homey-icon homey-icon-settings-slider"></i></span>
						<!-- <div class="search-auto-complete">
							<ul>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
								<li><strong>Miami FL</strong>, United States</li>
							</ul>
						</div> -->
					</div><!-- .input-group -->
				</div><!-- .search-wrap -->
				<div class="datepicker-wrap">
					<div class="input-group">
						<span class="input-group-addon"><i class="homey-icon homey-icon-calendar-3"></i></span>
						<input type="text" class="date-range form-control" placeholder="Check-In - Check-out"/>
					</div>
				</div><!-- .datepicker-wrap -->
				<div class="guest-select-wrap">
					<div class="input-group">
						<span class="input-group-addon"><i class="homey-icon homey-icon-multiple-man-woman-2"></i></span>
						<select class="selectpicker" title=Guests>
							<option>1 Guest</option>
							<option>2 Guests</option>
							<option>3 Guests</option>
							<option>4 Guests</option>
							<option>5 Guests</option>
						</select>
					</div>
				</div><!-- .guest-select-wrap -->				
				<button type="submit" class="btn"><i class="homey-icon homey-icon-search-1" aria-hidden="true"></i></button>
			</form><!-- .form-inline -->
		</div><!-- .header-1-search-wrap -->
		<!-- search filerts -->
        <?php include ('inc/search-filter-full-width.php'); ?>
	</div><!-- .container -->
</div><!-- .header-search -->