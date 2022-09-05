
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
                                            <th>User</th>
                                            <th>Course</th>
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
                                            <td><?php echo getUserName($user_id); ?></td>
                                            <td><?php echo getCourseName($course_id); ?></td>
                                            <td>₦<?php echo $amount; ?></td>
                                            <td><?php echo date('d F, Y | h:iA',strtotime($date)); ?></td>
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

                    <div class="row p-t-50">
                            <div class="col-12">
                                <h6>Approve Products Payments</h6>
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Transaction Id</th>
                                            <th>User</th>
                                            <th>Product</th>    
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

                                            $sql_course_p = "SELECT * from product_payments WHERE approve = 0";
                                            $cp_result = mysqli_query($link,$sql_course_p);
                                                $count_result = mysqli_num_rows($cp_result);

                                                if($count_result != 0){
                                                    foreach ($cp_result as $c_payment) {
                                                        extract($c_payment);
                                            ?>
                                        <tr>
                                            <td><?php echo $txn_id; ?></td>
                                            <td><?php echo getUserName($user_id); ?></td>
                                            <td><?php echo getProductName($product_id); ?></td>
                                            <td>₦<?php echo $amount; ?></td>
                                            <td><?php echo date('d F, Y | h:iA',strtotime($date)); ?></td>
                                            <td>
                                                <div class="btn btn-primary rounded btn-sm text-dark waves-effect waves-light shadow" data-id="<?= $id; ?>" onclick="approveProductPayment(this)" id="approveBtn">
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
            
            function approveProductPayment(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to approve this payment?');
                if (conf) {
                    fetch(`payments/product.php?id=${id}&product=${true}`).then(r => r).then(r => r.text()).then(r => {
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
