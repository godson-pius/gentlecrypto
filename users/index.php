
<?php
  require_once '../admin/config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['id']);

?>
<?php require_once 'inc/header.php'; ?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h4 class="header-title m-t-0 m-b-20"><?= $last_name; ?> - DASHBOARD</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">



                                      <div class="col-lg-12 col-sm-12">
                                          <div class="text-center widget-inline-box">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-book"></i> <b><?= getTotalUserCourse($_SESSION['id']); ?></b></h3>
                                              <p class="text-muted">My Courses</p>
                                          </div>
                                      </div>

                                        <!-- <div class="col-lg-6 col-sm-6">
                                            <div class="text-center widget-inline-box">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b>7841</b></h3>
                                                <p class="text-muted">Income amounts</p>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h6 class="m-t-0">My Courses</h6>
                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover mails table-actions-bar text-center">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Course Video</th>
                                                <th>Course Tutor</th>
                                                <th>Date registered</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <?php 
                                                $userCourses = getAllUserCourse($_SESSION['id']);
                                                if (!empty($userCourses)) {
                                                    foreach ($userCourses as $course) {
                                                        extract($course);
                                                        $url_link = str_replace(' ', '-', "learn.php?course=$course_name");?>
                                                        <tr>
                                                            <td>
                                                                <?= $course_name; ?>
                                                            </td>

                                                            <td>
                                                                <a target="_blank" href="<?= $course_video; ?>" class="btn btn-sm btn-warning rounded-pill shadow">Course Video</a>
                                                                <!-- <embed src="<?= $course_video; ?>" frameborder="0"></embed> -->
                                                            </td>

                                                            <td>
                                                                <b><a href="" class="text-dark"><b><?= $tutor; ?></b></a> </b>
                                                            </td>

                                                            <td>
                                                                <?= date('d-M-Y', strtotime($created_at)); ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <a href="<?= $url_link; ?>" class="btn btn-sm btn-light shadow rounded"><b>Enter course</b></a>
                                                            </td>

                                                        </tr>
                                            <?php } } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
