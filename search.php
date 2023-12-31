<?php 
include 'config.php';
if(isset($_POST['search_input'])){
    $in = $_POST['search_input'];

   $products_sql = "SELECT * FROM products WHERE name LIKE '$in'";
   $search_res = $con->query($products_sql);



}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $in ?> - SDELECTRONICS</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="nav.css" />
    <!-- <link rel="stylesheet" href="bootstrap.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
    

    <div class="spacer"></div>
    <div class="limiter">
      <div class="spacer"></div>
      <section id="top_products">
        <h1 class="title">Results: <?= $in ?> </h1>

        <div class="spacer"></div>
        <div class="grid-auto">
           <?php
              
                    
                    while ($top= $search_res->fetch_assoc()) { ?>
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
        </div>
      </section>
    </div>

    <script src="app.js"></script>
  </body>
</html>
