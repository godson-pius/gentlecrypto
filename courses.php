<?php require_once("admin/config/db.php")?>
<?php $page = "Courses"; ?>
<?php include("./includes/header.php"); ?>

<!-- ... end Header -->

<style>
	.dk {
		color: ghostwhite;
		 !important;
		font-weight: bolder;
	}
</style>

<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Courses</div>
						<h2 class="heading-title heading--half-colored">All <span
								class="weight-bold">Courses</span>
						</h2>
						<div class="heading-text">Our trading courses will teach, guide and correct you through the
							beautiful yet complex world of crypto currency trading.</div>
					</header>
				</div>
			</div>

		</div>
	</section>

	<div class="row" style="padding-right: 95px; padding-left: 95px;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<article class="hentry post post-standard has-post-thumbnail">
	<div class="post-thumb">
		
		<iframe width="1543" height="505" src="https://youtu.be/PpvAxCL2opY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	</div>
</article>
</div>
	</div>

	<div class="container text-center" style="text-align: center !important;">
		<p style="font-size: 20px" class="text-center">Gentlecrypto trading academy is a result oriented crypto currency coaching and mentorship
					platform, a subsidiary of the Gentlecrypto enterprises, where we have structured step by step
					guide on everything you need to know concerning trading crypto assets successfully as an
					independent trader using our flexible yet exclusive training modules within the space of 5 weeks
					We provide one-on-one dedicated mentorship on how to get started and master the art of trading
					crypto currency using our easily accessible consultancy opportunities. Our courses are real time
					course that will earn you real money from your own room, only by applying the strategies we have
					taken our time to explain during the training. We provide weekly alert on how to trade crypto
					currencies, and key crypto currency trading set ups strengthened by fundamental & technical
					analysis for trading opportunities and entries.</p>
	</div>


	<section class="medium-padding120">
		<div class="container">
		<h3>Courses available</h3>
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
	
	$url_link1 = str_replace(' ', '-', "course-details.php?course=$course_name");
	$url_link = str_replace("&apos;", "/", "$url_link1");
?>
				<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 sorting-item">
					<div class="crumina-module crumina-event-item">
						<div class="event-thumb bg-event4" style="background-image: url('tutor_images/<?php echo $tutor_image ?>')">
							<div class="overlay"></div>
						</div>
						<div class="event-content">
							<h4 class="event-title mb30"><?php echo $course_name; ?></h4>
							<a href="<?= $url_link; ?>" class="btn btn--medium btn--transparent btn--secondary">View
								Course</a>
						</div>

						<div class="event-venue"
							style="background-image: url('tutor_images/<?php echo $tutor_image ?>'); background-size:cover;">

							<div class="author-block">

								<div class="author-content">
									<a href="<?= $url_link; ?>" class="author-name dk"><?php echo $tutor ?></a>
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
					<!-- <a href="#" class="btn btn--large btn--transparent btn--dark-lighter" id="load-more-button"
						data-load-link="events-to-load.html" data-container="portfolio-grid">Load More Courses</a> -->
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

		<div class="container" style="margin-top: 30px;">
			<div class=" align-center">
				<h2 class="heading-title heading--half-colored text-center">Course <span
						class="weight-bold">Benefit.</span></h2>
			</div>

			<h4><?= ucwords('Live Education'); ?></h4>
			<p>Can be learnt on any device, Self learn opportunity, Easy to understand terms Informative and exciting.
			</p>
			<hr>

			<h4><?= ucwords('Live trading room'); ?></h4>
			<p>Observe experts in our community trading, Watch us trade in real time and with real money</p>
			<hr>

			<h4><?= ucwords('Signal group'); ?></h4>
			<p>As a student in our academy, you are entitled to one week free profitable signal, from which you can choose to pay to be part of our premium signal group</p> <hr>

			<h4><?= ucwords('General student???s community'); ?></h4>
			<p>24/7 support from members, Genuine and authentic updates, Have crypto knowledge at your finger tips</p>
			<hr>
		</div>

		<div class="container" style="margin-top: 50px;">
			<div class=" align-center">
				<h2 class="heading-title heading--half-colored text-center"><span class="weight-bold">FAQ.</span></h2>
			</div>

			<h4><?= ucwords('What is it?'); ?></h4>
            <p>Gentlecrypto Trading Course is a 5-week program. It shows you how to start trading and investing in
                crypto currencies from scratch to finish and also learn the reasons why you need to acquire a crypto
                trading skill.
            </p>
            <hr>

            <h4><?= ucwords('Why did we create this course?'); ?></h4>
            <p>Because proper education involving technical, fundamentals, risk management, and best trading practices
                are lacking. We have created this course to clear the noise that is filled in the crypto space so as to
                dish out the right info for both newbies and traders. We believe that traders and investors need access
                to proper education before exposing themselves to the volatility of the crypto market </p>
            <hr>

            <h4><?= ucwords('How does it work?'); ?></h4>
            <p>This course is designed to teach beginners and active crypto traders the trading skills, principles and
                strategies that we have prepared help them stay profitable all through their crypto trading career. You
                will learn how to manage your risk, only take your best trades, master your mindset and ultimately
                succeed in the markets.
                You watch the videos, apply the strategies and knowledge you have learnt and start making real money.
            </p>
            <hr>

            <h4><?= ucwords('When does it start?'); ?></h4>
            <p>It starts the moment you enroll. You can complete it in your own time and work through it as slow, or as fast as you wish. So click on the Enrollment link below</p>
            <a href="./courses.php" class="btn btn--medium btn--transparent btn--secondary">Buy our course</a> <br>
            <hr>

            <h4><?= ucwords('Who is it for?'); ?></h4>
            <p>This course is designed to teach complete beginners and active crypto traders the trading skills,
                principles and strategies that we have pioneered to give you an edge in the space from our experience of
                profitable trading career.</p>
            <hr>

            <h4><?= ucwords('Where does it happen?'); ?></h4>
            <p> It is online and you can learn it at your own time and at your pace from the comfort of your home.
                This Crypto currency Trading Course is built around over 30 training lessons, tools, a support network, and a community.</p>
            <hr>

            <h4><?= ucwords('What if I need physically training?'); ?></h4>
            <p> This course has been made in a way that you don???t need me or any member of my team to be physically present before you can apply what was explained in the video. But if you truly desire a physical training, then we can offer you such services no matter your location, just get in touch with our team using support@gentlecrypto.io </p>
            <hr>
		</div>
	</section>

	<div class="container" style="margin-top: 50px;">
			<div class=" align-center">
				<h2 class="heading-title heading--half-colored text-center"><span class="weight-bold">TESTIMONIES.</span></h2>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/a.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/b.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/c.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/d.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/e.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/g.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/h.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/i.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/j.jpg" alt="testimony">
				</div>
				<div class="col-lg-6">
					<img class="testimony" src="./img/testimonies/k.jpg" alt="testimony">
				</div>
			</div>
            <hr>
		</div>

	<?php include("./includes/subscriber.php"); ?>

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