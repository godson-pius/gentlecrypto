<?php //require_once("admin/config/db.php"); 

	if ($_GET['sub'] === 'gta') {
		$title = "Gentlecrypto trading Academy (GTA)";
		$description = "Gentlecrypto trading academy is a result oriented crypto currency coaching and mentorship platform, a subsidiary of the Gentlecrypto enterprises, where we have structured step by step guide on everything you need to know concerning trading crypto assets successfully as an independent trader using our flexible yet exclusive training modules within the space of 5 weeks. We provide one-on-one dedicated mentorship on how to get started and master the art of trading crypto currency using our easily accessible consultancy Services. Our courses are real time course that will earn you real money from your own room, only by applying the strategies we have taken our time to explain during the training. We provide weekly alert on how to trade crypto currencies, and key crypto currency trading set ups strengthened by fundamental & technical analysis for trading opportunities and entries.";

	} else if ($_GET['sub'] === 'gf') {
		$title = "Gentlecrypto foundation (GCF)";
		$description = "
        Gentlecrypto foundation (GCF) is a subsidiary of Gentlecrypto enterprise, a non-profit organization dedicated towards charitable courses across Africa.
        We are proud to pioneer the use of crypto currencies to help charities, in order to help solve global issues in accordance with the sustainable development goals (SDGs) of the United Nations. <br /><br /> 
        
        In Gentlecrypto Foundation, we believe that sustainability is the future of man’s existence on planet earth, with our foundation we intend to contribute towards the continuous existence of man, plants and animal on planet earth. We have this strong believe that crypto currency and blockchain technology have a huge impact on charities and charitable donations globally. <br /><br />
        
        To achieve our objectives for this foundation, we will be partnering with several organizations that have similar drive and objective like we do toward charitable courses in Africa, we will partner with them as written in SDG 17 of the United Nations, and this will help us face societal problems as a united force. <br /><br />
        
        We want to revolutionize the traditional funding system by adopting crypto as a means of donating into (GCF), join us as we donate towards the future of human existence, together we can help all
        <button>Donate today</button> <br /><br />
        
        <h6>Our target </h6>
        
        We wish to focus on achieving the sustainable development goals (SDGs) of the United Nations, this will serve as our civil society responsibility (CSR), as a company and as a business that thrives in Africa. We wish to help Africa solve life threatening human and environmental problems with the funds we shall be raising through our foundation. <br /><br />
        
        We hope to partner with well-meaning civil society organizations (CSOs) in making sure that we reach African at the points of their most pressing needs.
        We shall keep our eyes on the following Goals: <br /><br />

		<div class='row'>
			<div class='col-12'>
				<img src='img/goals.jpeg' width='600' />
			</div>
		</div>
        
        
        <h6>Method of donation:</h6>
        Payments are to be made into any of the wallets below, just copy the wallet ID attached to any of these coins below <br /><br />
        
        
        <h6>
        BITCOIN: bc1qa02zj8ydg23ufa7lwjnraptzxuw0vg9xsj87qf  <br /><br />
        
        ETHERUM (ERC 20): 0x180F0C4eBFfC7BbdCa11a58B093adC4228B5B83F  <br /><br />
        
        BNB: bnb17dx69242h0tjc07nhq6x3ran4gwgkhszc43m5f <br /><br />
        
        SHIBA (ERC 20): 0x180F0C4eBFfC7BbdCa11a58B093adC4228B5B83F <br /><br />
        
        CARDANO(BEP2): bnb17dx69242h0tjc07nhq6x3ran4gwgkhszc43m5f <br /><br />
        
        XRP (NO TAG REQUIRED): rnok3g9G1CprHN8yzcCbuDStdMjpzZQU4N <br /><br />
        </h6> 
        
        
        We also accept fiat using the payment platforms accepted by our company.
        <a class='btn btn-primary' href='https://paystack.com/pay/gentlecrypto-foundation'>Pay Here</a> <br />
        
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
						<div class="heading-sup-title">Gentlecrypto Subsidiary</div>
						<h2 class="heading-title heading--half-colored">.<span class="weight-bold"><?= $title; ?></span>
						</h2>
						<div class="heading-text">Gentlecrypto</div>
					</header>
				</div>
			</div>
		</div>
	</section>


	<section class="">
		<div class="container">





			<div>
				<p style=""><?= ucfirst($description); ?></p>
			</div>



		</div>
		<hr>
</div>
</section>

<?php
	if ($_GET['service'] === 'code') { ?>
		<section>
		<div class="container text-center" style="text-align: center !important; margin-top: 20px;">

			<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js"></script><div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825" currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>

				<a  class='btn btn-primary' href='https://api.whatsapp.com/send?phone=09034931935' style="margin-top: 10px;">Contact us via Whatapp</a>
			

		</div>
	</div>
	
</section>

<?php } ?>

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