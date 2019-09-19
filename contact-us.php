<?php 
	include ('navbar.html');
?>
		<script>
			document.getElementById("contactUsNav").className = "nav-link active";
		</script>
			<div role="main" class="main">	
				<section class="section section-no-border section-light custom-padding-top-1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 mb-4 mb-lg-0">
								<h2 class="font-weight-bold text-color-primary mb-0">Contact Us</h2>
								<h4 class="font-weight-bold text-color-quaternary">Get in touch</h4>
								<p class="mb-5 pb-2">Become a member with the Best Gym in Delhi and get the best out of your physique. Best Gym in Delhi advices you to join within no time and	witness improved health and fitness. There's lots more out here for body building, gaining and physique development.</p>
								<div class="row">
									<div class="col-md-4">
										<div class="custom-location">
											<img src="img/demos/gym/map/pin.png" alt class="img-fluid" />
											<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">New Delhi</h6>
											<p>
												Shiv Nagar, Street No. 22<br>
												Janakpuri, New Delhi<br>
												<strong>Phone:</strong> <a href="tel:+91" class="text-color-dark">9354301615</a>
											</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="custom-location">
											<img src="img/demos/gym/map/pin.png" alt class="img-fluid" />
											<h6 class="font-weight-bold text-color-quaternary text-5 mb-1">Gurgaon</h6>
											<p>
												D-Block, Jalvayu Towers, Sector-56<br>
												Gurgaon, Haryana<br>
												<strong>Phone:</strong> <a href="tel:+91" class="text-color-dark">9650405342</a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="custom-join-now-form custom-position-style-2 background-color-primary p-4">
									<h4 class="font-weight-bold text-color-light mb-0">Try us Out!</h4>
									<p class="font-weight-light text-color-light text-2">Get a free 5 day VIP guest pass.</p>
									<form id="vipRequest" action="http://localhost/2%20year%20internship/VIP_form.php" method="POST">
										<div class="alert alert-success d-none mt-4" id="vipRequestSuccess">
											<strong>Success!</strong> Your VIP request has been sent to us.
										</div>

										<div class="alert alert-danger d-none mt-4" id="vipRequestError">
											<strong>Error!</strong> There was an error sending your VIP request.
											<span class="text-1 mt-2 d-block" id="vipRequestErrorMessage"></span>
										</div>

										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="30" class="form-control" name="name" id="vipRequestName" placeholder="Your Name" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="30" class="form-control" name="email" id="vipRequestEmail" placeholder="Your E-mail" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="number" value="" data-msg-required="Please enter your phone." min="1000000000" max="9999999999" class="form-control" name="phone" id="vipRequestPhone" placeholder="Your Phone" required 
												oninvalid="this.setCustomValidity('Invalid Phone No.')"
												onvalid="this.setCustomValidity('')" />
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col mb-0">
												<input type="submit" value="Join Now!" class="btn btn-quaternary custom-btn-style-2 font-weight-bold" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-quaternary section-text-light m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<h2 class="font-weight-bold text-color-light">Send us a message</h2>
								<form id="contactFormMessage" class="custom-form-style-1" action="http://localhost/2%20year%20internship/Message_form.php" method="POST">
									<div class="alert alert-success d-none mt-4" id="contactFormMessageSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>

									<div class="alert alert-danger d-none mt-4" id="contactFormMessageError">
										<strong>Error!</strong> There was an error sending your message.
										<span class="text-1 mt-2 d-block" id="contactFormMessageErrorMessage"></span>
									</div>

									<div class="form-row">
										<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="30" class="form-control" name="name" id="contactName" placeholder="Your Name" required>
										</div>
										<div class="form-group col-lg-4 col-sm-4 custom-xs-margin-3">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="30" class="form-control" name="email" id="contactEmail" placeholder="Your E-mail" required>
										</div>
										<div class="form-group col-lg-4 col-sm-4">
											<input type="tel" value="" data-msg-required="Please enter your phone number" maxlength="10" class="form-control" name="phone" id="contactPhone" placeholder="Your Phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="500" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="contactMessage" placeholder="Your Message" required></textarea>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="submit" value="Send Message" class="btn btn-primary font-weight-bold custom-btn-style-3 float-right btn-lg mb-5" data-loading-text="Loading...">
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-5">
								<h2 class="font-weight-bold text-color-light mt-2">Why Us?</h2>
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<ul class="list list-icons list-light text-color-light">
											<li><i class="fas fa-check"></i> Fitness Consultation</li>
											<li><i class="fas fa-check"></i> Professionals</li>
											<li><i class="fas fa-check"></i> Zumba</li>
										</ul>
									</div>
									<div class="col-lg-6 col-sm-6">
										<ul class="list list-icons list-light text-color-light">
											<li><i class="fas fa-check"></i> Conditioning</li>
											<li><i class="fas fa-check"></i> Sports</li>
											<li><i class="fas fa-check"></i> Consultation</li>
										</ul>
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
										<span class="custom-list-value custom-text-color-1">: 5.30am - 11.00pm</span>
									</li>
									<li>
										<span class="custom-list-item custom-spacing-1 text-color-light custom-font-weight-medium">Saturday</span>
										<span class="custom-list-value custom-text-color-1">: 5.30am - 1.00pm</span>
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
			
			
		</div>

		<?php 
				include ('JavaScriptFiles.php');
			?>
		
	</body>
</html>
