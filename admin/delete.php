
<?php

require_once 'config/db.php';

if (isset($_GET['product'])) {
    $id = $_GET['product'];

    $response = deleteColumn('products', $id);
    if ($response === true) {
        echo true;
    } else {
        echo false;
    }
}

if (isset($_GET['event'])) {
    $id = $_GET['event'];

    $response = deleteColumn('events', $id);
    if ($response === true) {
        echo true;
    } else {
        echo false;
    }
}