<<<<<<< HEAD
<?php


session_start();
session_destroy();

header("Location: pages-login.php");
=======
<?php

session_start();
unset($_SESSION['login']);
unset($_SESSION['id']);

session_destroy();

setcookie(pass, time() - 3600);
setcookie(pass, "", time() - 3600);
header("location: ../index.php.php"); 

 ?>
>>>>>>> c9257f683ca529491759374b9a9004ceb83678ac
