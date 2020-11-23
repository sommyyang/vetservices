<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/favourites.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>ICS 325 VET</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
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
            <?php
            include ("header.php");
            ?>	
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">User</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Veterinarians</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/patients/patient.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>John Doe</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 16 March 1993, <br> 26 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Minnesota, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="#">
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="user_vets.php">
													<i class="fas fa-bookmark"></i>
													<span>Book Appointments</span>
												</a>
											</li>
											<li>
												<a href="profile-settings.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.php">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>

						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="#">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="#">Ruby Perrin</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">BDS, MDS - Parasitology</p>
                                            <br>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i> Minnesota, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Mon - Fri, (8am - 5pm)
												</li>												
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="#" class="btn view-btn">View Profile</a>
                                                </div>
                                                <div class="col-6">
													<a href="#" class="btn book-btn">Book Now</a>
												</div>
                                            </div>
                                            
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="#">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="#">Darren Elder</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">BDS, MDS - Oral & Immunology</p>
											<br>
											<ul class="available-info">
                                            <li>
													<i class="fas fa-map-marker-alt"></i> Minnesota, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Mon - Fri, (8am - 5pm)
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="#" class="btn view-btn">View Profile</a>
                                                </div>	
                                                <div class="col-6">
													<a href="#" class="btn book-btn">Book Now</a>
												</div>											
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="#">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="#">Deborah Angel</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">BDS, MDS - Disease mechanisms, DMD - Emergency medical care</p>
											<br>
											<ul class="available-info">
                                            <li>
													<i class="fas fa-map-marker-alt"></i> Minnesota, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Mon - Fri, (8am - 5pm)
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="#" class="btn view-btn">View Profile</a>
                                                </div>
                                                <div class="col-6">
													<a href="#" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="profile-widget">
										<div class="doc-img">
											<a href="#">
												<img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
											</a>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<a href="#">Sofia Brient</a> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">BS - Animal genetics, MDS - Molecular biology</p>
											<br>
											<ul class="available-info">
                                            <li>
													<i class="fas fa-map-marker-alt"></i> Minnesota, USA
												</li>
												<li>
													<i class="far fa-clock"></i> Mon - Fri, (8am - 5pm)
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<a href="#" class="btn view-btn">View Profile</a>
                                                </div>
                                                <div class="col-6">
													<a href="#l" class="btn book-btn">Book Now</a>
												</div>
											</div>
										</div>
									</div>
                                </div>
								
							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<?php
            include ("footer.php");
            ?>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/favourites.html  30 Nov 2019 04:12:17 GMT -->
</html>