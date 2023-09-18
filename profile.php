<?php 

session_start();
$email = $_SESSION['UserEmail'];

?>
<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Document</title>
  </head>
  <body>
    <br />
    <br />
    <br />

    <div class="container-center">
      <h1 class="text-center">Profile</h1>
      <br />
      <br />
      <h4>name</h4>
      <h3><?= $_SESSION['UserEmail'];?></h3>
      <br />
      <h4>password</h4>
      <h3><?= $_SESSION['UserPass'];?></h3>
      <br />
      <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>
  </body>
</html>
