 			<!-- Footer -->
             <footer class="footer">

				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{ asset('/') }}frontend/assets/img/footer-logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.php"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="{{ route('login') }} "><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.php"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.php"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.php"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors / Nurse</h2>
									<ul>
										<li><a href="appointments.php"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.php"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href=" {{ route('login') }} "><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href=" {{ route('doctorSignUpForm') }} "><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href=" {{route('nurse.nurse.signup')}} "><i class="fas fa-angle-double-right"></i> Nurse SignUp</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->

							</div>

							<div class="col-lg-3 col-md-6">

								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											AmarDoctor@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->

							</div>

						</div>
					</div>
				</div>
				<!-- /Footer Top -->

				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">

						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2019 AmarDoctor. All rights reserved.</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">

									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.php">Terms and Conditions</a></li>
											<li><a href="privacy-policy.php">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->

								</div>
							</div>
						</div>
						<!-- /Copyright -->

					</div>
				</div>
				<!-- /Footer Bottom -->

			</footer>
			<!-- /Footer -->

	   </div>
	   <!-- /Main Wrapper -->

       <!-- JS File Start -->

		<!-- jQuery -->
		<script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('/') }}frontend/assets/js/popper.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>

		<!-- Slick JS -->
		<script src="{{ asset('/') }}frontend/assets/js/slick.js"></script>

		<!-- Custom JS -->
		<script src="{{ asset('/') }}frontend/assets/js/script.js"></script>
		<!-- jQuery -->
		<script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('/') }}frontend/assets/js/popper.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap.min.js"></script>

		<!-- Sticky Sidebar JS -->
        <script src="{{ asset('/') }}frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

		<!-- Datetimepicker JS -->
		<script src="{{ asset('/') }}frontend/assets/js/moment.min.js"></script>
		<script src="{{ asset('/') }}frontend/assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Full Calendar JS -->
        <script src="{{ asset('/') }}frontend/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>
        <script src="{{ asset('/') }}frontend/assets/plugins/fancybox/jquery.fancybox.min.js"></script>

		<!-- Custom JS -->
    <script src="{{ asset('/') }}frontend/assets/js/script.js"></script>

	</body>

</html>
