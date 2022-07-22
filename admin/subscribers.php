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
                                <h4 class="header-title m-t-0 m-b-20">Subscribers</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Subscriber Email</th>
                                            <th>Date Subscribed</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

$sql_subscriber = "SELECT * from subscribers";
$subscriber_result = mysqli_query($link,$sql_subscriber);
      $count_result = mysqli_num_rows($subscriber_result);

    if($count_result != 0){
        foreach ($subscriber_result as $subscribers) {
            extract($subscribers);
?>
                                        <tr>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo date('F d, Y',strtotime($created)); ?></td>
                                            <td>
                                                <div class="btn btn-danger btn-sm rounded waves-effect waves-light" data-id="<?= $id; ?>" onclick="deleteSubscriber(this)" id="deleteBtn">
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
            
            function deleteSubscriber(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to delete this subscriber');
                if (conf) {
                    fetch(`delete.php?subscriber=${id}`).then(r => r).then(r => r.text()).then(r => {
                        if (r == true) {
                            alert('Subscriber deleted');
                            window.location.reload();
                        } else {
                            alert('Failed to delete subscriber!');
                        }
                    })
                }
            }
        </script>


<?php require_once 'inc/footer.php'; ?>
