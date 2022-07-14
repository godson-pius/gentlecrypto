<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['adminId']);

  if (isset($_GET['id'])) {
    $lessonId = $_GET['id'];

    if (isset($_POST['yes'])) {
        $sql = "DELETE FROM lessons WHERE id = $lessonId";
        $query = mysqli_query($link, $sql);

        if ($query) {
            echo "<script>alert('Lesson Deleted! You will be redirected back to lessons page.')</script>";
            header('refresh:1; url=lessons.php');
        }
    }

    if (isset($_POST['no'])) {
        echo "<script>alert('Operation Canceled! You will be redirected back to lessons page.')</script>";
        header('refresh:1; url=lessons.php');
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
        <h5>Are you sure you want to delete this Lesson?</h5>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <button name="no" type="submit" class="btn btn-primary">No</button>
                </form>
            </div>
            <div class="col">
                <form action="" method="post">
                    <button name="yes" type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once 'inc/footer.php'; ?>