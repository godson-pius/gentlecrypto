
<?php

require_once("../config/db.php");


if (isset($_GET['course']) && isset($_GET['id'])) {
    $course = $_GET['course'];
    $id = $_GET['id'];


    $sql = "UPDATE course_payments SET approve = 1 WHERE id = '$id'";

    $query = mysqli_query($link, $sql);

    if ($query) {
        echo true;
    } else {
        echo mysqli_error($query);
    }
}
