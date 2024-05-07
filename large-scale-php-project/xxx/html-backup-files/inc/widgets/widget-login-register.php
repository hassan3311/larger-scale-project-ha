<div class="widget widget-login-register">
	<div class="widget-top">
		<h3 class="widget-title">Login and Register</h3>
	</div>
	<div class="widget-body">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#login-tab" aria-controls="login-tab" role="tab" data-toggle="tab">Login</a></li>
			<li role="presentation"><a href="#register-tab" aria-controls="register-tab" role="tab" data-toggle="tab">Register</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="login-tab">
				<div class="modal-login-form">
					<form>
						<div class="form-group">
							<input type="email" class="form-control email-input-1" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control password-input-2" placeholder="Password">
						</div>
						<div class="checkbox pull-left">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
						<div class="forgot-password-text pull-right">
							<a href="#" data-toggle="modal" data-target="#modal-login-forgot-password" data-dismiss="modal">Forgot passoword?</a>
						</div>
						<button type="submit" class="btn btn-primary btn-full-width">Log In</button>
					</form>
					<button type="button" class="btn btn-facebook-lined btn-full-width"><i class="homey-icon homey-icon-social-media-facebook" aria-hidden="true"></i> Login with Facebook</button>
					<button type="button" class="btn btn-google-plus-lined btn-full-width"><i class="homey-icon homey-icon-social-media-google-plus-1" aria-hidden="true"></i> Login with Google</button>
				</div><!-- modal-login-form -->
			</div><!-- tab-pane -->

			<div role="tabpanel" class="tab-pane fade" id="register-tab">
				<div class="modal-login-form">
					<form>
						<div class="form-group">
							<input type="email" class="form-control email-input-1" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control password-input-1" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="password" class="form-control password-input-2" placeholder="Repeat Password">
						</div>
						<select class="selectpicker" title=Select>
							<option>I want to book</option>
							<option>I want to host</option>
						</select>
						<div class="checkbox pull-left">
							<label>
								<input type="checkbox"> I agree with <a href="#">Terms & Conditions</a>
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-full-width">Register</button>
					</form>

				</div>
			</div><!-- tab-pane -->
		</div><!-- tab-content -->
	</div>

	<!-- when the user is logged in, display this code below -->
	<div class="widget-body">
		<div class="tab-content">
			<div class="media">
				<div class="media-left">
					<a class="media-object" href="#">
						<img src="img/guest-avatar-70x70.png" class="img-circle img-responsive" width="64" height="64" alt="user Image">
					</a>
				</div>
				<div class="media-body">
					<div>Peter Parker</div>
					<a href="#">Log out</a>
				</div>
			</div>
		</div>
	</div>
</div>

