<!DOCTYPE html>
<html>
	<head>
	
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Delhi Gym | for Fitness Freaks</title>	

		<meta name="keywords" content="best gym near by me" />
		<meta name="description" content="Best Gym in Delhi. Best Gym in Janakpuri.">
		<meta name="author" content="cv-NirmitGym.appspot.com">
		<style>
		#map {
			height: 100%;
			width: 100%;
			margin: 1px;
		}
		</style>
		<script src = "https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function loadMap() {
				var mapOptions = {
					center:new google.maps.LatLng(28.6295, 77.0946), 
					zoom:13, 
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("map"),mapOptions);
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(28.6295, 77.0946),
					map: map,
				});
				var infowindow = new google.maps.InfoWindow({
				   content:"Delhi Best Gym, Shiv Nagar, Jankapuri, New Delhi-110058 "
				});
				infowindow.open(map,marker);
         }
         google.maps.event.addDomListener(window, 'load', loadMap);
      </script>

		<!-- Mobile Metas for responsive site-->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demo-gym.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin-gym.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" class="header-narrow custom-header-style-1" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt':1160, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
				<div class="header-body background-color-quaternary">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.php">
											<img alt="Delhi Gym" width="143" height="50" src="img/demos/gym/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-dark-dropdown justify-content-center">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="index.php">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="about-us.php">
															About Us
														</a>
													</li>
													<li class="dropdown">
														<a class="nav-link dropdown-toggle" href="classes.php">
															Classes
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="classes.php">Overview</a></li>
															<li><a class="dropdown-item" href="classes.php#Group_Fitness">Group Fitness</a></li>
															<li><a class="dropdown-item" href="classes.php#Yoga">Yoga</a></li>
															<li><a class="dropdown-item" href="classes.php#Functional">Functional</a></li>
															<li><a class="dropdown-item" href="classes.php#Spin_Class">Spin Class</a></li>
															<li><a class="dropdown-item" href="classes.php#Zumba">Zumba</a></li>
															<li><a class="dropdown-item" href="classes.php#Conditioning">Conditioning</a></li>
														</ul>
													</li>
													<li>
														<a class="nav-link" href="staff.php">
															Staff
														</a>
													</li>
													<li>
														<a class="nav-link" href="pricing.php">
															Pricing
														</a>
													</li>
													<li>
														<a class="nav-link" href="contact-us.php">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row custom-sm-btn-header-style-1">
									<a class="btn btn-primary btn-join-now text-uppercase custom-font-weight-medium" href="contact-us.php">Join Now</a>
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.7">
						<ul>
							<li data-transition="fade">
								<img src="img/demos/gym/slides/slide-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-bgparallax="1" 
									class="rev-slidebg">
							</li>
							<li data-transition="fade">
								<img src="img/demos/gym/slides/slide-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-bgparallax="1" 
									class="rev-slidebg">
							</li>
						</ul>

						<div class="tp-static-layers">
							<h1 class="tp-caption font-weight-semibold text-color-light tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-50"
									data-start="800"
									data-startslide="0"
									data-endslide="99"
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 76px;">Take Action Now</h1>

								<div class="tp-caption font-weight-normal text-color-light text-uppercase tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="0"
									data-start="800"
									data-startslide="0"
									data-endslide="99"
									data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 22px;">Get ready and start our free trail</div>

								<a href="contact-us.php" class="btn btn-primary tp-caption text-uppercase text-color-light custom-font-weight-medium tp-static-layer"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="80"
									data-start="1500" 
									data-startslide="0"
									data-endslide="99"
									data-fontsize="['15','15','15','24']"
									data-lineheight="['17','17','17','26']"
									style="padding: 15px 25px;"
									data-transform_in="y:[-300%];opacity:0;s:500;">Join Now</a>
							</div>
						</div>
					</div>
				</div>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h2 class="font-weight-bold text-color-quaternary appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><span class="text-color-primary">Get Up!</span> Challenge yourself today</h2>
								<p class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="150">Be the best of your physique, soul and mind. We at the best gym in Delhi prepare bodies like <b>Arnold</b>, minds like <b>Sherlock</b> and soul like <b>water</b>. Come and join the "Cut Above" and make life into fun ride.</p>
								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium text-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300" href="about-us.php">About the Gym</a>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 p-0">
							<section class="packages section-background custom-squared-section custom-small-section-padding custom-overlay-style-1" style="background: url('img/demos/gym/carousels/packages.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Our Packages</h2>
								<ul class="custom-list-style-1">
									<li>
										<span class="custom-list-item text-color-light">Weight Loose</span>
										<span class="custom-list-value text-color-light">: ₹ 999 / month</span>
									</li>
									<li>
										<span class="custom-list-item text-color-light">Personal Training</span>
										<span class="custom-list-value text-color-light">: ₹ 1999 / month</span>
									</li>
									<li>
										<span class="custom-list-item text-color-light">Group Training</span>
										<span class="custom-list-value text-color-light">: ₹ 799 / month</span>
									</li>
									<li>
										<span class="custom-list-item text-color-light">Body Combat</span>
										<span class="custom-list-value text-color-light">: ₹ 999 / month</span>
									</li>
								</ul>
								<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="pricing.php">Pricing</a>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="classes section-background custom-squared-section custom-small-section-padding" style="background: url('img/demos/gym/carousels/classes.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Our Classes</h2>
								<div class="owl-carousel nav-bottom custom-dots-style-1 custom-dots-bottom-left-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
									<div>
										<ul class="custom-list-style-1">
											<li>
												<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
													<img class="custom-icon" src="img/demos/gym/icons/running.png" alt />
													Running
												</span>
											</li>
											<li>
												<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
													<img class="custom-icon" src="img/demos/gym/icons/body-building.png" alt />
													Body Building
												</span>
											</li>
											<li>
												<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
													<img class="custom-icon" src="img/demos/gym/icons/kick-boxing.png" alt />
													Kick Boxing
												</span>
											</li>
											<li>
												<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
													<img class="custom-icon" src="img/demos/gym/icons/yoga.png" alt />
													Yoga
												</span>
											</li>
										</ul>
									</div>
									
								</div>
								<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="classes.php">View Classes</a>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<h2 class="text-color-light font-weight-bold custom-title-position-1">Our Facility</h2>
							<div class="owl-carousel nav-bottom custom-dots-style-1 custom-dots-position-1 m-0" data-plugin-options="{'items': 1, 'animateOut': 'fadeOut', 'loop': false, 'dots': true, 'nav': false}">
								<div class="custom-overlay-style-1 custom-squared-section custom-small-section-padding" style="background: url('img/demos/gym/carousels/facility.jpg'); background-size: cover;">
									<ul class="custom-list-style-1 custom-space-1">
										<li>
											<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
												<img class="custom-icon" src="img/demos/gym/icons/trainer.png" alt />
												Best Trainers
											</span>
										</li>
										<li>
											<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
												<img class="custom-icon" src="img/demos/gym/icons/timing.png" alt />
												Flexible Timing
											</span>
										</li>
										<li>
											<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
												<img class="custom-icon" src="img/demos/gym/icons/cardio.png" alt />
												Cardio Programs
											</span>
										</li>
										<li>
											<span class="custom-list-item custom-list-item-spacing-2 text-color-light">
												<img class="custom-icon" src="img/demos/gym/icons/physiotherapist.png" alt />
												Physiotherapist
											</span>
										</li>
									</ul>
								</div>
							</div>
							<a class="btn btn-quaternary custom-btn-style-4 text-uppercase text-color-light custom-font-weight-medium text-2" href="about-us.php">Learn More</a>
						</div>
					</div>
				</div>

				<section class="section section-center section-no-border section-light">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-sm-8 col-lg-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								<img src="img/demos/gym/icons/trainer-colored.png" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Trainers</h2>
								<p>We have the best of the elite trainers who motivate you to be the best of your body and soul. Join Now!</p>

								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="staff.php" title="Meet The Staff">Meet the Staff</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<img src="img/demos/gym/icons/member-colored.png" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Become a Member</h2>
								<p>Become a member with the Best Gym in Delhi and get the best out of your physique.</p>

								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="contact-us.php" title="Join Now">Join Now</a>
							</div>
							<div class="col-sm-8 col-lg-4 custom-sm-margin-1 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
								<img src="img/demos/gym/icons/group-fitness-colored.png" class="mb-2" alt />
								<h2 class="font-weight-bold text-color-quaternary">Group Fitness</h2>
								<p>Are you into networking, team-making and of course making a wholesome body, then we the Best Gym in Delhi have the best of Group Fitness.</p>

								<a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium" href="classes.php" title="Learn More">Learn More</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-no-border section-quaternary custom-section-featured-image">
					<div class="custom-image-container d-none d-lg-block">
						<img src="img/demos/gym/testimonial/testimonial-woman-1.jpg" class="img-fluid" alt />
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1 mb-0">
									<blockquote>
										<p>I became the beast i always wanted to be with this Best Gym in Delhi</p>
									</blockquote>
									<div class="testimonial-author">
										<p><strong class="text-color-light custom-font-weight-medium">Monica Geller</strong><span>Boxer</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 p-0">
							<section class="resources section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/resources.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Resources</h2>
								<div class="owl-carousel custom-dots-style-2 custom-dots-bottom-left-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
									<div class="custom-resources-style">
										<span class="number background-color-primary text-color-light">1</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>Go out, be the beast you want to be with the Best Gym in Delhi</p>
										</span>
									</div>
									<div class="custom-resources-style">
										<span class="number background-color-primary text-color-light">2</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>Give a head start to your fitness goals. Visit us, the Best Gym in Delhi ASAP.</p>

										</span>
									</div>
									<div class="custom-resources-style">
										<span class="number background-color-primary text-color-light">3</span>
										<span class="content">
											<span class="title text-color-light">
												How to get start
											</span>
											<p>Best Gym in Delhi advices you to join within no time and	witness improved health and fitness. There's lots more out here
											for body building, gaining and physique development.</p>

										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-4 p-0">
							<section class="working-hours section-background custom-wide-section custom-small-section-padding-2 custom-overlay-style-2" style="background: url('img/demos/gym/carousels/working-hour.jpg'); background-size: cover;">
								<h2 class="text-color-light font-weight-bold">Working Hours</h2>
								<ul class="custom-list-style-1 pl-0">
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Mon - Fri</span>
										<span class="custom-list-value custom-text-color-1">: 5.30 am - 11.00 pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Saturday</span>
										<span class="custom-list-value custom-text-color-1">: 5.30 am - 1.00 pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Sunday</span>
										<span class="custom-list-value custom-text-color-1">: Closed</span>
									</li>
								</ul>
							</section>
						</div>
						<div class="col-lg-4 p-0" style="width:100%;height:100%">
							<div id="map"style="width:100%;height:290px"></div>
						</div> 

					</div>
				</div>


			</div>

			<?php 
				include ('footer.html');
			?>
			
		</div>

		<?php 
				include ('JavaScriptFiles.php');
			?>

	</body>
</html>
