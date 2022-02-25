<<<<<<< HEAD:admin/index.php

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
                                <h4 class="header-title m-t-0 m-b-20">ADMIN - Dashboard</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">



                                      <div class="col-lg-6 col-sm-6">
                                          <div class="text-center widget-inline-box">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b><?= getTotalNum('users'); ?></b></h3>
                                              <p class="text-muted">Total users</p>
                                          </div>
                                      </div>

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="text-center widget-inline-box">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b><?= getTotalNum('course_payments'); ?></b></h3>
                                                <p class="text-muted">Course Payments</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->


                        <div class="row p-t-50">
                            <div class="col-12">
                                <h6>Approve Course Payments</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Transaction Id</th>
                                            <!-- <th>User</th>
                                            <th>Course</th> -->
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

$sql_course_p = "SELECT * from course_payments WHERE approve = 0";
$cp_result = mysqli_query($link,$sql_course_p);
      $count_result = mysqli_num_rows($cp_result);

    if($count_result != 0){
        foreach ($cp_result as $c_payment) {
            extract($c_payment);
?>
                                        <tr>
                                            <td><?php echo $txn_id; ?></td>
                                            <!-- <td><?php echo $user_id; ?></td>
                                            <td><?php echo $course_id; ?></td> -->
                                            <td>$<?php echo $amount; ?></td>
                                            <td><?php echo date('h:iA',strtotime($date)); ?></td>
                                            <td>
                                                <div class="btn btn-primary rounded btn-sm text-dark waves-effect waves-light shadow" data-id="<?= $id; ?>" onclick="approvePayment(this)" id="approveBtn">
                                                Approve Payment
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


                    <?php require_once 'inc/footer.php'; ?>

                    <script>
            function approvePayment(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to approve this payment?');
                if (conf) {
                    fetch(`payments/payment.php?id=${id}&course=${true}`).then(r => r).then(r => r.text()).then(r => {
                        if (r == true) {
                            alert('Payment Approved');
                            window.location.reload();
                        } else {
                            alert('Failed to approve payment!');
                        }
                    })
                }
            }
        </script>
=======

<?php
  require_once 'config/db.php';
  if(!(isset($_SESSION["login"]))){
    header("location:pages-login.php");
}
else if($_SESSION["lock"] == true){
    header("location:pages-lock-screen.php");
}
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
                                <h4 class="header-title m-t-0 m-b-20">ADMIN - Dashboard</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box widget-inline">
                                    <div class="row">



                                      <div class="col-lg-6 col-sm-6">
                                          <div class="text-center widget-inline-box">
                                              <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b>6521</b></h3>
                                              <p class="text-muted">Total users</p>
                                          </div>
                                      </div>

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="text-center widget-inline-box">
                                                <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b>7841</b></h3>
                                                <p class="text-muted">Income amounts</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h6 class="m-t-0">Moderators</h6>
                                    <div class="table-responsive">
                                        <table class="table m-0 table-hover mails table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th style="min-width: 95px;">
                                                    <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                        <input id="action-checkbox" type="checkbox">
                                                        <label for="action-checkbox"></label>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Speciality</th>
                                                <th>Date registered</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary m-r-15">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2"></label>
                                                    </div>

                                                </td>

                                                <td>
                                                    Tomaslau
                                                </td>

                                                <td>
                                                    <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                                </td>

                                                <td>
                                                    <b><a href="" class="text-dark"><b>Surgeon</b></a> </b>
                                                </td>

                                                <td>
                                                    01/11/2003
                                                </td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>
>>>>>>> c9257f683ca529491759374b9a9004ceb83678ac:admin/admin_dashboard.php
