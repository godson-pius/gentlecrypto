<?php
  require_once 'config/db.php';
  //blockUrlHackers('pages-login.php', $_SESSION['admin']);

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

                        <h4 class="header-title m-t-0">ADD A COURSE</h4>
                        <p class="text-muted font-13 m-b-10">
                            Give detailed Informations
                        </p>

                        <div class="m-b-20">
                            <form method="POST" onsubmit="return validate();" enctype="multipart/form-data"
                                action="config/functions.php" class="form-validation" novalidate>
                                <div class="form-group">
                                    <label for="userName">Tutor's Fullname<span class="text-danger">*</span></label>
                                    <input type="text" name="tutor" parsley-trigger="change" required
                                        placeholder="Enter Tutor's Fullname" class="form-control" id="tutor">
                                    <i class="fa fa-exclamation-triangle error" id="tut" aria-hidden="true"></i>

                                </div>
                                <div class="form-group">
                                    <label for="userName">Couser Name<span class="text-danger">*</span></label>
                                    <input type="text" name="course" parsley-trigger="change" required
                                        placeholder="Enter Course Name" class="form-control" id="course">
                                    <i class="fa fa-exclamation-triangle error" id="cos" aria-hidden="true"></i>
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Tutor's Image</label>
                                    <input type="file" name="fileToUpload" parsley-trigger="change" class="form-control"
                                        id="image">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Course Details<span class="text-danger">*</span></label>
                                    <!-- <input type="text" name="detail" parsley-trigger="change" required
                                                       placeholder="Enter Course Details" class="form-control" id="detail">
                                                       <i class="fa fa-exclamation-triangle error" id="det" aria-hidden="true"></i>
                                                       <span id="show" class="">54 Letters Remaining</span> -->
                                    <textarea name="detail" id="summernote"></textarea>
                                </div>



                                <div class="text-right form-group m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        name="add_course">
                                        Add Course
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


        <script>
            function validate() {

                var course = document.getElementById("course").value;
                var tutor = document.getElementById("tutor").value;
                var detail = document.getElementById("detail").value;



                if (tutor.length == 0) {
                    document.getElementById("tut").style.display = "block";
                    document.getElementById("tut").innerHTML = "Enter Name of Tutor ";
                    return false;
                } else {
                    document.getElementById("tut").style.display = "none";
                }
                if (course.length == 0) {
                    document.getElementById("cos").style.display = "block";
                    document.getElementById("cos").innerHTML = "Course Cannot be empty";
                    return false;
                } else {
                    document.getElementById("cos").style.display = "none";
                }
                if (detail.length == 0) {
                    document.getElementById("det").style.display = "block";
                    document.getElementById("det").innerHTML = "Write Brief details of this course ";
                    return false;
                } else {
                    document.getElementById("det").style.display = "none";
                }

                if (detail.length > 54) {
                    document.getElementById("det").style.display = "block";
                    document.getElementById("det").innerHTML = "Input Limit Exceeded (Only 54 Letters)";
                    return false;
                } else {
                    document.getElementById("det").style.display = "none";
                }



                return true;

            }
        </script>

        <script type="text/javascript">
            var validationLength = 54;
            $('#detail').on('keyup keydown change', function () {
                var len = document.getElementById("detail").value;
                var len2 = len.length;
                var num = validationLength - len2;
                document.getElementById("show").innerHTML = num + " Letters Remaining";
                if (num <= 0) {
                    document.getElementById("show").innerHTML = "Maximum Input! only 54 letters";
                    document.getElementById("show").style.color = "red";
                }
                if ($(this).val().length > validationLength) {
                    val = $(this).val().substr(0, $(this).val().length - 1);
                    $(this).val(val);

                };
            });
        </script>

        <?php require_once 'inc/footer.php'; ?>