<?php
include 'config.php';
session_start();
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";

    $result = $con->query($query);
    $User_= $result->fetch_assoc();

    $User_pass = $User_['password'];
    $id = $User_['id'];
    if($pass == $User_pass){
        $_SESSION["LoggedIn"] = 1;
        $_SESSION["UserEmail"] = "$email";
        $_SESSION["UserPass"] = "$pass";
        $_SESSION["id"] = "$id";
        header('location: ../');

    }
    else {
        echo "no";
    } 
    echo $id;  
    
}

?>