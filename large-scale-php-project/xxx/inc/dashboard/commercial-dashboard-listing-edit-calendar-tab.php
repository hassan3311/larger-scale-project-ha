<div id="calendar-tab" class="tab-pane fade in active">
	<div class="block-title visible-xs">
		<h3 class="title">calendar</h3>    
	</div>
	<div class="block-body">
		
		<div class="calendar-navigation custom-actions">
			<button class="btn btn-secondary-outlined btn-reserve-period" data-toggle="modal" data-target="#modal-calendar">Reserve Period</button>
			<button class="btn btn-action btn-reserve-period-mobile" data-toggle="modal" data-target="#modal-calendar"><i class="homey-icon homey-icon-cog-double-2-interface-essential" aria-hidden="true"></i></button>

			<button class="btn btn-action"><i class="homey-icon homey-icon-arrow-left-1" aria-hidden="true"></i></button>
			<button class="btn btn-action"><i class="homey-icon homey-icon-arrow-right-1" aria-hidden="true"></i></button>
		</div>
		
		<div id="property-calendar" class="property-calendar">
			<div class="homey_month_wrap">
				<div class="month clearfix">
				<h4>August<br>
					<span>2018</span>
				</h4>
			</div>

			<ul class="weekdays clearfix">
				<li>Mon</li>
				<li>Tue</li>
				<li>Wed</li>
				<li>Thu</li>
				<li>Fri</li>
				<li>Sat</li>
				<li>Sun</li>
			</ul>

			<ul class="days clearfix">  
				<li class="prev-month">
					<span class="day-number">29</span>
				</li>
				<li class="prev-month">
					<span class="day-number">30</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">1</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">2</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">3</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">4</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">5</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">6</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">7</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0001</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">8</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0001</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">9</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0001</span>
				</li>
				<li class="current-month unavailable" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">10</span>
					<span class="day-status">Not available</span>
				</li>
				<li class="current-month unavailable" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">11</span>
					<span class="day-status">Not available</span>
				</li>
				<li class="current-month unavailable" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">12</span>
					<span class="day-status">Not available</span>
				</li>
				<li class="current-month unavailable" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">13</span>
					<span class="day-status">Not available</span>
				</li>
				<li class="current-month unavailable" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">14</span>
					<span class="day-status">Not available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number current-day">15</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">16</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">17</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">18</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">19</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">20</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">21</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">22</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">23</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0002</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">24</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0002</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">25</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0002</span>
				</li>
				<li class="current-month booked">
					<span class="day-number">26</span>
					<img src="./img/guest-avatar-100x100.png" alt="Thumb" width="24" height="24" class="img-circle">
					<span class="day-status">Booked #0002</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">27</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">28</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">29</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">30</span>
					<span class="day-status">Available</span>
				</li>
				<li class="current-month available" data-toggle="modal" data-target="#modal-calendar">
					<span class="day-number">31</span>
					<span class="day-status">Available</span>
				</li>
				<li class="next-month">
					<span class="day-number">1</span>
				</li>
				<li class="next-month">
					<span class="day-number">2</span>
				</li>
			</ul>
			</div>
			
		</div>
	</div>
</div><!-- calendar-tab -->
<?php include ('inc/dashboard/modal-window-calendar.php'); ?>
