<?php require_once("admin/config/db.php"); 
	$events = getAll('events');
?>

<?php $page = "Faq"; ?>
<?php include("./includes/header.php"); ?>
<!-- ... end Header -->


<div class="main-content-wrapper">
    <section data-settings="particles-1" class="main-section crumina-flying-balls particles-js bg-1 ">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
                    <header class="crumina-module crumina-heading heading--h2 heading--with-decoration">
                        <div class="heading-sup-title">Frequently Asked Questions</div>
                        <h2 class="heading-title heading--half-colored"> <span class="weight-bold">FAQ</span>
                        </h2>
                        <div class="heading-text">Everyday is a bank account, and time is our currency. No one is rich,
                            no one is poor, we've got 24 hours each</div>
                    </header>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container">
            
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
            <p> This course has been made in a way that you don’t need me or any member of my team to be physically present before you can apply what was explained in the video. But if you truly desire a physical training, then we can offer you such services no matter your location, just get in touch with our team using support@gentlecrypto.io </p>
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