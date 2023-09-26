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
   $total = 0;
   
   
   

 

  $email = $_SESSION['UserEmail'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart - SDElectronics</title>
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav.css" />
    <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>
    <div class="nav">
      <a href="../sdElectronics"><div class="logo">SDELECTRONICS</div></a>
      <form action="search.php" method="POST">
      <div class="search_input_holder">
        <input class="Search_input"type="text" placeholder="Type Here...." name="search_input" />
        <input class="search_btn" type="submit" value="Search" />
        
        
      </div>
      </form>
      <a href="profile.php"> <button class="login">Cart</button></a>
    </div>
    <div class="spacer"></div>
    
    
    <div class="cart-holder-limiter">
      <p>Product</p>
      <hr />
      <?php
              
                    
                    while ($data= $query_res->fetch_assoc()) { ?>
                    
                    <?php
                    $id = $data['product'];
                     $products_sql = "SELECT * FROM products WHERE id = '$id' ";
                      $product_res = $con->query($products_sql);
                      $top= $product_res->fetch_assoc() 
                      
                      ?>
                      <?php $price = $top['price'];   $total = ($price * $data['quantity']) + $total; ?>
      <div class="cart-holder">
        <img src="upload/uploads/<?= $top['image'];?>" alt="image cart" class="cart-img" />
        <div class="name"><?= $top['name'];?></div>
        <div class="quantity-holder">
          <input type="number" value="<?= $data['quantity'];?>" class="quantity" />
        </div>
        <div class="price"><?= $usd = "RS: " . number_format($price, 2, ".", ","); ?></div>
        <a href="delete.php?id=<?= $data['id'];?>"><div class="close">X</div></a>
      </div>
      <hr />
      <?php }?>
       <a href="profile.php"><button class="buyNow">Update Cart</button></a>
    </div>

    <div class="spacer"></div>
    <div class="limiter">
      <div class="total">
        <u
          ><b><h4>Total</h4> </b></u
        >
        <hr />
        RS: 

                    
            <?= $usd = "RS: " . number_format($total, 2, ".", ","); ?>      
        <br />
        <a href="checkout.php?t=<?=$total?>"><button class="buyNow">Proceed To Checkout</button></a>
      </div>
    </div>
    <div class="spacer"></div>
    <div class="spacer"></div>

  </body>
</html>
  