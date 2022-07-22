<?php require_once("admin/config/db.php"); 
	$products = getAll('products');
?>

<?php $page = "Store"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 ">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Stores</div>
						<h2 class="heading-title heading--half-colored">Gentlecrypto <span class="weight-bold">Store</span>
						</h2>
						<div class="heading-text">Purchase all our company's Branded Materials and Rock Gentlecrypto Enterprise anywhere you go.</div>
					</header>
				</div>
			</div>
		</div>
	</section>

	<div class="container text-center">
		<p class="text-center">
		<h6>First ever crypto gear shop from Africa</h6> <br><br>
		Gentlecrypto stores is your one-stop shop for all things crypto, it is designed by crypto enthusiasts for crypto enthusiasts. <br><br>
		We sell top quality crypto, blockchain and tech branded clothing, accessories and materials. 
		The products in our store are custom made and they ranges from crypto apparels such as crypto branded shirts, NFT branded polos, Track suits, crypto branded hoodies etc.<br><br>
		Scroll through our collections and preorder any item of your choice.<br><br>
		This is an online store for anything crypto, we believe in preaching crypto using what we wear.<br><br>
		We hope that the spread of our branded crypto merchandise and our customers wearing them in public places will help spread crypto and blockchain recognition and adoption across the globe.<br><br>
		Join us in spreading the crypto gospel to your local communities and the world at large.<br><br>
		Note: A percentage of earnings from our store are sent to Gentlecrypto Foundation <br><br>
		<h6>Features</h6>
		High quality <br>
		Fast delivery time <br>
		Simple and Timeless Designs <br>
		Bespoke materials  <br>
		Environmental friendly <br>
		Cloth for all occasions  <br>
		Payment methods <br>
		Our crypto clothing and fashion store, accepts payments in both fiat and crypto <br>
		<h6>7% off when paying with crypto</h6>
		To be informed about our new products and Other important News regarding upcoming products from our store.
Join our mailing list
		</p>
	</div>


	<section class="">
		<div class="container">

			<div class="row sorting-container" id="portfolio-grid" data-layout="masonry" data-isotope='{"masonry": { "columnWidth": ".grid-sizer" }}'>
				<div class="grid-sizer"></div>
				
				<?php
					if (isset($products)) {
						foreach ($products as $product) {
							extract($product); 
							$url_link1 = str_replace(' ', '-', $p_name);
							$url_link = str_replace("&apos;", "/", $url_link1);
							?>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4" style="background-image: url('img/<?= $p_image; ?>')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30"><?= $p_name; ?></h4>
											<a href="product_details.php?product=<?= $url_link; ?>" class="btn btn--medium btn--transparent btn--secondary">View Item</a>
										</div>
									</div>
								</div>

					<?php } } else { echo "No Product"; } ?>


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
