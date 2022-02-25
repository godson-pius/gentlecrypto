<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['adminId']);

  if (isset($_GET['course'])) {
    $id = $_GET['course'];

    $courses = getSingleColumn('courses', 'course_id', $id);
    foreach ($courses as $course) {
        extract($course);
    }

    if (isset($_POST['edit_course'])) {
      $response = editCourse($_POST, $id);

      if ($response === true) {
          echo "<script>alert('Course Updated! You will be redirected back to Course page.')</script>";
          header("refresh:1; url=courses.php");
      } else if (is_array($response)) {
        foreach ($response as $err) {
            echo "<script>alert('$err')</script>";
          }
      } else {
        echo "<script>alert('Failed to edit! Try again')</script>";
      }
  }
}

?>
<?php require_once 'inc/header.php'; ?>
<style>
    #show {
        color: orange;
    }

    .error {
        color: red;
    }

    #tut,
    #cos,
    #det {
        display: none;
    }
</style>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">


            <div class="row">

                <div class="col-lg-12">
                    <div class="p-20 m-b-20">

                        <h4 class="header-title m-t-0">EDIT COURSE</h4>
                        <p class="text-muted font-13 m-b-10">
                            Edit course
                        </p>

                        <div class="m-b-20">
                            <form method="POST" enctype="multipart/form-data"
                                action="" class="form-validation">
                                <div class="form-group">
                                    <label for="userName">Tutor's Fullname<span class="text-danger">*</span></label>
                                    <input type="text" name="tutor" parsley-trigger="change" required
                                        placeholder="Enter Tutor's Fullname" value="<?= $tutor; ?>" class="form-control" id="tutor">
                                    <i class="fa fa-exclamation-triangle error" id="tut" aria-hidden="true"></i>

                                </div>
                                <div class="form-group">
                                    <label for="userName">Course Name<span class="text-danger">*</span></label>
                                    <input type="text" name="course" parsley-trigger="change" required
                                        placeholder="Enter Course Name" value="<?= $course_name; ?>"class="form-control" id="course">
                                    <i class="fa fa-exclamation-triangle error" id="cos" aria-hidden="true"></i>
                                </div>

                                <div class="form-group">
                                    <label for="price">Course Price<span class="text-danger">*</span></label>
                                    <input type="text" name="price" value="<?= $course_price; ?>" parsley-trigger="change" required
                                        placeholder="Enter course price" class="form-control" id="price">
                                </div>

                                <div class="form-group">
                                    <label for="video">Course Introductory Video<span class="text-danger">*</span></label>
                                    <input type="text" name="video" parsley-trigger="change" required
                                        placeholder="Paste video link from YouTube" required value="<?= $course_video; ?>" class="form-control" id="video">
                                </div>

                                <div class="form-group">
                                    <label for="emailAddress">Tutor's Image</label>
                                    <input type="file" required name="fileToUpload" parsley-trigger="change" class="form-control"
                                        id="image">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Course Details<span class="text-danger">*</span></label>
                                    <!-- <input type="text" name="detail" parsley-trigger="change" required
                                                       placeholder="Enter Course Details" class="form-control" id="detail">
                                                       <i class="fa fa-exclamation-triangle error" id="det" aria-hidden="true"></i>
                                                       <span id="show" class="">54 Letters Remaining</span> -->
                                    <textarea name="detail" id="summernote"><?= $course_detail; ?></textarea>
                                </div>



                                <div class="text-right form-group m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        name="edit_course">
                                        Edit Course
                                    </button>
                                    <button type="reset" class="btn btn-default waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- container -->

        <?php require_once 'inc/footer.php'; ?>