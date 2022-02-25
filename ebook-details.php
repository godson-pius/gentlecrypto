<?php require_once("admin/config/db.php"); 

	if ($_GET['ebook'] === 'fastlane') {
		$title = "Crypto fastlane Ebook ";
		$description = "
        Get the Ebook today <br /><br/> 
        Crypto Fastlane is a simplied Ebook on how to get started in the world of crypto at the fastest time possible; it is more like a short cut to the vast world of crypto and blockchain technology.
        It is a detailed guide with precision on current trends in the industry and how best you can begin to amass wealth for yourself at the shortest time possible.<br /><br/> 
        It is imperative to stay updated as it concerns the world of crypto and blockchain technology in today’s fast changing world, you sure need a fast lane in other to match the speed at which the world is advancing. Read this book today, to understand how to speed up your progress in the crypto space. 
        It is free for the first 20 persons to fill the form
        Some chapter includes<br /><br/> 
        
        <h6>You can pre-order your copy today by filling the form below.</h6>
        
		";

	} else if ($_GET['service'] === 'cevs') {
		$title = "Crypto exclusive VIP signals";
		$description = "

		";

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





			<div style="">
				<p style=""><?= ucfirst($description); ?></p>
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