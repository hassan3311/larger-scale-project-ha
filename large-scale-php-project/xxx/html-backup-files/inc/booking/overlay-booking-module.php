<div id="overlay-booking-module" class="overlay-booking-module overlay-contentscale">
	<div class="overlay-search-title">Request to book</div>
	<button type="button" class="overlay-booking-module-close btn-blank"><i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i></button> 
	<div class="sidebar-booking-module">
		<div class="block">
			<div class="sidebar-booking-module-body">
				<div class="text-success text-center btn-success-outlined btn btn-full-width">
					<i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Your dates are available!
				</div>
				<div class="text-danger text-center btn-danger-outlined btn btn-full-width">
					<i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i> Your dates are not available
				</div>

				<div class="search-wrap search-banner">
					<div class="search-date-range">
						<div class="search-date-range-arrive">
							<input type="text" class="form-control" placeholder="Arrive">
						</div>
						<div class="search-date-range-depart">
							<input type="text" class="form-control" placeholder="Depart">
						</div>
						<?php include ('inc/search/search-calendar.php'); ?>
					</div>
					<div class="search-guests">
						<input type="text" class="form-control" placeholder="Guests">
						<?php include ('inc/search/search-guests.php'); ?>
					</div>

					<div class="search-extra-services">
					<strong>Extra services</strong>
					<ul class="extra-services-list list-unstyled clearfix">
						<li>
							<label class="control control--checkbox">
								<input type="checkbox" name="outdoor-shower">
								<span class="control-text">Breakfast</span>
								<span class="control__indicator"></span>
							</label>
							<span>$16.00</span>
						</li>
						<li>
							<label class="control control--checkbox">
								<input type="checkbox" name="outdoor-shower">
								<span class="control-text">Lunch</span>
								<span class="control__indicator"></span>
							</label>
							<span>$16.00</span>
						</li>
						<li>
							<label class="control control--checkbox">
								<input type="checkbox" name="outdoor-shower">
								<span class="control-text">Dinner</span>
								<span class="control__indicator"></span>
							</label>
							<span>$16.00</span>
						</li>
					</ul>
				</div>

					<div class="search-message">
						<textarea class="form-control" rows="4" placeholder="Introduce yourself to the host"></textarea>
					</div>

					<div class="payment-list">
						
						<div class="payment-list-price-detail clearfix">
							<div class="pull-left">
								<div class="payment-list-price-detail-total-price">Total</div>
								<div class="payment-list-price-detail-note">Includes taxes and fees</div>
							</div>

							<div class="pull-right text-right">
								<div class="payment-list-price-detail-total-price">$324.00</div>
								<a class="payment-list-detail-btn" data-toggle="collapse" data-target="#collapseExample1" href="javascript:void(0);" aria-expanded="false" aria-controls="collapseExample1">View Details <i class="homey-icon homey-icon-arrow-down-1" aria-hidden="true"></i></a>
							</div>
						</div>

						<div class="collapse" id="collapseExample1">
							<ul>
								<li>$50 x 2 Nights <span>$100.00</span></li>
								<li>$50 x 1 Additional Guest <span>$50.00</span></li>
								<li>Cleaning <span>$25.00</span></li>
								<li>Security Deposit <span>$50.00</span></li>
								<li class="sub-total">Extra Services</li>
								<li>Service 1 <span>$25.00</span></li>
								<li>Service 2 <span>$50.00</span></li>
								<li class="sub-total">Sub Total <span>$225.00</span></li>
								<li>Service Fees <span>$45.00</span></li>
								<li>Taxes 20% <span>$54.00</span></li>
								<li class="payment-due">Payment due <span>$99.00</span></li>
							</ul>
						</div><!-- collapse -->
					</div><!-- payment-list -->	

					<button type="button" class="btn btn-full-width btn-primary">Request to Book</button>
					<div class="text-center text-small"><i class="homey-icon homey-icon-information-circle"></i> You won’t be charged yet</div>
				</div><!-- block-body-sidebar -->
			</div><!-- sidebar-booking-module-body -->
		</div><!-- block -->
	</div><!-- sidebar-booking-module -->
</div><!-- overlay-booking-module -->

<div class="overlay-booking-btn visible-sm visible-xs">
	<div class="pull-left">
		<div class="overlay-booking-price">$375<span>/night</span></div>
		<div class="rating">
			<i class="homey-icon homey-icon-rating-star"></i><span class="star-text-right">4.96 - <a href="#">24 Reviews</a></span>
		</div>
	</div>
	<button id="trigger-overlay-booking-form" class="trigger-overlay btn btn-primary" type="button">Request to Book</button>
</div>

