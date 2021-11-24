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

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Doctors</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Speciality</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Date registered</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>09073663738</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>09073663738</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>09073663738</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->


        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>


<?php require_once 'inc/footer.php'; ?>
