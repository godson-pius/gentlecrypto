<?php
  require_once 'config/db.php';
  blockUrlHackers('pages-login.php', $_SESSION['adminId']);

  if (isset($_GET['info'])) {
      $name = $_GET['info'];
      
      if ($_GET['info'] === 'terms') {
        $info = "Terms and Conditions";
      } else if ($_GET['info'] === 'policy') {
        $info = "Privacy Policy";
      }

      if (isset($_POST['update_brand'])) { 
            $response = update_brand($_POST, $name);
    
            if ($response === true) {
                echo "<script>alert('Changes Updated')</script>";
            } else if (is_array($response)) {
            foreach ($response as $err) {
                echo "<script>alert('$err')</script>";
                }
            } else {
            echo "<script>alert('Failed to update! Try again')</script>";
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

                        <h4 class="header-title m-t-0">UPDATE <?= strtoupper($info); ?></h4>
                        <p class="text-muted font-13 m-b-10">
                            Kindly update your <?= $info; ?>
                        </p>

                        <div class="m-b-20">
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="summernote">Update <?= strtolower($info); ?></label>
                                    <textarea name="info" id="summernote"></textarea>
                                </div>

                                <div class="text-right form-group m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        name="update_brand">
                                        Update
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