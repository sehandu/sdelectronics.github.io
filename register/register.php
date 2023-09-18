<?php 
include 'config.php';
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
    echo "</br>";
    if(!empty($email)){
        $query = "SELECT * FROM users WHERE email = '$email'";

        $result = $con->query($query);

       
            if (mysqli_num_rows($result) > 0)
            {
                     header('location:../login/');
            }
            else
            {
                 $result = mysqli_query($con,$query);

    
                $sql = "INSERT INTO users (email, password,isLoggin ) VALUES ('$email','$password','0')";
                if ($con->query($sql) === TRUE) {
                     header('location:../login/');
                }
            }
        
    }
    else{
        echo "not Given";
    }
    
    


}

?>