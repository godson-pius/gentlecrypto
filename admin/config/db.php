
<?php
session_start();

// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DBNAME", "gentlecrypto");

define("HOST", "localhost");
define("USER", "gentqlhw_gentle");
define("PASSWORD", "100%gentle");
define("DBNAME", "gentqlhw_gentle");

//$your_preferred_variable_name
$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once 'helpers.php';
require_once 'functions.php';

// if ($link) {
//     echo "connected";
// } else {
//   echo "Something is wrong!";
// }
