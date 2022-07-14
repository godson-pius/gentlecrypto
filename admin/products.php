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
                                <h4 class="header-title m-t-0 m-b-20">Products</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Price</th>
                                            <th>Date Added</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>


                                        <tbody>
                                          <?php

$sql_product = "SELECT * from products";
$product_result = mysqli_query($link,$sql_product);
      $count_result = mysqli_num_rows($product_result);

    if($count_result != 0){
        foreach ($product_result as $products) {
            extract($products);
?>
                                        <tr>
                                            <td><?php echo $p_name; ?></td>
                                            <td>$<?php echo $p_price; ?></td>
                                            <td><?php echo date('F d, Y',strtotime($created_at)); ?></td>
                                            <td>
                                                <a href="edit_product.php?id=<?= $id; ?>" class="btn btn-primary rounded btn-sm text-dark" type="submit" id="submit" name="edit_event">
                                                    Edit product
                                                </a>
                                                <div class="btn btn-danger btn-sm rounded waves-effect waves-light" data-id="<?= $id; ?>" onclick="deleteProduct(this)" id="deleteBtn">
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
            function deleteProduct(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to delete this product');
                if (conf) {
                    fetch(`delete.php?product=${id}`).then(r => r).then(r => r.text()).then(r => {
                        if (r == true) {
                            alert('Product deleted');
                            window.location.reload();
                        } else {
                            alert('Failed to delete product!');
                        }
                    })
                }
            }
        </script>


<?php require_once 'inc/footer.php'; ?>
