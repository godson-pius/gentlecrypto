<?php
  require_once 'config/db.php';
  //blockUrlHackers('pages-login.php', $_SESSION['admin']);

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
                                            <th>Event Title</th>
                                            <th>Event Venue</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

$sql_event = "SELECT * from events";
$event_result = mysqli_query($link,$sql_event);
      $count_result = mysqli_num_rows($event_result);

    if($count_result != 0){
        foreach ($event_result as $events) {
            extract($events);
?>
                                        <tr>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo $venue; ?></td>
                                            <td><?php echo date('F d, Y',strtotime($event_date)); ?></td>
                                            <td><?php echo date('h:ia',strtotime($event_time)); ?></td>
                                            <td>
                                                <a href="edit_event.php?id=<?= $id; ?>" class="btn btn-primary rounded btn-sm text-dark" type="submit" id="submit" name="edit_event">
                                                    Edit event
                                                </a>
                                                <div class="btn btn-danger btn-sm rounded waves-effect waves-light" data-id="<?= $id; ?>" onclick="deleteEvent(this)" id="deleteBtn">
                                                    Delete
                                                </div>
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

        <script>
            function deleteEvent(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to delete this event');
                if (conf) {
                    fetch(`delete.php?event=${id}`).then(r => r).then(r => r.text()).then(r => {
                        if (r == true) {
                            alert('Event deleted');
                            window.location.reload();
                        } else {
                            alert('Failed to delete event!');
                        }
                    })
                }
            }
        </script>


<?php require_once 'inc/footer.php'; ?>
