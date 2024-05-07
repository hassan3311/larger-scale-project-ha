<div class="search-wrap search-banner search-banner-desktop hidden-xs">
	<form class="clearfix">
		<div class="search-type">
			<select class="selectpicker" title="Select Type">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="search-date-range">
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
		<div class="search-guests">
			<label class="animated-label">Guests</label>
			<input type="text" class="form-control" placeholder="Guests">
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

<div class="search-wrap search-banner search-banner-mobile">
	<form class="clearfix">
		<div class="search-type">
			<input type="text" class="form-control" placeholder="Select Type" onfocus="blur();">
		</div>
	</form>
</div><!-- search-wrap -->