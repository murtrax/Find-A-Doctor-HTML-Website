<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

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
		<link href="css/style3.css" rel="stylesheet">
		<link href="css/menu.css" rel="stylesheet">
		<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/myhome.css">
    

</head>

<body style="background-color: #F5F8FA">

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
				<aside class="col-lg-3" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#payment" class="active"><i class="icon_document_alt"></i>Payments</a></li>
								<li><a href="#tips"><i class="icon_document_alt"></i>Suggestions</a></li>
								<li><a href="#terms"><i class="icon_document_alt"></i>Terms&amp;conditons</a></li>
								<li><a href="#booking"><i class="icon_document_alt"></i>Booking</a></li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-9" id="faq">
					<h4 class="nomargin_top">Payments</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="payment">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator icon_minus_alt2"></i>Policy</a>
								</h5>
							</div>

							<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
								<div class="card-body">
									<p>FINDOCTOR employs a fair and open ended policy when it comes to paying its doctors, that is why we only take 5% of the booking fee, this is the lowest
									among any of our competitors!.</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Payment Methods
									</a>
								</h5>
							</div>
							<div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
								<div class="card-body">
									<p>We accept all renowned payment methods including PayPal, Visa, MasterCard, Skrill, Payneer and Union Pay</p>
									
								</div>
							</div>
						</div>
						<!-- /card -->

					</div><br>
					<!-- /accordion payment -->
					
					<h4 class="nomargin_top">Suggestions</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="tips">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Contact Us</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
								<div class="card-body">
									<p>If you feel that there is an area within our website that could feature any general improvements, or if you have experienced any 
									form of rude/abusive behavior from one of our doctors, please feel free to email us at <a href="mailto:support@findoctor.com"> support@findoctor.com </a> </p>
									
								</div>
							</div>
						</div>
						<!-- /card -->
						
					</div><br>
					<!-- /accordion suggestions -->
					
					
					<h4 class="nomargin_top">Terms&amp;conditons</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="terms">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_terms" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Download</a>
								</h5>
							</div>

							<div id="collapseOne_terms" class="collapse" role="tabpanel" data-parent="#terms">
								<div class="card-body">
									<p>If you want to divuldge deeper into our Terms & Conditions you can <a href="#">click Here</a> to download it, or feel free to message us at 
										<a href="mailto:support@findoctor.com"> support@findoctor.com </a> in cause you have an queries</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_terms" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Policies 
									</a>
								</h5>
							</div>
							<div id="collapseTwo_terms" class="collapse" role="tabpanel" data-parent="#terms">
								<div class="card-body">
									<p>Any User and/or Doctor found abusing the site and its users in any way shape or form could have his/her account revoked, and be peanlised 
										under the full extent of the law.
								</div>
							</div>
						</div>
						<!-- /card -->

					</div><br>
					<!-- /accordion Terms -->
					
					<h4 class="nomargin_top">Booking</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="booking">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_booking" aria-expanded="true"><i class="indicator icon_plus_alt2"></i>Introduction</a>
								</h5>
							</div>

							<div id="collapseOne_booking" class="collapse" role="tabpanel" data-parent="#booking">
								<div class="card-body">
									<p>FINDOCTOR gives you the ability to view information on any of your local doctors and book an appointment with them from the lesiure of your smartphone,
									no more having to concur the pain and hassle of having to sit on the line just waiting to speak to the receptionist to book an appointment</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_booking" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Generative Modeling Review
									</a>
								</h5>
							</div>
							<div id="collapseTwo_booking" class="collapse" role="tabpanel" data-parent="#booking">
								<div class="card-body">
									<p>Bookings that are cancelled atleast 3 hours before the appointment incurr no penalty charges, while those that cancel with less than 3 hours remaining 
									have to pay a $20 fine that will be charged on your account</p>
								</div>
							</div>
						</div>
						<!-- /card -->
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseThree_booking" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>Technical Issues
									</a>
								</h5>
							</div>
							<div id="collapseThree_booking" class="collapse" role="tabpanel" data-parent="#booking">
								<div class="card-body">
									<p>If you face any techincal issues while trying to book an appointment such as your payment option is not being recognized or you simply face any given series of random errors please contact us at <a href="mailto:support@findoctor.com"> support@findoctor.com </a></p>
								</div>
							</div>
						</div>
						<!-- /card -->
					</div>
					<!-- /accordion Booking -->
<br>
					<!-- /card -->
                        <h4 class="nomargin_top">Tutorial</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="Tutorial">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFour_Tutorial" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>Video Tutorial
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour_Tutorial" class="collapse" role="tabpanel" data-parent="#Tutorial">
                                <div class="card-body">
                                    <center>
                                     <video width="480" height="300" controls>
                                      <source src="videoplayback.mp4" type="video/mp4">
                                      <source src="videoplayback.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                        </video> <br></center>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /accordion Booking -->

				</div>
				<!-- /col -->
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
	
</body>
</html>