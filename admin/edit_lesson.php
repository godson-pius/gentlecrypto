<?php
require_once 'config/db.php';
blockUrlHackers('pages-login.php', $_SESSION['adminId']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $lesson = getSingleColumn('lessons', 'id', $id);
    foreach ($lesson as $eve) {
        extract($eve);
    }

    if (isset($_POST['edit_lesson'])) {
        $response = editLesson($_POST, $id);

        if ($response === true) {
            echo "<script>alert('Lesson Updated! You will be redirected back to lessons page.')</script>";
            header('refresh:1; url=lessons.php');
        } elseif (is_array($response)) {
            foreach ($response as $err) {
                echo "<script>alert('$err')</script>";
            }
        } else {
            echo "<script>alert('Failed to edit! Try again')</script>";
        }
    }
}

$p_co = get_course_name($course_id); 
$pp = $p_co['course_name'];

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

                        <h4 class="header-title m-t-0">UPDATE LESSON</h4>
                        <p class="text-muted font-13 m-b-10">
                            Give detailed Informations
                        </p>

                        <div class="m-b-20">
                            <form enctype="multipart/form-data" class="form-validation" method="POST">

                                <div class="form-group">
                                    <label for="emailAddress">Date Added<span class="text-danger">*</span></label>
                                    <input type="text" readonly name="date" value="<?php echo $date_added; ?>"
                                        parsley-trigger="change" class="form-control bg-light" id="date">
                                </div>
                                <input type="hidden" id="val" value="1">

                                <div class="form-group">

                                    <?php
        $course_select_query = 'SELECT * FROM courses order by course_id DESC';
        $course_select_result = mysqli_query($link, $course_select_query);
        $count_courses = mysqli_num_rows($course_select_result);
        if ($count_courses != 0) { ?>
                                    <label for="course">Select Course<span class="text-danger">*</span></label>
                                    <select name="course" style="color: black !important;" class="form-control"
                                        required>
                                        <option value="" disabled selected>Select course</option>
                                        <?php while ($course_rows = $course_select_result->fetch_assoc()) {

            $course_id = $course_rows['course_id'];
            $course_name = $course_rows['course_name'];
            $c_name = str_replace('&amp;', '&', $course_name);
            ?>
                                        <option style="color: black !important;" value="<?php echo $course_id; ?>">
                                            <?php echo $course_name; ?></option>

                                        <?php
        }} else { ?>
                                        <label for="course" class="text-danger"><i
                                                class="fa fa-exclamation-triangle error" aria-hidden="true"></i>NO
                                            COURSE ADDED YET!<span class="text-light">****</span><br><span
                                                class="text-warning">Please Add a course before you can add any
                                                lesson</span></label>
                                        <script type="text/javascript">
                                            document.getElementById("val").value = 0;
                                        </script>
                                        <?php }
        ?>
                                    </select>
                                    <p>Previously selected Course: <?= $pp; ?></p>
                                </div>
                                <div class="form-group">
                                    <label for="userName">Lesson Topic<span class="text-danger">*</span></label>
                                    <input type="text" name="topic" required placeholder="Enter Lesson Topic"
                                        class="form-control" id="topic" value="<?php echo $topic; ?>">

                                </div>
                                <div class="form-group">
                                    <label for="userName">Enter Amount to Sell Lesson<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="price" required placeholder="Enter Lesson Price"
                                        class="form-control" id="price" maxlength="10" value="<?= $price ?>">
                                </div>

                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="emailAddress">Lesson Details (give detailed description)<span
                                                class="text-danger">*</span></label><br>
                                        <textarea id="summernote" name="detail"><?= $lesson_detail ?></textarea>

                                    </div>

                                    <div id="chooseFile" class="rounded bg-primary p-2 text-light"
                                        style="width: 300px; cursor: pointer">
                                        Reselect previously uploaded Video? Or Change Video
                                    </div>
                                    <input type="file" id="fileToUpload" name="fileToUpload" style="display: none">
                                    <progress id="progressBar" style="width: 300px; display: none"
                                        class="mt-3 p-3"></progress>
                                    <span id="selected" class="mt-3"></span>

                                </div>


                                <div class="text-right form-group m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" id="submit"
                                        name="edit_lesson">
                                        Add Lesson
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
            var progressBar = document.getElementById("progressBar");
            var file = document.getElementById("fileToUpload")

            document.getElementById("chooseFile").addEventListener("click", () => {
                file.click()
                progressBar.style.display = "block"
            })

            file.addEventListener("change", (e) => {
                console.clear()
                console.log(e.target.files[0].name)
                document.getElementById("selected").innerHTML =
                    `The file selected is (${e.target.files[0].name})`
                progressBar.style.display = "none"
            })
        </script>

        <?php require_once 'inc/footer.php'; ?>