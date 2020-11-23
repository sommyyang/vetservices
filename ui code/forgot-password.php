<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/forgot-password.html  30 Nov 2019 04:12:20 GMT -->
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
							
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Forgot Password</h3>
											<p class="small text-muted">Enter your email to get a temporary password</p>
										</div>
										
										<!-- Forgot Password Form -->
										<form action="forgot-password.php" method="POST">
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email" required>
												<label class="focus-label">Email</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="portal.php">Remember your password?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit">Get Temporary Password</button>
                                        </form>
                                        <?php
                                        
                                        if (isset($_POST['submit'])) 
                                        {
                                            $email = $_POST['email'];
											
											$conn = new mysqli("localhost", "root", "", "ics325sp200132");

                                            $sql = "SELECT * FROM clients WHERE client_email='$email'";

                                            $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                            $count = mysqli_num_rows($result);
                                                                                    
                                            if (!$count == 1)
                                            {
												$sql = "SELECT * FROM scheduler WHERE sched_email='$email'";

												$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
												$count = mysqli_num_rows($result);

												if (!$count == 1)
												{
													$sql = "SELECT * FROM admin WHERE admin_email='$email'";

													$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
													$count = mysqli_num_rows($result);

													if (!$count == 1)
													{
														echo "<br>";
                                                		echo "<font color=red size='5pt'>The email you entered does not exist.</font>";
													}
													else
													{	
													$query = "UPDATE admin
													SET admin_password='NZvm7Gn27D'
													WHERE admin_email='$email'";
	
													if (mysqli_query($conn, $query));
													{
														echo "<br>";
														echo "<font color=green size='5pt'>Email Found.</font>";
														echo "<br><br>";
														echo "<font color=green size='5pt'>Your temporary password is: NZvm7Gn27D</font>";
													}
													}
												}
												else
												{	
													$query = "UPDATE scheduler
													SET sched_password='Fs25fLxtRE'
													WHERE sched_email='$email'";
	
													if (mysqli_query($conn, $query));
													{
														echo "<br>";
														echo "<font color=green size='5pt'>Email Found.</font>";
														echo "<br><br>";
														echo "<font color=green size='5pt'>Your temporary password is: Fs25fLxtRE</font>";
													}
												}
                                            } 
                                            else
                                            {	
												$query = "UPDATE clients
                                                SET client_password='WxQjbmQY7T'
                                                WHERE client_email='$email'";

                                                if (mysqli_query($conn, $query));
                                                {
													echo "<br>";
													echo "<font color=green size='5pt'>Email Found.</font>";
                                                    echo "<br><br>";
                                                    echo "<font color=green size='5pt'>Your temporary password is: WxQjbmQY7T</font>";
                                                }
                                            }

                                        }
                                
                                        ?>
										<!-- /Forgot Password Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
							
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

<!-- doccure/forgot-password.html  30 Nov 2019 04:12:20 GMT -->
</html>