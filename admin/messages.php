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
                    <h4 class="header-title m-t-0 m-b-20">Messages</h4>
                </div>
            </div>


            <div class="row p-t-50">
                <div class="col-12">
                    <div class="table-responsive">

                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date sent</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>


                            <tbody>

                            <?php

$sql_messages = "SELECT * from messages";
$messages_result = mysqli_query($link,$sql_messages);
      $count_result = mysqli_num_rows($messages_result);

    if($count_result != 0){
        foreach ($messages_result as $messages) {
            extract($messages);
?>
                                <tr>
                                    <td><?= $name; ?></td>
                                    <td><?= $email; ?></td>
                                    <td><?= substr($subject, 0, 5); ?>...</td>
                                    <td><?= substr($messages, 0, 13); ?>...</td>
                                    <td><?php echo date('F d, Y',strtotime($date_sent)); ?></td>
                                    <td class="text-center">
                                        <a href="read.php?id=<?= $id; ?>" class="rounded shadow btn btn-primary btn-sm">Read
                                            </a>

                                        <button type="submit"
                                            class="rounded shadow btn btn-danger btn-sm" data-id="<?= $id; ?>" onclick="deleteMessage(this)" id="deleteBtn">Delete</button>

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


        <script>
            
            function deleteMessage(e){
                var id = e.dataset.id;
                var conf = confirm('Are you sure you want to delete this message');
                if (conf) {
                    fetch(`delete.php?message=${id}`).then(r => r).then(r => r.text()).then(r => {
                        if (r == true) {
                            alert('Message deleted');
                            window.location.reload();
                        } else {
                            alert('Failed to delete message!');
                        }
                    })
                }
            }
        </script>

        <?php require_once 'inc/footer.php'; ?>