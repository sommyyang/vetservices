<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
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
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php
            include ("header.php");
            ?>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>User Registration</h3>
										</div>
										
										<!-- Register Form -->
										<form action="profile_info.php" method="POST">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" id="pname" name="pname"  required>
												<label class="focus-label">Pet Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" id="fname" name="fname"  required>
												<label class="focus-label">First Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" id="lname" name="lname"   required>
												<label class="focus-label">Last Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" id="addy" name="addy" required>
												<label class="focus-label">Street Address</label>
                                            </div>
                                            <div class="form-group form-focus">
												<input type="text" class="form-control floating" id="city" name="city" required>
												<label class="focus-label">City</label>
                                            </div>
                                            <div class="form-group form-focus">
												<input type="text" class="form-control floating" id="state" name="state" required>
												<label class="focus-label">State</label>
                                            </div>
                                            <div class="form-group form-focus">
												<input type="number" class="form-control floating" id="zip" name="zip" required>
												<label class="focus-label">Zip Code</label>
                                            </div>
                                            <div class="form-group form-focus">
												<input type="email" class="form-control floating" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
												<label class="focus-label">Email</label>
                                            </div>
                                            <div class="form-group form-focus">
												<input type="password" class="form-control floating" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters" required>
												<label class="focus-label">Create Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="portal.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit">Signup</button>

											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/register.html  30 Nov 2019 04:12:20 GMT -->
</html>