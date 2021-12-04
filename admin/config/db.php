
<?php
session_start();

define("HOST", "localhost:3308");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "gentlecrypto");

//$your_preferred_variable_name
$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once 'helpers.php';
require_once 'functions.php';

// if ($link) {
//     echo "connected";
// } else {
//   echo "Something is wrong!";
// }
