<div class="sidebar-booking-module sidebar-booking-hourly-module hidden-sm hidden-xs">
	<div class="block">
		<div class="sidebar-booking-module-header">
			<div class="block-body-sidebar">
				<span class="item-price"><sup>$</sup>50<sub>/night</sub></span>
			</div><!-- block-body-sidebar -->
		</div><!-- sidebar-booking-module-header -->
		<div class="sidebar-booking-module-body">
			<div class="block-body-sidebar">
				<div class="text-success text-center btn-success-outlined btn btn-full-width">
					<i class="homey-icon homey-icon-check-circle-1" aria-hidden="true"></i> Your dates are available!
				</div>
				<div class="text-danger text-center btn-danger-outlined btn btn-full-width">
					<i class="homey-icon homey-icon-remove-circle" aria-hidden="true"></i> Your dates are not available
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
				<!-- <div class="search-guests">
					<input type="text" class="form-control" placeholder="Guests">
					<?php // include ('inc/search/search-guests.php'); ?>
				</div> -->
				
				<div class="search-message">
					<textarea class="form-control" rows="4" placeholder="Introduce yourself to the host"></textarea>
				</div>
				

				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>

				<div class="payment-list">

					<div class="payment-list-price-detail clearfix">
						<div class="pull-left">
							<div class="payment-list-price-detail-total-price">Total</div>
							<div class="payment-list-price-detail-note">Includes taxes and fees</div>
						</div>

						<div class="pull-right text-right">
							<div class="payment-list-price-detail-total-price">$324.00</div>
							<a class="payment-list-detail-btn" data-toggle="collapse" data-target="#collapseExample" href="javascript:void(0);" aria-expanded="false" aria-controls="collapseExample">View Details</a>
						</div>
					</div>
					
					<div class="collapse" id="collapseExample">
						<ul>
							<li>$50 x 2 Nights <span>$100.00</span></li>
							<!-- <li>$50 x 1 Additional Guest <span>$50.00</span></li> -->
							<li>Cleaning <span>$25.00</span></li>
							<li>Security Deposit <span>$50.00</span></li>
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
<div class="sidebar-booking-module-footer">
	<div class="block-body-sidebar">
		<button type="button" class="btn btn-full-width btn-grey-outlined"><i class="homey-icon love-it" aria-hidden="true"></i> Save to Favorite</button>
		<button type="button" class="btn btn-full-width btn-grey-outlined" data-toggle="modal" data-target="#modal-contact-host">Contact</button>
		<button type="button" class="btn btn-full-width btn-blank"><i class="homey-icon homey-icon-print-text" aria-hidden="true"></i> Print this page</button>
	</div><!-- block-body-sidebar -->
	<div class="social-icons social-round">
		<a href="#" class="btn-bg-facebook"><i class="homey-icon homey-icon-social-media-facebook"></i></a>
		<a href="#" class="btn-bg-twitter"><i class="homey-icon homey-icon-social-media-twitter"></i></a>
		<a href="#" class="btn-bg-google-plus"><i class="homey-icon homey-icon-social-media-google-plus-1"></i></a>
		<a href="#" class="btn-bg-instagram"><i class="homey-icon homey-icon-social-instagram"></i></a>
		<a href="#" class="btn-bg-pinterest"><i class="homey-icon homey-icon-social-pinterest"></i></a>
	</div><!-- social-icons -->
</div><!-- sidebar-booking-module-footer -->