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
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-page">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h5 class="m-b-5 mt-3">Godson Pius</h5>
                                            <p class="text-muted">@gospelartist</p>
                                        </div>

                                        <p class="text-muted m-t-10">
                                            This is the admin profile page.
                                        </p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="nav-item">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link">
                                        Settings
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="m-b-20">
                                                        <strong>Full Name</strong>
                                                        <br>
                                                        <p class="text-muted">Johnathan Deo</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 123 1234</p>
                                                    </div>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">johnath@domain.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-b1">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Edit Profile</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="FullName">Full Name</label>
                                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Username">Username</label>
                                                    <input type="text" value="john" id="Username" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>

                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->
                                </div>
                            </div>
                        </div>

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
