<?php session_start();
    $_SESSION["UserEmail"] = "";
   include 'config.php';
   $email = $_SESSION['UserEmail'];
   if(empty($email)){
     header('location:./login/');
   }

?>