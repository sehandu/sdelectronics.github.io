<?php
sleep(3);
include('config.php');

if(isset($_POST['email'])){
    $email = $_POST['email'];
    
    $name = $_POST['name'];
    $grade = "grade--";
    $admission = $_POST['admission'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    

    $query = "SELECT * FROM users WHERE admission_nb = '$admission'";

    $result = $con->query($query);

    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        header('location:login.html');
    } else {

        $result = mysqli_query($con,$query);

    
    $sql = "INSERT INTO users (name, admission_nb, email,  number, grade, points ) VALUES ('$name','$admission', '$email', '$number', '$grade', 50)";
    if ($con->query($sql) === TRUE) {
       header('location:success.html');
    } else {
    echo "Error updating product details: " . $conn->error;
    }

     }
    }
    
    
    
}
else{
    header('location:index.html');
}
?>