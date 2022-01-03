<?php
  require_once 'config/db.php';
  //blockUrlHackers('pages-login.php', $_SESSION['admin']);

  if (isset($_POST['add_event'])) {
      $response = addEvent($_POST);

      if ($response === true) {
          echo "<script>alert('Event added')</script>";
      } else if (is_array($response)) {
        foreach ($response as $err) {
            echo "<script>alert('$err')</script>";
          }
      } else {
        echo "<script>alert('Failed to add! Try again')</script>";
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

                        <h4 class="header-title m-t-0">ADD AN EVENT</h4>
                        <p class="text-muted font-13 m-b-10">
                            Give detailed Informations
                        </p>

                        <div class="m-b-20">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title">
                                </div>

                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" class="form-control" id="date">
                                </div>

                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="time" name="time" class="form-control" id="time">
                                </div>
                                
                                <div class="form-group">
                                    <label for="venue">Venue</label>
                                    <input type="text" name="venue" class="form-control" id="venue">
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" required class="form-control" id="image">
                                </div>

                                <div class="form-group">
                                    <label for="summernote">Event Content</label>
                                    <textarea name="content" id="summernote"></textarea>
                                </div>

                                <div class="text-right form-group m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        name="add_event">
                                        Add Event
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