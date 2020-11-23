<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
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
            include ("user_header.php");
            ?>					
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">User</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
											<img src="assets/img/patients/avatar-01.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
										<?php
										
										echo "<h3> Welcome back, ". $_SESSION['sess_user'] ."!</h3>";
									?>
										<div class="patient-details">
											<h5 class="mb-0">Client</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="booking.php">
													<i class="fas fa-bookmark"></i>
													<span>Book Appointments</span>
												</a>
											</li>
											<li>
												<a href="pets.php">
													<i class="fas fa-heart"></i>
													<span>Pet Profiles</span>
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
												<a href="logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
											</li>

										</ul>
									</nav>
									<table>
									<thead>
								<tr>
									<th></th>
									<th>Date</th>
									<th>Time</th>
									<th>Pet</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
									<!-- /Tab Menu -->
									<?php 
									
									require('dbh.php');

									if (isset($_SESSION['sess_id'])){

										$sql = "SELECT * FROM pets WHERE id=" . $_SESSION['sess_id'];
										$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
										$count = mysqli_num_rows($result);

										if (!$count == 1)
										{
											header('location: error.php');
										}
										else {
											$row = mysqli_fetch_assoc($result);
											$pid = $row['pet_id'];
											$sql = "SELECT * FROM appointment AS a JOIN pets AS p ON p.pet_id = a.pet_id WHERE a.id=" . $_SESSION['sess_id'];
												
												$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
												
												if (mysqli_num_rows($result) > 0) {
													while($row = mysqli_fetch_assoc($result)) {
												
												echo '

														<div class="col-12 col-md-10">
															<div class="form-group">

															<tr>
															<td><input type="hidden" class="form-control" name="aid" value="'.$row['app_id'].'"readonly></td>
															<td><input type="text" class="form-control" name="appd" value="'.$row['app_date'].'"readonly></td>
															<td><input type="text" class="form-control" name="appt" value="'.$row['app_time'].'"readonly></td>
															<td><input type="text" class="form-control" name="pid" value="'.$row['pet_name'].'"readonly></td>
															<td><input type="text" class="form-control" name="stat" value="'.$row['status'].'"readonly></td>
															</tr>

															</div>
														</div>
														
														';
													}
												}
													else {
														echo "You currently have no appointments.";
														echo "<br>";
													}
										}

												
												}
								
									?>
									</tbody>
							</table>
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
										
										<!-- /Appointment Tab -->
										
										<!-- Prescription Tab -->
										
										<!-- /Prescription Tab -->
											
										<!-- Medical Records Tab -->

										<!-- /Medical Records Tab -->
										
										<!-- Billing Tab -->

										<!-- /Billing Tab -->
										
									</div>
									<!-- Tab Content -->
									
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

<!-- doccure/patient-dashboard.html  30 Nov 2019 04:12:16 GMT -->
</html>