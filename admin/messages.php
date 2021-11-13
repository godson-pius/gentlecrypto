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
                                <h4 class="header-title m-t-0 m-b-20">Messages</h4>
                            </div>
                        </div>


                        <div class="row p-t-50">
                            <div class="col-12">
                                <div class="table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Date sent</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Edinburgh</td>
                                            <td>09073663738</td>
                                            <td>2011/04/25</td>
                                            <td class="text-center">
                                                <button type="submit" class="rounded shadow btn btn-primary btn-sm">Read message</button>
                                                
                                                <button type="submit" class="rounded shadow btn btn-danger btn-sm">Delete</button>
                                                
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>London</td>
                                            <td>09073663738</td>
                                            <td>2011/04/25</td>
                                            <td class="text-center">
                                                <button type="submit" class="rounded shadow btn btn-primary btn-sm">Read message</button>
                                                
                                                <button type="submit" class="rounded shadow btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->


                    <?php require_once 'inc/footer.php'; ?>