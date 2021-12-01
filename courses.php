<?php require_once("admin/config/db.php")?>
<?php $page = "Courses"; ?>
<?php include("./includes/header.php"); ?>

<!-- ... end Header -->
<style type="text/css">
	.dk {
		color: black !important;
		font-weight: bolder;

	}
</style>

<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
		<div class="container">
			<div class="row align-center mb60">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Courses</div>
						<h2 class="heading-title heading--half-colored">Upcoming <span
								class="weight-bold">Courses</span>
						</h2>
						<div class="heading-text">No matter how busy you may think you are, you must find time for
							reading, or surrender yourself to self-chosen ignorance.</div>
					</header>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12 col-xs-12">
					<div class="input-with-btn-inline">
						<input id='name' name="name" placeholder="Your Email Address" type="text" value="">
						<button class="btn btn--large btn--green-light">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="medium-padding120">
		<div class="container">
			<div class="row sorting-container" id="portfolio-grid" data-layout="masonry"
				data-isotope='{"masonry": { "columnWidth": ".grid-sizer" }}'>
				<div class="grid-sizer"></div>

				<?php

$sql_course = "SELECT * from courses";
$course_result = mysqli_query($link,$sql_course);
      $count_result = mysqli_num_rows($course_result);

    if($count_result != 0){
    while($row_course = $course_result->fetch_assoc()) {
		$course_name = $row_course["course_name"];
  $course_detail = $row_course["course_detail"];
  $tutor = $row_course["tutor"];
    $tutor_image = $row_course["tutor_image"];

?>
				<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 sorting-item">
					<div class="crumina-module crumina-event-item">
						<div class="event-thumb bg-event4">
							<div class="overlay"></div>
						</div>
						<div class="event-content">
							<h4 class="event-title mb30"><?php echo $course_name; ?></h4>
							<a href="#" class="btn btn--medium btn--transparent btn--secondary">View
								Course</a>
						</div>

						<div class="event-venue"
							style="background-image: url('tutor_images/<?php echo $tutor_image ?>'); background-size:cover;">

							<div class="author-block">

								<div class="author-content">
									<a href="#" class="author-name dk"><?php echo $tutor ?></a>
									<div class="author-prof dk">Tutor</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }
?>
			</div>

			<div class="row align-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="#" class="btn btn--large btn--transparent btn--dark-lighter" id="load-more-button"
						data-load-link="events-to-load.html" data-container="portfolio-grid">Load More Courses</a>
				</div>
			</div>
			<?php
}

else{

?>

			<div style="text-align:center !important;">
				<h3 style="text-align:center;">NO COURSES AVAILABLE</h3>
			</div>
			<?php } ?>



		</div>
	</section>

	<section class="bg-dotted-map">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="primary-dots mb30" src="img/dots.png" alt="dots">

					<div class="counters">
						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="10" data-from="2"></span>
								</div>
								<h4 class="counter-title">Facilitators</h4>
								<div class="counter-line"></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="10"
										data-from="2">16</span>
								</div>
								<h4 class="counter-title">Courses</h4>
								<div class="counter-line"></div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<div class="crumina-module crumina-counter-item">
								<div class="counter-numbers counter">
									<span data-speed="2000" data-refresh-interval="3" data-to="20" data-from="2"></span>
								</div>
								<h4 class="counter-title">Students</h4>
								<div class="counter-line"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container align-center" style="margin-top: 30px;">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium aliquam soluta, necessitatibus
				quisquam id quas at rerum optio magnam quaerat voluptatibus quibusdam ea adipisci harum iste praesentium
				minima fugiat laboriosam.</p>
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