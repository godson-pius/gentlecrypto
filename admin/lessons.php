<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['adminId']);

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
                                <h4 class="header-title m-t-0 m-b-20">Lessons</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>Lesson Topic</th>
                                            <th>Lesson Details</th>
                                            <th>Video</th>
                                            <th>Date Uploaded</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

$sql_lesson = "SELECT * from lessons INNER JOIN courses ON lessons.course_id = courses.course_id";
$lesson_result = mysqli_query($link,$sql_lesson);
      $count_result = mysqli_num_rows($lesson_result);

      if($count_result != 0){
        foreach ($lesson_result as $lessons) {
            extract($lessons);
?>
                        <tr>
                            <td><?php echo $course_name; ?></td>
                            <td><?php echo $topic; ?></td>
                            <td><?php echo $lesson_detail; ?></td>
                            <td>
                                <video src="../lesson_videos/<?php echo $video;?>" controls
                                width="100%" height="80"
                                ></video>
                            </td>
                            <!-- <td><?php echo $video; ?></td> -->
                            <td><?php echo date('F d, Y',strtotime($date_added)); ?></td>
                            <td>
                                <a href="edit_lesson.php?id=<?= $id; ?>" class="btn btn-primary rounded btn-sm text-dark" type="submit" id="submit" name="edit_lesson">
                                    Edit Lesson
                                </a>
                                <a href="delete-lesson.php?id=<?= $id; ?>" class="btn btn-danger rounded btn-sm text-dark" type="submit" id="submit" name="edit_lesson">
                                    Delete Lesson
                                </a>
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
