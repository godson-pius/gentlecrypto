<?php

session_start();
unset($_SESSION['login']);
unset($_SESSION['id']);

session_destroy();

setcookie(pass, time() - 3600);
setcookie(pass, "", time() - 3600);
header("location: ../index.php.php"); 

 ?>