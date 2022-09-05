
<?php

require_once("../config/db.php");


if (isset($_GET['product']) && isset($_GET['id'])) {
    $product = $_GET['product'];
    $id = $_GET['id'];


    $sql = "UPDATE product_payments SET approve = 1 WHERE id = '$id'";

    $query = mysqli_query($link, $sql);

    if ($query) {
        echo true;
    } else {
        echo false;
    }
}
