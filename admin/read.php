<?php
  require_once 'config/db.php';
  //blockUrlHackers('pages-login.php', $_SESSION['admin']);

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_message = "SELECT * FROM messages WHERE id = $id";
    $message_result = mysqli_query($link,$sql_message);

    if (mysqli_num_rows($message_result) > 0) {
      $message = mysqli_fetch_assoc($message_result);
      extract($message);
  }
}

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
                <div class="col-lg-12">
                   <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?= $subject; ?></h5>
                        <p class="card-text"><?= $messages; ?></p>
                        <a href="mailto:<?= $message['email']; ?>" class="btn btn-primary">Reply</a>
                        <span class="text-primary"><?= $message['email']; ?></span>
                    </div>
                   </div>
                </div>
            </div>
            <!-- end row -->


        </div> <!-- container -->


        <script>
            function deleteMessage(e) {
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