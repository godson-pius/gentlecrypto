<?php require_once("admin/config/db.php"); 
	$events = getAll('events');
?>

<?php $page = "Events"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 ">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Upcoming Events</div>
						<h2 class="heading-title heading--half-colored">Our <span class="weight-bold">Events</span>
						</h2>
						<div class="heading-text">Everyday is a bank account, and time is our currency. No one is rich, no one is poor, we've got 24 hours each</div>
					</header>
				</div>
			</div>
		</div> 
	</section>


	<section class="">
		<div class="container">
			<div class="row sorting-container" id="portfolio-grid" data-layout="masonry" data-isotope='{"masonry": { "columnWidth": ".grid-sizer" }}'>
				<div class="grid-sizer"></div>


				<?php
					if (isset($events)) {
						foreach ($events as $event) {
							extract($event); 
							$url_link = str_replace(' ', '-', $title);
							?>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4" style="background-image: url('img/<?= $event_image; ?>')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30"><?= $title; ?></h4>
											<a href="event_details.php?event=<?= $url_link; ?>" class="btn btn--medium btn--transparent btn--secondary">View More</a>
										</div>
									</div>
								</div>

							<?php } } else { ?>
								
								<div style="text-align:center !important;">
									<h3 style="text-align:center;">NO EVENT AVAILABLE</h3>
								</div>

							<?php } ?>

			</div>

			<div class="row align-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="#" class="btn btn--large btn--transparent btn--dark-lighter" id="load-more-button" data-load-link="events-to-load.html" data-container="portfolio-grid">Load More</a>
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
