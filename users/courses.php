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

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Course Name</th>
                                            <th>Course Details</th>
                                            <th>Tutor</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php
    $user_id = $_SESSION['user'];
$sql_course = "SELECT * from course_payments WHERE user_id = '$user_id'";
$course_result = mysqli_query($link,$sql_course);
      $count_result = mysqli_num_rows($course_result);

    if($count_result != 0){
    while($row_course = $course_result->fetch_assoc()) {
  $course_detail = $row_course["course_detail"];
  $tutor = $row_course["tutor"];
    $name = $row_course["course_name"];
$id = $row_course["id"];
?>
                                        <tr>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $course_detail ?></td>
                                            <td><?php echo $tutor ?></td>
                                            <td><form action="config/functions.php" method="POST">
                                              <input type="hidden" name="id" value="<?php echo $id ?>">
                                              <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="submit" name="edit_course">
                                                    Edit
                                                </button>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="delete" name="delete_course">
                                                    Delete
                                                </button>
                                            </div>
                                            </form></td>
                                            
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
