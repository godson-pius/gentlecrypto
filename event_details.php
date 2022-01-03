<?php require_once("admin/config/db.php"); 
	
  if (isset($_GET['event'])) {
    $title = $_GET['event'];
    $title = str_replace('-', ' ', $title);

    $get_event = getSingleEvent($title);

    if (isset($get_event)) {
      foreach ($get_event as $event) {
        extract($event);
      }
    }
  }
?>

<?php $page = "Events"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
		<div class="container">
			<div class="row align-center mb60">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">EVENTS DETAILS</div>
						<h2 class="heading-title heading--half-colored">Gentlecrypto</h2>
						<!-- <div class="heading-text">Investigationes demonstraverunt lectores legere elementum.</div> -->
					</header>
					<a data-scroll href="#details" class="btn btn--large btn--secondary btn--transparent">Details</a>
				</div>
			</div>
		</div>
	</section>

	<section class="pt80">
		<div class="container">
			<div id="details" class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="event-details-thumb" style="background-image: url('img/<?= $event_image; ?>'); background-size: cover; background-repeat: no-repeat; background-position: center; ">
						<div class="overlay"></div>
						<div class="crumina-countdown-item">
							<div class="crumina-countdown" data-date="<?= date('Y-m-d', strtotime($event_date)); ?> <?= date('h:i', strtotime($event_time)); ?>"></div>
						</div>

						<div class="event-venue event-venue--details has-popup">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12" data-mh="equal-height">
									<div class="event-date">
										<svg class="woox-icon icon-school-calendar">
											<use xlink:href="#icon-school-calendar"></use>
										</svg>
										<?= date('F d, Y', strtotime($event_date)); ?>
									</div>
									<div class="event-date">
										<svg class="woox-icon icon-placeholder">
											<use xlink:href="#icon-placeholder"></use>
										</svg>
										<?= $venue; ?>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12" data-mh="equal-height">
									<div class="event-date">
										<svg class="woox-icon icon-circular-clock">
											<use xlink:href="#icon-circular-clock"></use>
										</svg>
										<?= date('h:i A', strtotime($event_time)); ?>
									</div>
									<div class="event-date">
										<svg class="woox-icon icon-telephone">
											<use xlink:href="#icon-telephone"></use>
										</svg>
										080 678 76776 77
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="medium-padding120">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h3 heading--with-decoration">
						<h3 class="heading-title">Event description</h3>
						<div class="heading-text">
              <?= $content; ?>
						</div>
					</header>
					
			
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="widget w--help bg-help">
						<h3 class="title">How can we <span class="weight-bold">help you?</span></h3>
						<p class="text">
							You have an issue or what to talk to us?
              We're always available.
						</p>
						<a href="./contacts.php" class="btn btn--large btn--secondary btn--with-icon btn--icon-left">
							<svg class="woox-icon icon-telephone"><use xlink:href="#icon-telephone"></use></svg>
							Contacts
						</a>
					</div>

					<a href="#" class="btn btn--x-large btn--primary btn--transparent btn--with-icon btn--icon-left full-width mb60 mt60">
						<svg class="woox-icon icon-adobe-reader-symbol"><use xlink:href="#icon-adobe-reader-symbol"></use></svg>
						Company Presentation
					</a>

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

<!-- FontAwesome 5.x.x JS -->

<script defer src="fonts/fontawesome-all.js"></script>

<script src="js/main.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>
