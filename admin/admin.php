<?php
session_start();

require "dbh.php";
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
<head>
    <style>
table, th, td {
  border: 1px solid black;
}
table {
  width: 100%;
}

th {
  height: 50px;
}
th {
  text-align: left;
}
th, td {
  padding: 15px;
  text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #f5f5f5;}
.table-spacing{
   border-spacing:5px;
}
</style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>ICS 325 VET</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
                </div>
				<!-- /Logo -->
				

				
				<div class="top-nav-search">
					<form>

					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->

					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="index.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Admin Admin"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
                                <?php
										
										echo "<h6>". $_SESSION['sess_user'] ."</h6>";
									?>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="index.php">Change Password</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li> 
								<a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="user.php"><i class="fe fe-layout"></i> <span>Clients</span></a>
							</li>
							<li> 
								<a href="scheduler.php"><i class="fe fe-layout"></i> <span>Schedulers</span></a>
							</li>
							<li class="active"> 
								<a href="admin.php"><i class="fe fe-layout"></i> <span>Admins</span></a>
							</li>

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Admins</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Overview</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
                            <!-- <H3>Clients</h3> -->
						
                            
                                <?php
                        
                        $sql = "SELECT * FROM admin ORDER BY admin_id ASC";
                        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
                        
                        echo
                            "<table>
                            <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th> 
                            <th>Email</th> 
                            <tr>";
                        
                            while($row = mysqli_fetch_array($result)) 
                            {
                                echo '<tr>
                                <td>'.$row["admin_id"].'</td>
                                <td>'.$row["admin_fname"].' </td>
                                <td>'.$row["admin_lname"].'</td>   
                                <td>'.$row["admin_email"].'</td>            
                            </tr>';
                            }
                            "</table>";
                        
                        ?>
                        <div class="submit-section">
						<a class="btn btn-success btn-sm" href="add-admin.php">Add an Admin</a>
						<a class="btn btn-danger btn-sm" href="remove-admin.php">Disable a Admin</a>
											
										</div>
						</div>			
					</div>
					
				</div>			
            </div>
            
			<!-- /Page Wrapper -->
		
        </div>
        <!-- /Main Wrapper -->
        
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:53 GMT -->
</html>