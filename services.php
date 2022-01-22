<?php require_once("admin/config/db.php"); 

	if ($_GET['service'] === 'ccct') {
		$title = "Crypto currency coaching/training";
		$description = "enroll with our academy and get to acquire first hand, expert knowledge on what trading is all about, leveraging on our experience in the market. Visit our <a href='courses.php'>Courses page</a> to see our trading courses ";

	} else if ($_GET['service'] === 'cevs') {
		$title = "Crypto exclusive VIP signals";
		$description = "you can subscribe to our various signal packages in the signal section so that you can maximize your profits from trading on your own.";

	} else if ($_GET['service'] === 'ccc') {
		$title = "Crypto currency consultancy";
		$description = "We are open to consultations on issues revolving around crypto currency and any of the digital asset projects. It is entirely free for our students but comes with a fee for those who are none students.";

	} else if ($_GET['service'] === 'ccc') {
		$title = "Crypto currency consultancy";
		$description = "We are open to consultations on issues revolving around crypto currency and any of the digital asset projects. It is entirely free for our students but comes with a fee for those who are none students. You have a question regarding any aspect of digital asset investing or personal finance, then do well to <a href='courses.php'>contact us!</a>";

	} else if ($_GET['service'] === 'cct') {
		$title = "Crypto currency trading";
		$description = "we can help you and trade profitable on the crypto market all you need to do is get your funds to us and we begin";

	} else if ($_GET['service'] === 'ccs') {
		$title = "Crypto currency securities";
		$description = "we can help you keep track with all your crypto currency transactions, acting as a middle man as the case may be, to avoid being scammed or lose of funds";

	} else if ($_GET['service'] === 'basc') {
		$title = "Buying and selling coins";
		$description = "We buy and sell any crypto available to you according to your requirements at a very customer friendly rate";

	} else if ($_GET['service'] === 'code') {
		$title = "Crypto OTC desk/exchange";
		$description = "Buy and sell coins using our OTC Desk, leveraging on our policy of trust, reliability and swift delivery.";

	} else if ($_GET['service'] === 'cces') {
		$title = "Crypto currency escrow services";
		$description = "Be a part of our escrow services, where we link you to potential buyers and sellers with ease and maximum security.";
	}
?>

<?php $page = "Home"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 ">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Gentlecrypto Service</div>
						<h2 class="heading-title heading--half-colored">.<span class="weight-bold"><?= $title; ?></span>
						</h2>
						<div class="heading-text">Learn to acquire</div>
					</header>
				</div>
			</div>
		</div>
	</section>


	<section class="">
		<div class="container">





			<div style="text-align:center !important;">
				<h5 style="text-align:center;"><?= ucfirst($description); ?></h5>
			</div>



		</div>
		<hr>
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