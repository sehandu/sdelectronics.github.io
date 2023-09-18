<?php

include('config.php');

if(isset($_POST['email'])){
    // $email = $_POST['email'];
    
    // $name = $_POST['name'];
    // $grade = "grade--";
    // $admission = $_POST['admission'];
    // $number = $_POST['number'];
    // $password = $_POST['password'];
    

    $query = "SELECT * FROM products WHERE name = '1'";

    $result = $con->query($query);

    if ($result) {
    if (mysqli_num_rows($result) > 0) {
        header('location:login.html');
    } else {

        $result = mysqli_query($con,$query);

    
    $sql = "INSERT INTO products (key_id, cat, image,  image_2, image_3, image_4, description_img, name, description, price, active, status, isTop, isApple, isSamsung ) VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)";
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