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

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

          <!-- Top Bar Start -->
          <div class="topbar">

              <!-- LOGO -->
              <div class="topbar-left">
                  <a href="index.html" class="logo">
                      <span>
                          <img src="assets/images/logo.png" alt="">
                      </span>
                      <i>
                          <img src="assets/images/logo_sm.png" alt="">
                      </i>
                  </a>
              </div>

              <nav class="navbar-custom">

                  <ul class="list-unstyled topbar-right-menu float-right mb-0">

                      <li class="dropdown notification-list">
                          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                             aria-haspopup="false" aria-expanded="false">
                              <i class="mdi mdi-bell noti-icon"></i>
                              <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                              <!-- item-->
                              <div class="dropdown-item noti-title">
                                  <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                              </div>

                              <div class="slimscroll" style="max-height: 190px;">
                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                      <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                  </a>

                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                      <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                  </a>
                              </div>

                              <!-- All-->
                              <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                  View all <i class="fi-arrow-right"></i>
                              </a>

                          </div>
                      </li>

                      <li class="dropdown notification-list">
                          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                             aria-haspopup="false" aria-expanded="false">
                              <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Anderson <i class="mdi mdi-chevron-down"></i> </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                              <!-- item-->
                              <div class="dropdown-item noti-title">
                                  <h6 class="text-overflow m-0">Israel</h6>
                              </div>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <i class="ti-user"></i> <span>My Account</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <i class="ti-settings"></i> <span>Settings</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <i class="ti-lock"></i> <span>Lock Screen</span>
                              </a>

                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item notify-item">
                                  <i class="ti-power-off"></i> <span>Logout</span>
                              </a>

                          </div>
                      </li>

                  </ul>

                  <ul class="list-inline menu-left mb-0">
                      <li class="float-left">
                          <button class="button-menu-mobile open-left waves-light waves-effect">
                              <i class="mdi mdi-menu"></i>
                          </button>
                      </li>
                  </ul>

              </nav>

          </div>
          <!-- Top Bar End -->


          <!-- ========== Left Sidebar Start ========== -->
          <div class="left side-menu">
              <div class="user-details">
                  <div class="pull-left">
                      <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                  </div>
                  <div class="user-info">
                      <a href="#">Name of the admin</a>
                      <p class="text-muted m-0">Administrator</p>
                  </div>
              </div>

              <!--- Sidemenu -->
              <div id="sidebar-menu">
                  <!-- Left Menu Start -->
                  <ul class="metismenu" id="side-menu">
                      <li class="menu-title">Navigation</li>
                      <li>
                          <a href="index.html">
                              <i class="ti-home"></i><span> Dashboard </span>
                          </a>
                      </li>


                      <li>
                          <a href="javascript: void(0);"><i class="ti-user"></i> <span> Doctors </span> <span class="menu-arrow"></span></a>
                          <ul class="nav-second-level" aria-expanded="false">
                              <li><a href="doctors.html">All Doctors</a></li>
                              <li><a href="add-doctor.html">Add Doctors</a></li>
                          </ul>
                      </li>

                      <li>
                          <a href="javascript: void(0);"><i class="ti-lock"></i><span> Authentication </span> <span class="menu-arrow"></span></a>
                          <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="profile.html">Profile</a></li>
                              <li><a href="pages-register.html">Register</a></li>
                              <li><a href="pages-forget-password.html">Change Password</a></li>
                              <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                              <li><a href="pages-lock-screen.html">Logout</a></li>
                          </ul>
                      </li>

                  </ul>

              </div>
              <!-- Sidebar -->
              <div class="clearfix"></div>

          </div>
          <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-20 m-b-20">

                                    <h4 class="header-title m-t-0">Add Doctor</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Easily add a doctor
                                    </p>

                                    <div class="m-b-20">
                                        <form action="#" class="form-validation">
                                            <div class="form-group">
                                                <label for="userName">First Name<span class="text-danger">*</span></label>
                                                <input type="text" name="fname" parsley-trigger="change" required
                                                       placeholder="Enter first name" class="form-control" id="userName">
                                            </div>
                                            <div class="form-group">
                                                <label for="userName">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" name="lname" parsley-trigger="change" required
                                                       placeholder="Enter last name" class="form-control" id="userName">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required
                                                       placeholder="Enter email" class="form-control" id="emailAddress">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                                <input type="number" name="phone" parsley-trigger="change" required
                                                       placeholder="Enter phone number" class="form-control" id="emailAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="emailAddress">Speciality<span class="text-danger">*</span></label>
                                                <input type="text" name="phone" parsley-trigger="change" required
                                                       placeholder="Enter Speciality" class="form-control" id="emailAddress">
                                            </div>

                                            <div class="form-group">
                                                <label for="emailAddress">Facebook link<span class="text-danger">*</span></label>
                                                <input type="text" name="phone" parsley-trigger="change" required
                                                       placeholder="Enter facebook link" class="form-control" id="emailAddress">
                                            </div>



                                            <div class="form-group">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" type="password" placeholder="Password" required
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#pass1" type="password" required
                                                       placeholder="Password" class="form-control" id="passWord2">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">About Doctor <span class="text-danger">*</span></label>
                                                <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <input id="remember-1" type="checkbox">
                                                    <label for="remember-1"> Remember me </label>
                                                </div>
                                            </div>

                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container -->


                    <div class="footer">
                        <div class="pull-right hide-phone">
                            Project Completed <strong class="text-custom">57%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright © 2017 - 2019
                        </div>
                    </div>

                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

        <!-- form advanced init js -->
        <script src="assets/pages/jquery.form-advanced.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.form-validation').parsley();
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

    </body>
</html>
