<?php 


    session_start();
   include 'config.php';
   $email = $_SESSION['UserEmail'];
   if(empty($email)){
    
     header('location:./login/');
   }
   else{
     $query = "SELECT * FROM cart WHERE user = '$email' ";
   $query_res = $con->query($query);
    
   }
   
   
   

 

  $email = $_SESSION['UserEmail'];

?>
<!DOCTYPE html>
<html lang="en">
    
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav.css" />
    <!-- <link rel="stylesheet" href="bootstrap.css" /> -->
    <title>Document</title>
  </head>
  <body>
    <div class="nav">
      <div class="logo">SDELECTRONICS</div>
      <form action="search.php" method="POST">
      <div class="search_input_holder">
        <input class="Search_input"type="text" placeholder="Type Here...." name="search_input" />
        <input class="search_btn" type="submit" value="Search" />
        
        
      </div>
      </form>
      <a href="profile.php"> <button class="login">Cart</button></a>
    </div>
    <br />
    <br />
    <br />

    <div class="container-center">
      <h1 class="text-center">Profile</h1>
      <br />
      <br />
      <h4>Email</h4>
      <h3><?= $_SESSION['UserEmail'];?></h3>
      <br />
      <h4>Password</h4>
      <h3><?= $_SESSION['UserPass'];?></h3>
      <br />
      <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>
     <div class="limiter">
      <section id="top_products">
        <h1 class="title">Cart</h1>

        <div class="spacer"></div>
        <div class="grid-auto">
          <?php
              
                    
                    while ($data= $query_res->fetch_assoc()) { ?>
                    
                    <?php
                    $id = $data['product'];
                     $products_sql = "SELECT * FROM products WHERE id = '$id' ";
                      $product_res = $con->query($products_sql);
                      $top= $product_res->fetch_assoc()?>
                    <a href="product.php?id=<?= $top['id']?>">
                      <div class="con-verticle-3">

            <img src="./upload/uploads/<?= $top['image']?>" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product"><?= $top['name']?></h4>
            <br />
            <div class="price_banner">RS: <?= $top['price']?></div>
            <br />
            <br />
            <div class="availibility_row">
              Availiable
              <div class="green_av"></div>
              <div class="red_av"></div>
            </div>
          </div></a>
          <?php
                    }
                
                ?>
         <!--  
          <div class="con-verticle-3">
            <img src="products/iPhone-14-Pro-Balck.jpg" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product">Airpods Max</h4>
            <br />
            <div class="price_banner">RS: 30 000</div>
            <br />
            <br />
            <div class="availibility_row">
              Availiable
              <div class="green_av"></div>
              <div class="red_av"></div>
            </div>
          </div>
          <div class="con-verticle-3">
            <img src="images/airpods.png" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product">Airpods Max</h4>
            <br />
            <div class="price_banner">RS: 30 000</div>
            <br />
            <br />
            <div class="availibility_row">
              Availiable
              <div class="green_av"></div>
              <div class="red_av"></div>
            </div>
          </div>
          <div class="con-verticle-3">
            <img src="images/airpods.png" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product">Airpods Max</h4>
            <br />
            <div class="price_banner">RS: 30 000</div>
            <br />
            <br />
            <div class="availibility_row">
              Availiable
              <div class="green_av"></div>
              <div class="red_av"></div>
            </div>
          </div>
          <div class="con-verticle-3">
            <img src="images/airpods.png" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product">Airpods Max</h4>
            <br />
            <div class="price_banner">RS: 30 000</div>
            <br />
            <br />
            <div class="availibility_row">
              Availiable
              <div class="green_av"></div>
              <div class="red_av"></div>
            </div>
          </div> -->
        </div>
      </section>
  </body>
</html>
