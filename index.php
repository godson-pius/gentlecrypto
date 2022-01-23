<?php $page = "Home"; ?>
<?php include("./includes/header.php"); ?>

<!-- ... end Header -->

<div class="main-content-wrapper">
	<section data-settings="particles-1"
		class="main-section crumina-flying-balls particles-js bg-1 medium-padding120 responsive-align-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
					<img class="responsive-width-50" src="img/bluegentle.png" alt="image">
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h1 heading--with-decoration">
						<h1 class="heading-title f-size-90 weight-normal no-margin">Gentlecrypto
							<span class="weight-bold">Enterprise</span></h1>
						<h3 class="c-primary">...Satisfying your priorities</h3>
					</header>
					<a data-scroll href="about.php" class="btn btn--large btn--transparent btn--secondary">Details</a>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div id="details" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-module-slider crumina-slider--info-boxes">
						<div class="swiper-btn-wrap">
							<div class="swiper-btn-next">
								<svg class="woox-icon icon-line-arrow-right">
									<use xlink:href="#icon-line-arrow-right"></use>
								</svg>
							</div>

							<div class="swiper-btn-prev">
								<svg class="woox-icon icon-line-arrow-left">
									<use xlink:href="#icon-line-arrow-left"></use>
								</svg>
							</div>
						</div>

						<div class="swiper-container auto-height" data-show-items="5" data-prev-next="1">
							<div class="swiper-wrapper">
								<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinPriceBlock.js"></script><div id="coinmarketcap-widget-coin-price-block" coins="1,1027,825,1839,3408,5994,5426,6636,3890,52,4687" currency="USD" theme="dark" transparent="true" show-symbol-logo="true"></div>
								</div>

							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>

	<section class="medium-padding120 responsive-align-center">
		<div class="container">
			<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt30">
					<img class="responsive-width-50" src="img/phone.png" alt="phone">
				</div>
				
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Welcome</div>
						<h2 class="heading-title weight-normal">Desk of the
							<span class="weight-bold">CEO</span></h2>
					</header>

					<p>Gentlecrypto trading academy is a result oriented crypto currency coaching and mentorship
						platform, a subsidiary of the Gentlecrypto enterprises, where we have structured step by step
						guide on everything you need to know concerning trading crypto assets successfully as an
						independent trader using our flexible yet exclusive training modules within the space of 5 weeks
						We provide one-on-one dedicated mentorship on how to get started and master the art of trading
						crypto currency using our easily accessible consultancy opportunities. Our courses are real time
						course that will earn you real money from your own room, only by applying the strategies we have
						taken our time to explain during the training. We provide weekly alert on how to trade crypto
						currencies, and key crypto currency trading set ups strengthened by fundamental & technical
						analysis for trading opportunities and entries.
					</p>


				</div>
			</div>
		</div>
	</section>

	<section class="bg-1">

		<div class="container">
			<div class="row">
				<div class="crumina-module crumina-featured-block">
					<div class="text-block">
						<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
							<h2 class="heading-title weight-normal">Our
								<span class="weight-bold">Vision</span></h2>
							<div class="heading-text">We are looking at pioneering blockchain adoption among African
								companies and businesses in multi-sectorial corporations by creating sustainable
								solutions to basic human needs within Africa and beyond through leveraging on the power
								of blockchain and artificial intelligence.
							</div>
						</header>
					</div>
					<div class="text-block">
						<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
							<h2 class="heading-title weight-normal">Our
								<span class="weight-bold">Mission</span></h2>
							<div class="heading-text">building a community of successful independent digital asset
								traders
								Our academy strategically places our students ahead of others when it comes to crypto
								currency trading and coaching.
							</div>
						</header>
					</div>
				</div>
			</div>
			
		</div>
</div>

</section>

	<section class="bg-dotted-map">
		<div class="container medium-padding120">
			<div class="row align-center">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img class="primary-dots mb30 " src="img/dots.png" alt="dots">

					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<h2 class="heading-title weight-normal">Our Services</h2>
					</header>

					<section class="">
						<div class="container">
							<div class="row sorting-container" id="portfolio-grid" data-layout="masonry"
								data-isotope='{"masonry": { "columnWidth": ".grid-sizer" }}'>
								<div class="grid-sizer"></div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/coaching.jpeg')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto currency coaching/training</h4>
											<p>
												<?= substr('Enroll with our academy and get to acquire first hand, expert knowledge
												on what trading is all about, leveraging on our experience in the
												market. Visit the botton below to see our trading courses', 0, 100) ?>....
											</p>

											<a href="services.php?service=ccct"
												class="btn btn--medium btn--transparent btn--secondary">Know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/bg-help.png')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto exclusive VIP signals</h4>
											<p>
												<?= substr('you can subscribe to our various signal packages in the signal section so
												that you can maximize your profits from trading on your own. The signals
												are for those traders seeking to increase their chances of landing
												themselves in consistent profitable traders.', 0, 100) ?>....
											</p>
											<a href="services.php?service=cevs"
												class="btn btn--medium btn--transparent btn--secondary">Know More</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/consultancy.jpeg')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto currency consultancy</h4>
											<p>
												<?= substr('We are open to consultations on issues revolving around crypto currency
												and any of the digital asset projects. It is entirely free for our
												students but comes with a fee for those who are none students.
												You have a question regarding any aspect of digital asset investing or
												personal finance, then click on the button below to book an appointment
												with our experts', 0, 100) ?>....
											</p>
											<a href="services.php?service=ccc"
												class="btn btn--medium btn--transparent btn--secondary">Know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/trading.jpeg')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto currency trading</h4>
											<p>
												<?= substr('we can help you and trade profitable on the crypto market all you need to
												do is get your funds to us and we begin.', 0, 100) ?>....
											</p>

											<a href="services.php?service=cct"
												class="btn btn--medium btn--transparent btn--secondary">Know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/bg-help.png')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto currency securities</h4>
											<p>
												<?= substr('we can help you keep track with all your crypto currency transactions,
												acting as a middle man as the case may be, to avoid being scammed or
												lose of funds', 0, 100) ?>....
											</p>

											<a href="services.php?service=ccs"
												class="btn btn--medium btn--transparent btn--secondary">Know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/buying.jpeg')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Buying and selling coins</h4>
											<p>
												<?= substr('We buy and sell any crypto available to you according to your
												requirements at a very customer friendly rate', 0, 100) ?>....
											</p>

											<a href="services.php?service=basc"
												class="btn btn--medium btn--transparent btn--secondary">know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/desk.jpeg')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto OTC desk/exchange</h4>
											<p>
												<?= substr('Buy and sell coins using our OTC Desk, leveraging on our policy of trust,
												reliability and swift delivery.', 0, 100) ?>....
											</p>

											<a href="services.php?service=code"
												class="btn btn--medium btn--transparent btn--secondary">know more</a>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sorting-item">
									<div class="crumina-module crumina-event-item">
										<div class="event-thumb bg-event4"
											style="background-image: url('img/bg-help.png')">
											<div class="overlay"></div>
										</div>
										<div class="event-content">
											<h4 class="event-title mb30">Crypto currency escrow services</h4>
											<p>
												<?= substr('Be a part of our escrow services, where we link you to potential buyers
												and sellers with ease and maximum security.', 0, 100) ?>....
											</p>

											<a href="services.php?service=cces"
												class="btn btn--medium btn--transparent btn--secondary">Know more</a>
										</div>
									</div>
								</div>


							</div>
						</div>
					</section>


				</div>
			</div>
		</div>
	</section>

	<section class="bg-1">

		<div class="container">
			<div class="row">
				
			</div>
			<div class="crumina-module crumina-featured-block">
				<div class="image-block">
					<img src="img/pc.png" alt="phone">
				</div>
				<div class="text-block">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<h2 class="heading-title weight-normal">Greatest
							<span class="weight-bold">Quote</span></h2>
						<div class="heading-text">If you venture into crypto currency without it's knowledge, you
							will be forced to rush out of it with heart breaking losses.</div>
					</header>
				</div>
			</div>
		</div>

		<div class="row pb100 medium-padding120">
			<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
				<h2 class="heading-title heading--half-colored" style="text-align: center; width: 100%;">Our
					Partners</h2>
			</header>
			<div class="col-lg-12 col-md-12 col0sm-12 col-xs-12">
				<div class="crumina-module crumina-module-slider clients--slider navigation-center-both-sides">

					<div class="swiper-btn-next">
						<svg class="woox-icon icon-line-arrow-right">
							<use xlink:href="#icon-line-arrow-right"></use>
						</svg>
					</div>

					<div class="swiper-btn-prev">
						<svg class="woox-icon icon-line-arrow-left">
							<use xlink:href="#icon-line-arrow-left"></use>
						</svg>
					</div>

					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
							<div class="swiper-container" data-show-items="5" data-prev-next="1">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<a class="clients-item" href="#">
											<img src="img/wbtlogo.png" width="125" class="" alt="logo">
										</a>
									</div>
									<div class="swiper-slide">
										<a class="clients-item" href="#">
											<img src="img/tfi.png" class="" alt="logo">
										</a>
									</div>
									<div class="swiper-slide">
										<a class="clients-item" href="#">
											<img src="img/client3.png" class="" alt="logo">
										</a>
									</div>
									<div class="swiper-slide">
										<a class="clients-item" href="#">
											<img src="img/client4.png" class="" alt="logo">
										</a>
									</div>
									<div class="swiper-slide">
										<a class="clients-item" href="#">
											<img src="img/client5.png" class="" alt="logo">
										</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="divider">
</div>

</section>

<section>
	<div class="container mt100">
		<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
			<h2 class="heading-title heading--half-colored" style="text-align: center; width: 100%;">Testimonies
			</h2>
		</header>
		<div class="row ">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30">
				<div class="crumina-module crumina-module-slider navigation-bottom-both-sides">
					<div class="swiper-container" data-show-items="1" data-prev-next="1">
						<div class="swiper-btn-next">
							<svg class="woox-icon icon-line-arrow-right">
								<use xlink:href="#icon-line-arrow-right"></use>
							</svg>
						</div>

						<div class="swiper-btn-prev">
							<svg class="woox-icon icon-line-arrow-left">
								<use xlink:href="#icon-line-arrow-left"></use>
							</svg>
						</div>

						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div
									class="crumina-module crumina-testimonial-item testimonial--style2 has-border-arrow">
									<div class="avatar avatar80">
										<img src="img/author2.jpg" alt="avatar">
									</div>
									<div class="testimonial-content">
										<div class="block--with-arrow-bottom-center">
											<div class="block-arrow-down"></div>
										</div>
										<h6 class="testimonial-text">
											<svg class="woox-icon icon-quote-icon quote">
												<use xlink:href="#icon-quote-icon"></use>
											</svg>
											<svg class="woox-icon icon-quote-icon2 quote quote-close">
												<use xlink:href="#icon-quote-icon2"></use>
											</svg>
											It's been awesome class with GentleCrypto trading academy, the beginners
											class was a good one. Unto the advanced class we go.
										</h6>
									</div>

									<div class="author-content">
										<a href="#" class="author-name">A Divine Martins</a>
										<div class="author-prof">Student</div>
									</div>

									<ul class="rait-stars">
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>

										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
									</ul>
								</div>
							</div>
							<div class="swiper-slide">
								<div
									class="crumina-module crumina-testimonial-item testimonial--style2 has-border-arrow">
									<div class="avatar avatar80">
										<img src="img/author2.jpg" alt="avatar">
									</div>
									<div class="testimonial-content">
										<div class="block--with-arrow-bottom-center">
											<div class="block-arrow-down"></div>
										</div>
										<h6 class="testimonial-text">
											<svg class="woox-icon icon-quote-icon quote">
												<use xlink:href="#icon-quote-icon"></use>
											</svg>
											<svg class="woox-icon icon-quote-icon2 quote quote-close">
												<use xlink:href="#icon-quote-icon2"></use>
											</svg>
											I really want to appreciate GentleCrypto Trading Academy for this great
											training. I find it well prepared and helpful. I've gained a strong
											knowledge of crypto trading.
										</h6>
									</div>

									<div class="author-content">
										<a href="#" class="author-name">Oluwaseyi Trust</a>
										<div class="author-prof">Student</div>
									</div>

									<ul class="rait-stars">
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>

										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
									</ul>
								</div>
							</div>
							<div class="swiper-slide">
								<div
									class="crumina-module crumina-testimonial-item testimonial--style2 has-border-arrow">
									<div class="avatar avatar80">
										<img src="img/author2.jpg" alt="avatar">
									</div>
									<div class="testimonial-content">
										<div class="block--with-arrow-bottom-center">
											<div class="block-arrow-down"></div>
										</div>
										<h6 class="testimonial-text">
											<svg class="woox-icon icon-quote-icon quote">
												<use xlink:href="#icon-quote-icon"></use>
											</svg>
											<svg class="woox-icon icon-quote-icon2 quote quote-close">
												<use xlink:href="#icon-quote-icon2"></use>
											</svg>
											This is an awesome course as he broke down every single aspects of the
											market for beginners. Not only was the teaching experience great, he
											also gave some great ebooks to kick start and get familiar with some
											market trading terms. This is a great chance as he has now become a
											crypto trading coach for all students
										</h6>
									</div>

									<div class="author-content">
										<a href="#" class="author-name">Joshua Uzoagulu</a>
										<div class="author-prof">Student</div>
									</div>

									<ul class="rait-stars">
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>

										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
										<li>
											<svg class="woox-icon icon-star-1">
												<use xlink:href="#icon-star-1"></use>
											</svg>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<hr class="divider">
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