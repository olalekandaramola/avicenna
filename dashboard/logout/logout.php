<?php session_start(); ?>


<?php 

 $_SESSION['email'] = null;
 $_SESSION['password'] = null;

 header("Location: ../login/login.php");

?>