<?php
session_start();	
?>
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
						<a href="index.html" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="main-nav">
								<a href="index.html">Home</a>
							<li class="has-submenu">
								<a href="#">About Us <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="veterinarians.php">Our Veterinarian Team</a></li>
									<li><a href="about.php">Our Application's Purpose</a></li>
									<li><a href="dev.php">Our Developers</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Services <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="wellness.php">Wellness Care</a></li>
									<li><a href="dentistry.php">Dentisrty</a></li>
									<li><a href="vaccine.php">Vaccinations</a></li>
									<li><a href="nutrition.php">Nutrition & Weight Management</a></li>
									<li><a href="allergies.php">Allergies & Dermatology</a></li>
									<li><a href="microchip.php">Microchipping</a></li>
								</ul>
							</li>	
							<li class="main-nav">
								<a href="contact.php">Contact Us</a>
							</li>

						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link header-login" href="portal.php">Pet Portal</a>
						</li>
					</ul>
				</nav>
			</header>