<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->

		<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/myhome.css">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">

</head>
<body>



<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		

<?php
error_reporting(E_ALL ^ E_NOTICE);  
 $username = $_SESSION['uname'];

	if( isset($_SESSION['uname']) || isset($_SESSION['name']) || isset($_SESSION['email']) || isset($_SESSION['pwd1'] ) )

	{
		echo '<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.php" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li><a href="Login.php"><i class="pe-7s-user"></i></a></li>
						<li><a href="register.php"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="myhome.php" class="show-submenu">Home<i class=""></i></a></li>
							<li class="submenu">
								<a href="mostviewed.php" class="show-submenu">Most Viewed<i class=""></i></a> </li>
							<li class="submenu">
								<a href="Login.php" class="show-submenu">'; echo $username ; echo '<i class=""></i></a> 
								<ul>
									<li><a href="Login.php">View Bookings</a></li>
									<li><a href="php/logout.inc.php">Log out</a></li>

								</ul>
							</li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="contacts.php">Contact Us</a></li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->';
	}
else 
{
	echo '<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.php" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li><a href="Login.php"><i class="pe-7s-user"></i></a></li>
						<li><a href="register.php"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<div class="main-menu">
						<ul>
							<li class="submenu">
								<a href="myhome.php" class="show-submenu">Home<i class=""></i></a></li>
							<li class="submenu">
								<a href="mostviewed.php" class="show-submenu">Most Viewed<i class=""></i></a> </li>
							<li class="submenu">
								<a href="Login.php" class="show-submenu">Log In<i class=""></i></a> 
								<ul>
									<li><a href="Login.php">Log In</a></li>
									<li><a href="register.php">Register</a></li>

								</ul>
							</li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="contacts.php">Contact Us</a></li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->';
}
?>



	<main>
		
		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">General info</a></li>
								<li><a href="#section_2">Reviews</a></li>
								<li><a href="#sidebar">Booking</a></li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-lg-5 col-md-4">
										<figure>
											<img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-lg-7 col-md-8">
										<h1>DR. Asad Ali Shah</h1>
										<span class="rating">
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star"></i>
											<a href="badges.php" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
										</span>
										<ul class="statistic">
											<li>18,000,000 Views</li>
											<li>2,000,000 Patients</li>
										</ul>
										<ul class="contacts">
											<li>
												<h6>Address</h6>
												NUST H-12, Kashmir Highway -
												<a href="https://www.google.com/maps/place/NUST+HQ,+Scholars+Ave,+H-12,+Islamabad,+Islamabad+Capital+Territory,+Pakistan/@33.6425369,72.9907742,17z/data=!3m1!4b1!4m5!3m4!1s0x38df96761c625de1:0x5319baf25f31b172!8m2!3d33.6424084!4d72.9928818" target="_blank"> <strong>View on map</strong></a>
											</li>
											<li>
												<h6>Phone</h6> <a href="tel://000434323342">0900 78601</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<hr>
							
							<!-- /profile -->
							<div class="indent_title_in">
								<i class="pe-7s-user"></i>
								<h3>Professional statement</h3>
								<p>Your only as good as your last patient.</p>
							</div>
							<div class="wrapper_indent">
								<br>
								<h6>Specializations</h6>
								<div class="row">
									<div class="col-lg-6">
										<ul class="bullets">
											<li>Abdominal Radiology</li>
											<li>Addiction Psychiatry</li>
											<li>Adolescent Medicine</li>
											<li>Cardiothoracic Radiology </li>
										</ul>
									</div>
									<div class="col-lg-6">
										<ul class="bullets">
											<li>Abdominal Radiology</li>
											<li>Addiction Psychiatry</li>
											<li>Adolescent Medicine</li>
											<li>Cardiothoracic Radiology </li>
										</ul>
									</div>
								</div>
								<!-- /row-->
							</div>
							<!-- /wrapper indent -->

							<hr>

							<div class="indent_title_in">
								<i class="pe-7s-news-paper"></i>
								<h3>Education</h3>
								<p>Mussum ipsum cacilds, vidis litro abertis.</p>
							</div>
							<div class="wrapper_indent">
								<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
								<h6>Curriculum</h6>
								<ul class="list_edu">
									<li><strong>New York Medical College</strong> - Doctor of Medicine</li>
									<li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
									<li><strong>New York Medical College</strong> - Master Internal Medicine</li>
								</ul>
							</div>
							<!--  End wrapper indent -->

							<hr>

							<div class="indent_title_in">
								<i class="pe-7s-cash"></i>
								<h3>Prices &amp; Payments</h3>
								<br>
								<table class="table table-responsive table-striped">
									<thead>
										<tr>
											<th>Service - Visit</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>New patient visit</td>
											<td>$34</td>
										</tr>
										<tr>
											<td>General consultation</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Back Pain</td>
											<td>$40</td>
										</tr>
										<tr>
											<td>Diabetes Consultation</td>
											<td>$55</td>
										</tr>
										<tr>
											<td>Eating disorder</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Foot Pain</td>
											<td>$35</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--  /wrapper_indent -->
						</div>
						<!-- /section_1 -->
					</div>
					<!-- /box_general -->

					
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form method ="post" action = "php/booking-info.php">
							<div class="title">
							<h3>Book a Visit</h3>
							<small>Monday to Friday 09.00am-06.00pm</small>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<input class="form-control" name= "date" type="text" id="booking_date" data-lang="en" data-min-year="2017" data-max-year="2020" data-disabled-days="10/17/2017,11/18/2017">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<input class="form-control" name = "time" type="text" id="booking_time" value="9:00 am">
									</div>
								</div>
							</div>
							<!-- /row -->
							<ul class="treatments clearfix">
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit1" name="visit1" value="Back Pain visit">
										<label for="visit1" class="css-label">Back Pain visit <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit2" name="visit2" value="Cardiovascular screen">
										<label for="visit2" class="css-label">Cardiovascular screen <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit3" name="visit3" value="Diabetes consultation">
										<label for="visit3" class="css-label">Diabetes consultation <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit4" name="visit4" value="General visit">
										<label for="visit4" class="css-label">General visit <strong>$55</strong></label>
									</div>
								</li>
							</ul>
							<hr>
							<input class="btn_1 full-width" type="submit" name ="submit" value="Book Now">
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->


		


	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<p>
						<a href="index.php" title="Findoctor">
							<img src="img/logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
						</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>About</h5>
					<ul class="links" style="list-style-type: none">
						<li><a href="#0">Home</a></li>
						<li><a href="blog.php">Most Viewed</a></li>
						<li><a href="#0">About Us</a></li>
						<li><a href="login.php">FAQ</a></li>
						<li><a href="register.php">Log In</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Useful links</h5>
					<ul class="links" style="list-style-type: none">
						<li><a href="#0">Doctors</a></li>
						<li><a href="#0">Clinics</a></li>
						<li><a href="#0">Specialization</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4">
					<h5>Contact Us</h5>
					<ul class="contacts" style="list-style-type: none">
						<li><a href="tel://61280932400"><i class="icon_mobile"></i> + 92 051 444 4444</a></li>
						<li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> support@findoctor.com</a></li>
					</ul>
					<div class="follow_us">
						<h5>Social Media</h5>
						<ul>
							<li><a href="#0"><i class="social_facebook"></i></a></li>
							<li><a href="#0"><i class="social_twitter"></i></a></li>
							<li><a href="#0"><i class="social_linkedin"></i></a></li>
							<li><a href="#0"><i class="social_instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2018 Findoctor</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

		<!-- COMMON SCRIPTS -->
		<script src="js/jquery-2.2.4.min.js"></script>
		<script src="js/common_scripts.min.js"></script>
		<script src="js/functions.js"></script>
	     
		<!-- SPECIFIC SCRIPTS -->
		<script src="js/pw_strenght.js"></script>

</body>
</html>