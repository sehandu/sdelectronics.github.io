<?php
sleep(2);
include 'config.php';

session_start();
   
$email = $_SESSION['UserEmail'];
if(empty($email)){
    echo "no";
    header('location:./login/');
}
else{
    if(isset($_POST['name'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $total = $_POST['total'];
    
    $sql = "INSERT INTO oder (name, email, location, total ) VALUES ('$name','$email', '$address', '$total')";
                if ($con->query($sql) === TRUE) {
                         header("location: profile.php");
                }

}
else{
    header("location: product.php?id=1");
    
}
}
echo $email;



?>