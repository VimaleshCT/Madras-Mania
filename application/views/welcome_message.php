<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=" ">
	<title>Madras Mania </title>
	<link rel="shortcut icon" href="assets/img/mm.png" type="image/x-icon">
	<link href="<?php echo base_url(); ?>assets/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/flaticon-set.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/validnavs.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/helper.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/unit-test.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/shop.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />



</head>

<body>
	<div class="top-bar-area top-bar-style-one bg-theme text-light bg-transparent">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-7">
					<ul class="item-flex">
						<li>
							<a href="tel:017622612355">
								<img src="assets/img/icon/6.png" alt="Icon"> +017622612355
							</a>
						</li>
						<li>
							<a href="mailto:name@email.com">
								<img src="assets/img/icon/7.png" alt="Icon"> order@madrasmania.com
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 text-end">
					<a href="https://maps.app.goo.gl/tV3e3ALnAz6gvCD48">Herrenwiesenstraße
						2/1, 69126 Heidelberg, Germany</a>
				</div>
			</div>
		</div>
	</div>
	<header>
		<nav class="navbar mobile-sidenav dark-layout brand-center navbar-default validnavs">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>index">
						<img src="<?php echo base_url(); ?>assets/img/mm.png" class="logo logo-display" alt="Logo">
						<img src="<?php echo base_url(); ?>assets/img/mm.png" class="logo logo-scrolled" alt="Logo">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<img src="assets/img/mm.png" alt="Logo">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-times"></i>
					</button>
					<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="dropdown megamenu-fw">
							<a href="<?php echo base_url(); ?>" class="" data-toggle="">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="aboutUsDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								About Us
							</a>
							<ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
								<li><a class="dropdown-item" href="<?php echo base_url(); ?>aboutus">Brand Story</a>
								</li>
							</ul>
						</li>


						<li class="dropdown">
							<a href="<?php echo base_url(); ?>menu" class="" data-toggle="">Menu</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>gallery" class="" data-toggle="dropdown">Gallery</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>contact" class="" data-toggle="dropdown">Contact Us</a>
						</li>
						<li>
							<div class="button mt-30">
								<a class="btn btn-md btn-theme animation"
									href="<?php echo base_url(); ?>contact">Resevation</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="overlay-screen"></div>
			</div>
		</nav>
	</header>


	<?php $this->load->view($viewpage); ?>

	<a class="btnnn btnnn-md btnnn-theme animation" href="<?php echo base_url(); ?>contact">Reservation</a>
	<footer class="bg-dark text-light">
		<div class="footer-style-two default-padding">
			<div class="container">

				<div class="footer-bottom-shape">
					<img src="assets/img/shape/9.png" alt="Image Not Found">
				</div>

				<div class="footer-top text-center">
					<div class="row">
						<div class="col-lg-12">
							<a href="#"><img src="<?php echo base_url(); ?>assets/img/mm.png" alt="Logo"
									style="height:120px;width:120px;"></a>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item mt-50">
						<div class="f-item about">

							<h4 class="widget-title">About Us</h4>
							<p>
								To unleash the
								Madras’ian within us and give a sneak peek of our exotic cuisine, our brainchild
								<strong style="font-weight: bold; color: #eabf33;">Madras Mania</strong> was born on the
								streets of
								Heidelberg.
							</p>

							<ul class="footer-social">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>

						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
						<div class="f-item link">
							<h4 class="widget-title">Explore</h4>
							<ul>
								<li>
									<a href="<?php echo base_url(); ?>index">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>aboutus">About us</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>menu">Menu</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>gallery">Gallery</a>
								</li>
								<li>
									<a href="<?php echo base_url(); ?>contact">Resevation</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item  mt-50">
						<div class="f-item contact">
							<h4 class="widget-title">Contact Info</h4>
							<ul>
								<li>
									<div class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="content">
										<a href="https://maps.app.goo.gl/tV3e3ALnAz6gvCD48">Herrenwiesenstraße
											2/1, 69126 Heidelberg, Germany</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="fas fa-phone"></i>
									</div>
									<div class="content">
										<a href="tel:017622612355">017622612355</a> <br> <a
											href="tel:017622612355">017622612355

										</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="content">
										<a href="order@madrasmania.com">order@madrasmania.com</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item mt-50">
						<h4 class="widget-title">Online ordering</h4>
						<img src="assets/img/order.png">
					</div>
					<!-- End Singel Item -->


				</div>
			</div>
		</div>

		<!-- Start Footer Bottom -->
		<div class="footer-bottom-two">

			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<p>© Copyright 2024 Madras Mania. All Rights Reserved by <a
								href=" https://godparticles.co.in"><strong
									style="font-weight: bold; color: #eabf33;">God Particles</strong></a></p>
					</div>
					<div class="col-lg-6 text-end">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>">Terms</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>">Privacy</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>">Support</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<button class="btnnn-theme mobile-only" href="<?php echo base_url(); ?>contact">
		<i class="fas fa-calendar-alt"></i>
		<span>Reservation</span> <!-- This will be hidden by default -->
	</button>



	<script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/swiper-bundle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/progress-bar.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/count-to.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.scrolla.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/YTPlayer.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/validnavs.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/gsap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/ScrollTrigger.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>