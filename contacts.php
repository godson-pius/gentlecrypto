<?php $page = "Contact"; ?>
<?php include("./includes/header.php"); ?>

<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1">
		<div class="container">
			<div class="row medium-padding120 align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">CONTACTS</div>
						<h2 class="heading-title heading--half-colored">Contact informations</h2>
						<div class="heading-text">GentleCrypto Enterprise giving you the best! Do well to contact us for anything.</div>
					</header>
					<a data-scroll href="#details" class="btn btn--large btn--primary">Contact Details</a>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid">
			<div class="row medium-padding120">
				<div id="details" class="col-lg-8 col-md-6 col-sm-12 col-xs-12 no-padding" data-mh="equal-block">

					<div class="crumina-module crumina-map height-730" id="map">
						<div class="block-location-info">
							<header class="crumina-module crumina-heading heading--h2 heading--with-decoration custom-color c-white">
								<h2 class="heading-title">We’re here</h2>
							</header>
							<h6 class="adress">Enugu State, Nigeria</h6>
						</div>
					</div>

				</div>

				<div class="col-lg-3 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12 d-flex-align-middle mt30" data-mh="equal-block">

					<div>
						<header class="crumina-module crumina-heading heading--h3 heading--with-decoration">
							<h3 class="heading-title heading--half-colored">Contact <b>details</b></h3>
							<div class="heading-text">Do well to contact us, anytime.</div>
						</header>

						<div class="contact-item">
							<h4 class="contact-item-title">Find us</h4>
							<div class="info-wrap">
								<div class="info">Enugu State,</div>
								<span>Nigeria</span>
							</div>
						</div>

						<div class="contact-item" data-mh="equal-block">
						<h4 class="contact-item-title">Contact us</h4>
						<div class="info-wrap">
							<div class="info">Calls Only: <span>+234 8128 681 924</span></div>
							<div class="info">Whatsapp: <span>+234 9034 931 935</span></div>
							<div class="info">Email: <a href="mailto:support@gentlecrypto.io">support@gentlecrypto.io</a></div>
						</div>
						<hr>

						<h4 class="contact-item-title">Work Hours</h4>
						<div class="info-wrap">
						<div class="info"><span>Mon-Fri: 8AM-5PM</span></div>
						</div>

						<ul class="socials socials--double-icons">
							<li class="social-item">
								<a href="https://twitter.com/GentleCrypto?s=09">
									<i class="fab fa-twitter woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="https://youtube.com/channel/UCMee1TkTzEZDtqRYSizJLEw">
									<i class="fab fa-youtube woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="https://instagram.com/gentle_crypto?utm_medium=copy_link">
									<i class="fab fa-instagram woox-icon"></i>
								</a>
							</li>

							<li class="social-item">
								<a href="https://www.facebook.com/Gentlecrypto-Trading-Academy-111172000801563/">
									<i class="fab fa-facebook-square woox-icon"></i>
								</a>
							</li>
						</ul>
					</div>
					</div>

				</div>

			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row pb120">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<h2 class="heading-title heading--half-colored">Get in touch</h2>
					</header>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form class="contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="modules/forms/submit.php">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="input-label control-label">What is your name? <abbr class="required" title="required">*</abbr></label>
									<input name="name" class="form-control input--squared input--dark" type="text" value="Peter Spenser">
								</div>
								<div class="form-group label-floating">
									<label class="input-label control-label">Your email address <abbr class="required" title="required">*</abbr></label>
									<input name="email" class="form-control input--squared input--dark" type="email" value="">
								</div>
								<div class="form-group label-floating">
									<label class="input-label control-label">Subject</label>
									<input name="subject" class="form-control input--squared input--dark" type="text">
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="input-label control-label">Write your message here</label>
									<textarea name="message" class="form-control input--squared input--dark height-170" placeholder=""></textarea>
								</div>
								<button class="btn btn--large btn--primary">Send a Message</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

</div>
<!-- Footer -->
<?php include("./includes/footer.php"); ?>

<!-- ... end Footer -->


<script src="js/method-assign.js"></script>

<!-- jQuery first, then Other JS. -->

<script src="js/jquery-3.3.1.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDpqPQbjKiY7zSvLyPRIWWOfG1XiuhhYg"
		async defer></script>

<script src="js/js-plugins/leaflet.js"></script>
<script src="js/js-plugins/MarkerClusterGroup.js"></script>
<script src="js/js-plugins/crum-mega-menu.js"></script>
<script src="js/js-plugins/waypoints.js"></script>
<script src="js/js-plugins/jquery-circle-progress.js"></script>
<script src="js/js-plugins/segment.js"></script>
<script src="js/js-plugins/bootstrap.js"></script>
<script src="js/js-plugins/imagesLoaded.js"></script>
<script src="js/js-plugins/jquery.matchHeight.js"></script>
<script src="js/js-plugins/jquery-countTo.js"></script>
<script src="js/js-plugins/Headroom.js"></script>
<script src="js/js-plugins/jquery.magnific-popup.js"></script>
<script src="js/js-plugins/popper.min.js"></script>
<script src="js/js-plugins/particles.js"></script>
<script src="js/js-plugins/perfect-scrollbar.js"></script>
<script src="js/js-plugins/jquery.datetimepicker.full.js"></script>
<script src="js/js-plugins/svgxuse.js"></script>
<script src="js/js-plugins/select2.js"></script>
<script src="js/js-plugins/smooth-scroll.js"></script>
<script src="js/js-plugins/sharer.js"></script>
<script src="js/js-plugins/isotope.pkgd.min.js"></script>
<script src="js/js-plugins/ajax-pagination.js"></script>
<script src="js/js-plugins/swiper.min.js"></script>
<script src="js/js-plugins/material.min.js"></script>
<script src="js/js-plugins/orbitlist.js"></script>
<script src="js/js-plugins/highstock.js"></script>
<script src="js/js-plugins/bootstrap-datepicker.js"></script>
<script src="js/js-plugins/TimeCircles.js"></script>
<script src="js/js-plugins/ion.rangeSlider.js"></script>

<script defer src="fonts/fontawesome-all.js"></script>

<script src="js/main.js"></script>

<!-- jQuery-scripts for Modules -->
<script src="modules/forms/src/js/jquery.validate.min.js"></script>
<script src="modules/forms/src/js/sweetalert2.all.js"></script>
<script src="modules/forms/src/js/scripts.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>