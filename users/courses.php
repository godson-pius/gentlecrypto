<?php
  require_once '../admin/config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['user']);

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
                            <div class="col-sm-12">
                                <h4 class="header-title m-t-0 m-b-20">Courses</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Course Name</th>
                                            <th>Course Details</th>
                                            <th>Tutor</th>
                                            <th>Purchased date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>

                                        <?php
                                            $userCourses = getAllUserCourse($_SESSION['id']);
                                            if (!empty($userCourses)) {
                                                foreach ($userCourses as $course) {
                                                    extract($course);
                                                    $url_link = str_replace(' ', '-', "learn.php?course=$course_name");
                                                    ?>
                                      <tr>
                                                            <td>
                                                                <?= $course_name; ?>
                                                            </td>

                                                            <td>
                                                                <?= $course_detail; ?>
                                                            </td>

                                                            <td>
                                                                <b><a href="" class="text-dark"><b><?= $tutor; ?></b></a> </b>
                                                            </td>

                                                            <td>
                                                                <?= date('d-M-Y', strtotime($date)); ?>
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
                        <!-- end row -->


                    </div> <!-- container -->


        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                "bDestroy": true;
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
