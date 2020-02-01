<!DOCTYPE html>
<html lang="en">

<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>AmarDoctor</title>

		<!-- Favicons -->
		<link type="image/x-icon" href="{{ asset('/') }}frontend/assets/img/favicon.png" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fontawesome/css/all.min.css">
				<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/bootstrap-datetimepicker.min.css">

		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/plugins/fullcalendar/fullcalendar.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.php" class="navbar-brand logo">
							<img src="{{ asset('/') }}frontend/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="{{ asset('/') }}frontend/assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="index.php">Home</a>
							</li>
							<li class="has-submenu">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
									<li><a href="appointments.php">Appointments</a></li>
									<li><a href="schedule-timings.php">Schedule Timing</a></li>
									<li><a href="my-patients.php">Patients List</a></li>
									<li><a href="patient-profile.php">Patients Profile</a></li>
									<li><a href="chat-doctor.php">Chat</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="doctor-profile-settings.php">Profile Settings</a></li>
									<li><a href="reviews.php">Reviews</a></li>
									<li><a href="doctor-register.php">Doctor Register</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="search.php">Search Doctor</a></li>
									<li><a href="doctor-profile.php">Doctor Profile</a></li>
									<li><a href="booking.php">Booking</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="booking-success.php">Booking Success</a></li>
									<li><a href="patient-dashboard.php">Patient Dashboard</a></li>
									<li><a href="favourites.php">Favourites</a></li>
									<li><a href="chat.php">Chat</a></li>
									<li><a href="profile-settings.php">Profile Settings</a></li>
									<li><a href="change-password.php">Change Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="search.php">Search Doctors</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="components.php">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.php">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.php">Invoices</a></li>
											<li><a href="invoice-view.php">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.php">Starter Page</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="forgot-password.php">Forgot Password</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.php" target="_blank">Admin</a>
							</li>
							<li class="login-link">
								<a href="login.php">Login / Signup</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login.php">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
            <!-- /Header -->
