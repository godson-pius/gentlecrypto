<?php require_once("admin/config/db.php"); 

	if (isset($_POST['subscribe'])) {
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];

            $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
            $result = mysqli_query($link, $sql);

            if ($result) {
                echo "<script>alert('Subscribed Successfully');</script>";
            } else {
                echo "<script>alert('Something went wrong! Try again.');</script>";
            }
        } else {
            echo "<script>alert('Please enter your email');</script>";
        }
    }
?>

<div class="container" style="margin-top: 30px;">
	<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-12 col-sm-12 col-xs-12">
					<div class="input-with-btn-inline">
						<form action="" method="POST">
							<input name="email" placeholder="Your Email Address" type="email" value="">
							<button name="subscribe" class="btn btn--large btn--green-light">Subscribe</button>
						</form>
					</div>
					<div class="status"></div>
				</div>

			</div>
	</div>  

    <div class="text-center mx-auto mt-5 container">
    <p style="margin-top: 10px;">On a monthly basis, you'll get any of the following as our subscriber. <br /><b> (1). Monthly VIP trading newsletter <br />(2). Trading plan and journal templates <br />(3). Tools on how to execute your trading strategy <br />(4). Discover our trading styles <br />(5). Business updates <br />(6). Updates concerning upcoming events from our company </b></p>
                    <!-- <ul>
                        <li>Monthly VIP trading newsletter</li>
                        <li>Trading plan and journal templates</li>
                        <li>Tools on how to execute your trading strategy</li>
                        <li>Discover our trading styles</li>
                        <li>Business updates</li>
                        <li>Updates concerning upcoming events from our company</li>
                    </ul> -->
    </div>

</div>