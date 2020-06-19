<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Icons-->
			<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
			<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
			<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/menu.css" rel="stylesheet"> 
			<link rel="stylesheet" type="text/css" href="css/style3.css">
			<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
			<link rel="stylesheet" type="text/css" href="css/myhome.css">

</head>
<body>
<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->


<!-- Header -->
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

<!--
<header class="header_sticky">
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

				</nav>
			</div>
		</div>

	</header>
-->




	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>Find a Doctor!</h3>
				<br>

				<form method="post" action="list.php">
					<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class=" search-query" placeholder="Ex. Name, Specialization ....">
							<input type="submit" class="btn_search" value="Search">
						</div>
						<ul>
							<li>
								<input type="radio" id="all" name="radio_search" value="all" checked>
								<label for="all">All</label>
							</li>
							<li>
								<input type="radio" id="doctor" name="radio_search" value="doctor">
								<label for="doctor">Doctor</label>
							</li>
							<li>
								<input type="radio" id="clinic" name="radio_search" value="clinic">
								<label for="clinic">Clinic</label>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
		<!-- /Hero -->





		<!-- DISCOVER SECTION -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>How to make an <strong>online</strong> appointment!</h2>
				<p>Book an appointment in less than 5 minutes</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Find a Doctor</h3>
						<p>Browse through our catalogue off more than 200 qualified Doctors !</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>View profile</h3>
						<p>Browse through a Doctors medical schooling, specalizations and general medical history to find the one best fit for you.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Book a visit</h3>
						<p>Simply select the Doctor you want to book an appointment with, set a time and date, and you'll recieve a confirmation email & text within minutes.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="mostviewed.php" class="btn_1 medium">Find Doctor</a></p>

		</div>
		<!-- /container -->


		<div style="height: 70px;"></div>




		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Most Viewed doctors</h2>
					<p>A catelouged list of some our most viewed and best rated doctors.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.php"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psychiatrist</small>
								<h3>Dr. Aashir Tareen</h3>
								<p>A Renowned Psychiatrist that continues to further advance the field of Psychology ....</p>
							
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="profile.php">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.php"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psychiatrist</small>
								<h3>Dr. Sohaib Ikram</h3>
								<p>A Renowned Psychiatrist that continues to further advance the field of Psychology ....</p>
								
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="profile.php">Book now</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="box_list home">
							<a href="#0" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="wish_bt"></a>
							<figure>

								<a href="detail-page.php"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></a>
								<div class="preview"><span>Read more</span></div>
							</figure>
							<div class="wrapper">
								<small>Psychiatrist</small>
								<h3>Dr. Anas Gondal</h3>
								<p>A Renowned Psychiatrist that continues to further advance the field of Psychology ....</p>
								
								<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"></a>
							</div>
							<ul>
								<li><i class="icon-eye-7"></i> 854 Views</li>
								<li><a href="profile.php">Book now</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
				<p class="text-center add_top_30"><a href="mostviewed.php" class="btn_1 medium">View all Doctors</a></p>
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->

















		<!-- SEARCH BY SECTION -->

		<div class="container margin_120_95" style="margin-bottom: 100px;">
			<div class="main_title">
				<h2>Filter Searches</h2><br>
			</div>

			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-md-4">
					<div class="list_home">
						<div class="list_title">
							<i class="icon_pin_alt"></i>
							<h3>Search by City or Zone</h3>
						</div>
						<ul>
							<li><a href="#0"><strong>23</strong>Albany</a></li>
							<li><a href="#0"><strong>23</strong>Albuquerque</a></li>
							<li><a href="#0"><strong>23</strong>Atlanta</a></li>
							<li><a href="#0"><strong>23</strong>Baltimore</a></li>
							<li><a href="#0"><strong>23</strong>Baton Rouge</a></li>
							<li><a href="#0"><strong>23</strong>Birmingham</a></li>
							<li><a href="#0"><strong>23</strong>Boston</a></li>
							<li><a href="#0"><strong>23</strong>Buffalo</a></li>
							<li><a href="#0"><strong>23</strong>Charleston</a></li>
							<li><a href="#0">More...</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-4">
					<div class="list_home">
						<div class="list_title">
							<i class="icon_archive_alt"></i>
							<h3>Search by type</h3>
						</div>
						<ul>
							<li><a href="#0"><strong>23</strong>Allergist</a></li>
							<li><a href="#0"><strong>23</strong>Cardiologist</a></li>
							<li><a href="#0"><strong>23</strong>Chiropractor</a></li>
							<li><a href="#0"><strong>23</strong>Dentist</a></li>
							<li><a href="#0"><strong>23</strong>Dermatologist</a></li>
							<li><a href="#0"><strong>23</strong>Gastroenterologist</a></li>
							<li><a href="#0"><strong>23</strong>Ophthalmologist</a></li>
							<li><a href="#0"><strong>23</strong>Optometrist</a></li>
							<li><a href="#0"><strong>23</strong>Pediatrician</a></li>
							<li><a href="#0">More....</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-4">
					<div class="list_home">
						<div class="list_title">
							<img src="img/prim.svg" width="40" style="margin-top: 5px; margin-bottom: 11px; padding-top: 2px;">
							<h3>Search by Specialization</h3>
						</div>
						<ul>
							<li><a href="#0"><strong>23</strong>Primary Care</a></li>
							<li><a href="#0"><strong>23</strong>Cardiology</a></li>
							<li><a href="#0"><strong>23</strong>MRI Resonance</a></li>
							<li><a href="#0"><strong>23</strong>Blood Test</a></li>
							<li><a href="#0"><strong>23</strong>Laboratory</a></li>
							<li><a href="#0"><strong>23</strong>Dentistry</a></li>
							<li><a href="#0"><strong>23</strong>X-Ray</a></li>
							<li><a href="#0"><strong>23</strong>Piscologist</a></li>
							<li><a href="#0"><strong>23</strong>Surgery</a></li>
							<li><a href="#0">More...</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

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