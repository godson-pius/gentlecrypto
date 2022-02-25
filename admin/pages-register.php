<?php
session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"] == "admin"){
      header("admin_dashboard:index.php");
    }
    
    else{
      header("location:account.php");
    }
 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
    <div id="spin" style="width:100%; height: 900px; background-color:rgb(000,000,000,0.4); display:none;  position:absolute;Z-index:1000; text-align:center">
<i class="fa fa-spinner fa-pulse" style="font-size:50px; text-align:center; color:blue; margin-top:300px"></i></div>
  
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
                                                <div id="errb" class="form-control text-center" style="color:white; background-color:orange; display:none;"><i class="fa fa-exclamation-triangle" id="this"></i>
                                           
                                        </div>
                                        </div>
                                    <form class="form-horizontal" method="POST" onSubmit="return validate();" novalidate action="#">

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="username">First Name</label>
                                                <input class="form-control" type="text" id="fname" required="" placeholder="Michael Zenaty">
                                            <i class="fa fa-exclamation-triangle error" id="efname" aria-hidden="true"></i>
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="username">Last Name</label>
                                                <input class="form-control" type="text" id="lname" required="" placeholder="johndoe">
                                            <i class="fa fa-exclamation-triangle error" id="elname" aria-hidden="true"></i>
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="email" required="" placeholder="john@deo.com">
                                           
                                            <i class="fa fa-exclamation-triangle error" id="eemail" aria-hidden="true"></i>
                                        </div>
                                        </div>

                                        

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                                <div class="row">
                                                <label for="password" class="col-8">Password</label> <span class="col-3 text-center" id="StrengthDisp" style="display:none; background-color:red; color:white; border-radius:10px; margin-bottom:1%" class="badge displayBadge">Weak</span>
</div>
                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                            
                                            <i class="fa fa-exclamation-triangle error" id="epass" aria-hidden="true"></i>
                                        </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-12">
                                            <div class="row">
                                                <label for="cpassword" class="col-8">Confirm Password</label><span class="col-3 text-center" id="StrengthDisp2" style="display:none; background-color:red; color:white; border-radius:10px; margin-bottom:1%" class="badge displayBadge">not Match</span>
</div><input class="form-control" type="password" required="" id="conpassword" placeholder="Confirm your password">
                                            
                                            <i class="fa fa-exclamation-triangle error" id="econ" aria-hidden="true"></i>
                                        </div>
</div>

                                        <div class="form-group m-b-30">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="term" type="checkbox">
                                                    <label for="checkbox5">
                                                        I accept <a href="#">Terms and Conditions</a>
                                                    </label>
                                                </div>
                                                <i class="fa fa-exclamation-triangle error" id="et" aria-hidden="true"></i>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix" style="float:right">Already hava an account? 
                                    <a href="pages-login.php">Login</a></div>
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
                
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("conpassword").value;
    var msg = document.getElementById("this");
    var terms = document.getElementById("term");
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


    if(firstname.length == 0){
        document.getElementById("efname").style.display="block";
        document.getElementById("efname").innerHTML="Please enter your First Name";
        return false;
    }
    else{
        document.getElementById("efname").style.display="none";
    }
    if(lastname.length == 0){
        document.getElementById("elname").style.display="block";
        document.getElementById("elname").innerHTML="Please enter your Last Name";
        return false;
    }
    else{
        document.getElementById("elname").style.display="none";
    }
    if(email.length == 0){
        document.getElementById("eemail").style.display="block";
        document.getElementById("eemail").innerHTML="Please Enter Your Email Address";
        return false;
    }
    else if(!(email.match(validRegex))){
        document.getElementById("eemail").style.display="block";
        document.getElementById("eemail").innerHTML="Invalid Email Address";
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

    if(confirmpassword != password){
        document.getElementById("econ").style.display="block";
        document.getElementById("econ").innerHTML="Password does not match";
        return false;
    }
    else{
        document.getElementById("econ").style.display="none";
    }

    if(!(terms.checked)){
        document.getElementById("et").style.display="block";
        document.getElementById("et").innerHTML="You Must accept our Terms";
        return false;
    }
    else{
        document.getElementById("et").style.display="none";
    }

    document.getElementById("spin").style.display="block";
    $.ajax({
 type: 'post',
 url: 'config/functions.php',
 data: {
  fname:firstname,
  lname:lastname,
  mail:email,
  pass:password,
  register:"1"
 },
 success: function (response) {

  if(response.trim() == "success"){
    setTimeout('hidemsg();', 2000);
      window.location.href="pages-login.php";
  }
  else{
   res = response;
    setTimeout('hidespin();', 2000);
      return false;
  }
 }
 });
 return false;
    
}
var pass2 = document.getElementById("password");
let strengthBadge = document.getElementById('StrengthDisp');
let strengthBadge2 = document.getElementById('StrengthDisp2');
let timeout;
let con = document.getElementById("conpassword"); 
let strongPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    let mediumPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    
    function StrengthChecker(PasswordParameter){
        // We then change the badge's color and text based on the password strength

        if(PasswordParameter.match(strongPassword)) {
            strengthBadge.style.backgroundColor = "green"
            strengthBadge.style.color = 'white'
            strengthBadge.textContent = 'Strong'
        } 
        else if(PasswordParameter.match(mediumPassword)){
            strengthBadge.style.backgroundColor = 'orange'
            strengthBadge.style.color = 'white'
            strengthBadge.textContent = 'Medium'
        } else{
            strengthBadge.style.backgroundColor = 'red'
            strengthBadge.style.color = 'white'
            strengthBadge.textContent = 'Weak'
        }
        checkit();
    }

    pass2.addEventListener("input", () => {
        strengthBadge.style.display= 'block'
        clearTimeout(timeout);

        //We then call the StrengChecker function as a callback then pass the typed password to it

        timeout = setTimeout(() => StrengthChecker(pass2.value), 500);

        //Incase a user clears the text, the badge is hidden again

        if(pass2.value.length !== 0){
            strengthBadge.style.display != 'block'
        } else{
            strengthBadge.style.display = 'none'
        }
    });


function checkit(){
    if(con.value == pass2.value){
    strengthBadge2.style.backgroundColor = 'green'
            strengthBadge2.style.color = 'white'
            strengthBadge2.textContent = 'Matched'
    }
    else{
    strengthBadge2.style.backgroundColor = 'red'
            strengthBadge2.style.color = 'white'
            strengthBadge2.textContent = 'not Match'
    }
}

    con.addEventListener("input", () => {
        strengthBadge2.style.display= 'block'
        clearTimeout(timeout);

        //We then call the StrengChecker function as a callback then pass the typed password to it

        timeout = setTimeout(() => checkit(), 500);

        //Incase a user clears the text, the badge is hidden again

        if(con.value.length !== 0){
            strengthBadge2.style.display != 'block'
        } else{
            strengthBadge2.style.display = 'none'
        }
    });


    function hidemsg(){
    document.getElementById("spin").style.display="none";
    alert("Registered Successfully");
}

function hidespin(){
    document.getElementById("spin").style.display="none";
    document.getElementById("errb").style.display="block";
    document.getElementById("this").innerHTML = res;
}
</script>
    </body>
</html>
