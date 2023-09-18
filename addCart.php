<?php
sleep(2);
include 'config.php';
session_start();
$email = $_SESSION['UserEmail'] ;
if(empty($email)){
    header("location: ./login/");
}
echo $email;
if(isset($_GET['pId'])){
    $id = $_GET['pId'];
    header("location: product.php?id=$id");
    $sql = "INSERT INTO cart (user, product ) VALUES ('$email','$id')";
                if ($con->query($sql) === TRUE) {
                         header("location: product.php?id=$id");
                }

}
else{
    header("location: product.php?id=1");
    
}


?>