
<?php

  require_once 'config/db.php';
  if(isset($_SESSION["login"])){
    header("location:index.php");
}



 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin dashboard for Gentlecypto enterprise" name="description" />
        <meta content="World Brain Technology" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

        <style>
.error{
    color:red;
    display:none;
}
</style>
    </head>


    <body>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <div id="errb" class="form-control text-center" style="color:white; background-color:orange; display:none;">
                                                <i class="fa fa-exclamation-triangle" id="this"></i>
                                            
                                        </div>
                                        </div>
                                    <form class="form-horizontal" method="POST" onSubmit="return validate();" novalidate action="#">

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="email" required="" placeholder="john@deo.com" name="email">
                                                <i class="fa fa-exclamation-triangle error" id="eemail" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <a href="pages-forget-password.html" class="text-muted pull-right font-14">Forgot your password?</a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                                <i class="fa fa-exclamation-triangle error" id="epass" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                        <div class="form-group m-b-30">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="rem" type="checkbox" name="remember">
                                                    <label for="checkbox5">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
<script>
function validate(){
var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var rem = document.getElementById("rem");
    var remv = 0;
    var msg = document.getElementById("this");
    if(email.length == 0){
        document.getElementById("eemail").style.display="block";
        document.getElementById("eemail").innerHTML="Please Enter Your Email Address";
        return false;
    }
    else{
        document.getElementById("eemail").style.display="none";
    }

    if(password.length == 0){
        document.getElementById("epass").style.display="block";
        document.getElementById("epass").innerHTML="Please Enter your Password";
        return false;
    }
    else{
        document.getElementById("epass").style.display="none";
    }
    if(!(rem.checked)){
       remv = 1;
    }
    $.ajax({
 type: 'post',
 url: 'config/functions.php',
 data: {
  mail:email,
  pass:password,
  loginAdmin:"1",
  rem:remv
 },
 success: function (response) {

  if(response.trim() == "success"){
      alert("Logged In Successfully");
      window.location.href="index.php";
  }
  else{
    document.getElementById("errb").style.display="block";
      msg.innerHTML = response;
      return false;
  }
 }
 });
    return false;
}
</script>
    </body>
</html>
