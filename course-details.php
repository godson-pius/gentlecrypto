<?php require_once("admin/config/db.php"); 
	
  if (isset($_GET['course'])) {
    $name = $_GET['course'];
	
    $name1 = str_replace('-', ' ', $name);
    $name = str_replace("/", "'", $name1);

    $get_course = getSingleCourse($name);

    if (isset($get_course)) {
      foreach ($get_course as $course) {
        extract($course);
      }
    }

	if (isset($_SESSION['id'])) {
		$check = check_duplicate_purchase('course_payments', 'user_id', $_SESSION['id'], 'course_id', $id);
	}
  }

  $courses = getAllFromTable('courses', 5);
  $events = getAllFromTable('events', 10);
?>

<?php $page = "Courses"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
	<section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 medium-padding120">
		<div class="container">
			<div class="row align-center">
				<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
					<header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
						<div class="heading-sup-title">Course Details</div>
						<h2 class="heading-title heading--half-colored">Become the best version of yourself</h2>
					</header>

					<div class="post-details-wrap">
						<div class="post__date">
							<a href="#" class="number"><?= date('d', strtotime($created_at)); ?></a>
							<time class="published" datetime="2018-03-14 12:00:00">
								<?= date('F', strtotime($created_at)); ?>,
								<span><?= date('Y', strtotime($created_at)); ?></span>
							</time>
						</div>

						<div class="author-block">
							<div class="avatar avatar60 team-img"
								style="background-image: url('tutor_images/<?= $tutor_image; ?>'); width: 60px; height: 60px; background-position: center; background-repeat: no-repeat; background-size: cover;">

							</div>
							<div class="author-content">
								<div class="author-prof">Tutor</div>
								<a href="#" class="author-name"><?= ucfirst($tutor); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="medium-padding120">
		<div class="container">
			<div class="row pb60">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<article class="hentry post post-standard has-post-thumbnail video">
						<div class="post-thumb">
							
							<iframe width="1543" height="505" src="<?php echo ($course_video) ? $course_video : 'https://www.youtube.com/embed/cx816XUw4XA';  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

						</div>
					</article>
				</div>

				<!-- Blog posts-->
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<article class="hentry post post-standard has-post-thumbnail video post-standard-details">
						<div class="post-additional-info">
							<div class="btn btn--round btn--share-in-down btn--share-js">
								<svg class="woox-icon icon-share">
									<use xlink:href="#icon-share"></use>
								</svg>
								<div class="shared-wrap">
									<ul class="socials">
										<li class="social-item">
											<a data-sharer="facebook" data-hashtag="hashtag"
												data-url="https://ellisonleao.github.io/sharer.js/">
												<svg viewBox="0 0 112.2 112.2" class="woox-icon">
													<circle cx="56.1" cy="56.1" r="56.1" fill="#3b5998" />
													<path fill="#fff"
														d="M70.2 58.3h-10v36.67H45.01V58.29h-7.2V45.41h7.2v-8.34c0-5.97 2.84-15.3 15.3-15.3l11.24.04v12.51H63.4c-1.34 0-3.22.67-3.22 3.51v7.59h11.34L70.2 58.29z" />
												</svg>
											</a>
										</li>
										<li class="social-item">
											<a data-sharer="buffer" data-via="ellisonleao"
												data-picture="https://ellisonleao.github.io/sharer.js/img/socialbg.png"
												data-title="Sharer.js is the ultimate sharer js lib"
												data-url="https://ellisonleao.github.io/sharer.js/">
												<svg viewBox="0 0 112.2 112.2" class="woox-icon">
													<circle cx="56.1" cy="56.1" r="56.1" fill="#55acee" />
													<path fill="#f1f2f2"
														d="M90.46 40.32a26.75 26.75 0 0 1-7.7 2.1 13.45 13.45 0 0 0 5.9-7.41 26.84 26.84 0 0 1-8.52 3.25A13.41 13.41 0 0 0 57.3 50.5a38.06 38.06 0 0 1-27.64-14 13.4 13.4 0 0 0 4.15 17.9c-2.2-.08-4.26-.68-6.07-1.69v.17c0 6.5 4.62 11.92 10.75 13.15a13.36 13.36 0 0 1-6.05.23c1.7 5.33 6.66 9.2 12.52 9.32a26.9 26.9 0 0 1-19.85 5.55 37.93 37.93 0 0 0 20.56 6.02C70.32 87.14 83.8 66.71 83.8 49c0-.58-.02-1.16-.04-1.73a27.2 27.2 0 0 0 6.7-6.94z" />
												</svg>
											</a>
										</li>
										<li class="social-item">
											<a data-sharer="pinterest"
												data-url="https://ellisonleao.github.io/sharer.js/">
												<svg viewBox="0 0 473.9 473.9" class="woox-icon">
													<circle cx="237" cy="237" r="237" fill="#d42028" />
													<path fill="#fff"
														d="M173.4 123.1c-35.6 14.1-59.8 41.3-66.6 77.9-4.2 22.5-2.6 47 7.4 68 2.2 4.7 4.9 9.2 8 13.3 1.5 2 3.2 4 5 5.8 3.2-1.1 6.2-2.5 9.1-4.2 12-6.8 20.9-17.3 31.2-26.1-34.5-39.9 2.1-89.4 47.7-100.4 42.5-10.3 100.2 7.4 113.1 51.2 5.3 18.1 1.8 38.2-12.9 51.3-7.7 6.9-17.5 11.4-27.9 13.3a66.8 66.8 0 0 1-18.4.6c-3.4-.3-6.8-.9-10.1-1.7-5.7-1.3-10.7-1.1-10.7-7.2v-71.8c0-4.9.5-4-3.6-4.5-3.2-.4-6.4-.7-9.6-1-11.3-.9-23.1-1.5-34.3.4-4.2.7-4.5 0-4.5 4.6v37.8c0 26.7 2 53.8.9 80.4-.3 8-.5 27-9.4 31-10.3 4.6-19.4-5.1-28.9-7.1 1.3 13.4-7.1 39.9 8.5 46.7 14.3 6.2 30.8 8.5 45.9 3.4 31.6-10.7 41.8-45.9 37.8-74.8 48.8 14.6 101.5-9.8 122.4-53.9 14.9-31.4 8.6-70.4-13.8-97.1-41.9-49.8-127-59.4-186.3-35.9z" />
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<div class="post__content">

							<header class="crumina-module crumina-heading heading--h4 heading--with-decoration">
								<h4 class="heading-title"><?= strtoupper($course_name); ?></h4>
							</header>
							<p class="post__text">
								<?= $course_detail; ?>
							</p>

							<a id="purchase"
								class="btn btn--large btn--secondary btn--transparent btn--with-icon btn--icon-right">
								Buy Course
							</a>
						</div>
					</article>


				</div>
				<!-- End Course Details Content-->

				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

					<aside aria-label="sidebar" class="sidebar sidebar-left">
						<aside class="widget w-latest-news">
							<img class="primary-dots" src="img/dots-5.png" alt="dots">
							<h5 class="widget-title">Other Courses</h5>

							<?php
								if (!empty($courses)) {
									foreach ($courses as $sCourse) {
										$course_name = $sCourse['course_name'];	
										$url_link = str_replace(' ', '-', "course-details.php?course=$course_name"); ?>

							<ul class="latest-news-list">
								<li>
									<article itemscope="" itemtype="http://schema.org/NewsArticle"
										class="latest-news-item">

										<div class="post__date">
											<time class="published" datetime="2018-03-08 12:00:00">
												<span
													class="number"><?= date('d', strtotime($sCourse['created_at'])); ?></span>
												<?= date('F, Y', strtotime($sCourse['created_at'])); ?>
											</time>
										</div>

										<a href="<?= $url_link; ?>"
											class="h6 post__title entry-title"><?= $sCourse['course_name']; ?></a>
										<hr class="divider">
									</article>
								</li>

							</ul>

							<?php } } ?>

							<a href="./courses.php"
								class="btn btn--large btn--secondary btn--transparent btn--with-icon btn--icon-right">
								All Courses
								<svg class="woox-icon icon-arrow-right">
									<use xlink:href="#icon-arrow-right"></use>
								</svg>
							</a>

						</aside>



						<aside class="widget w-upcoming-events">

							<img class="primary-dots" src="img/dots-5.png" alt="dots">
							<h5 class="widget-title">Upcoming Events</h5>

							<div class="crumina-module crumina-module-slider pagination-bottom-center">
								<div class="swiper-container">

									<div class="swiper-wrapper">

										<?php
								if (!empty($events)) {
									foreach ($events as $event) { ?>

										<div class="swiper-slide">
											<div class="crumina-module crumina-event-item">
												<div class="event-content">
													<div class="event-date">
														<svg class="woox-icon icon-school-calendar">
															<use xlink:href="#icon-school-calendar"></use>
														</svg>
														<?= date('M d, Y', strtotime($event['event_date'])); ?>
													</div>
													<h4 class="event-title"><?= $event['title']; ?></h4>

													<div class="author-block">
														<div class="avatar avatar60">
															<img src="img/<?= $event['event_image']; ?>" alt="avatar">
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php } } ?>

									</div>
								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination swiper-pagination--small"></div>
							</div>
						</aside>

					</aside>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDpqPQbjKiY7zSvLyPRIWWOfG1XiuhhYg" async defer></script>

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


<!-- Custom -->
<!-- <script src="js/custom.js"></script> -->
<?php
	if (isset($_SESSION['user'])) { 
		$id = $_SESSION['id'];
		$cuser = currentUser($id);

		foreach ($cuser as $user) {
			extract($user);
		}?>
<script>
	const API_publicKey = "pk_test_212c6a956274335d640891ce188317a046abd95a";
	const purchaseBtn = document.getElementById('purchase')

	purchaseBtn.addEventListener('click', (e) => {
		e.preventDefault()

		<?php 
			if ($check) { ?>
				alert('Hi <?= $last_name; ?>, You already purchased this course.');
			<?php } else { ?>
				let price = <?= $course_price; ?>;
		let user_id = <?= $user['id']; ?>;
		let course_id = <?= $course['id']; ?>;

		let handler = PaystackPop.setup({
			key: API_publicKey, // Replace with your public key
			email: "<?= $email; ?>",
			amount: price * 100,
			ref: 'GC' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
			// label: "Optional string that replaces customer email"
			
			callback: function (response) {

				fetch(`users/payments/course.php?amount=${price}&trx=${response.trxref}&course=${course_id}&user=${user_id}`).then(e => e).then(e => e.text()).then(e => {
				console.log(response.message);
						//Response
					})

					alert('Your payment for <?= $course['course_name']; ?> was successful! We will approve your payment soon.');
					window.location.reload();
			},

			onClose: function () {
				alert('Payment cancelled!.');	
			}
		});
		handler.openIframe();

		<?php } ?>

	})
</script>
<?php } else { ?>

<script>
	const purchaseBtn = document.getElementById('purchase')
	purchaseBtn.addEventListener('click', (e) => {
		e.preventDefault()

		alert('You need to be a user before you can purchase course');
		window.location.href = 'users/pages-register.php';
	})
</script>

<?php } ?>

</body>

</html>