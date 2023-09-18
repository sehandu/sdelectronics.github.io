<?php

   session_start();
   include 'config.php';

   $products_sql = "SELECT * FROM products WHERE isTop = 1 ORDER BY id desc limit 6";
   $product_res = $con->query($products_sql);
   $Apple_products_sql = "SELECT * FROM products WHERE isApple = 1 ORDER BY id desc limit 6";
   $Apple_product_res = $con->query($Apple_products_sql);
    $Samsung_products_sql = "SELECT * FROM products WHERE isSamsung = 1 ORDER BY id ";
   $amsung_product_res = $con->query($Samsung_products_sql);
    $Acc_sql = "SELECT * FROM products WHERE cat = 3 ORDER BY id limit 8 ";
   $Acc_res = $con->query($Acc_sql);
//    $learn_sql = "SELECT * FROM learn ORDER
// BY id desc limit 3";
//  $learn_res = $con->query($learn_sql); 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SDELECTRONICS</title>
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
      <a href="login/"> <button class="login">Login</button></a>
    </div>
    <section id="header">
      <div class="arrow-left" onclick="left()">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="arrow-right" onclick="right()">
        <i class="fa-solid fa-arrow-right"></i>
      </div>
      <div class="caption">
        <button class="btn">
          <span class="btn-text-one">Buy Now</span>
          <span class="btn-text-two">Click Here</span>
        </button>
      </div>
    </section>
    <div class="spacer"></div>
    <div class="limiter">
      <div class="service_banner">
        <div class="grid-3">
          <div class="card">
            <img src="svg/customer-service.svg" alt="" class="svg" />
            <h4>24/7 Service</h4>
          </div>
          <div class="card">
            <img src="svg/guarantee.svg" alt="" class="svg" />
            <h4>Money back guarantee</h4>
          </div>
          <div class="card">
            <img src="svg/delivery-truck.svg" alt="" class="svg" />
            <h4>Island wide delivery</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="spacer"></div>
    <!-- <section id="search">
      <div class="search_input_holder">
        <input type="text" placeholder="Search" /><img
          src="svg/search.png"
          alt=""
        />
      </div>
    </section> -->

    <div class="spacer"></div>
    <div class="limiter">
      <section id="catalog">
        <div class="cat_flex">
          <a href="product_list.php?cat=smartPhones">
          <div class="con-verticle">
            <br />
            <p class="red">10% OFF</p>
            <h1>Mobile Phones</h1>
            <br />
            <p class="dis">
              Buy your smart phone from us and get 10% discount.
            </p>
            <img src="./images/phones.webp" class="cat-img-1" alt="" />
          </div>
</a>
<a href="product_list.php?cat=lap_pc">
          <div class="con-horizontal">
            <div class="laptop-con">
              <div class="_con">
                <br />
                <p class="red">5% OFF</p>
                <h1>Laptops $ PC</h1>
                <br />
                <p class="dis">Buy your Laptop from us and get 5% discount.</p>
              </div>
              <img src="./images/laptop.png" alt="" class="cat-img-2" />
            </div>
</a>
            <div class="spacer"></div>
           <a href="product_list.php?cat=acc"> <div class="flexerer">
              <div class="con-verticle-2">
                <br />
                <p class="red">20% OFF</p>
                <h1>accessories</h1>
                <br />

                <img src="./images/gimble.png" class="cat-img-1" alt="" />
              </div>
              </a>
              <a href="product_list.php?cat=speakers">
              <div class="con-verticle-2">
                <br />
                <p class="red">20% OFF</p>
                <h1>Speakers And Ear buds</h1>
                <br />

                <img src="images/airpods.png" class="cat-img-1" alt="" />
              </div>
</a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="limiter">
      <section id="top_products">
        <h1 class="title">Best Selling</h1>

        <div class="spacer"></div>
        <div class="grid-auto">
          <?php
              
                    
                    while ($top= $product_res->fetch_assoc()) { ?>
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
      <div class="spacer"></div>
      <div class="spacer"></div>
      <!-- <div class="banner-img"><img src="images/apple-banner.jpg" class="banner" alt=""></div> -->
<!-- <div class="spacer"></div>
<div class="spacer"></div> -->
      <section id="mobile">
        <h1 class="title">Smart Phones</h1>
        <div class="spacer"></div>
        <div class="tab">
          <div class="one" onclick="tabController(samsung)">
            Samsung
            <div class="line" id="one_line"></div>
          </div>
          <div class="two" onclick="tabController(apple)">
            Apple
            <div class="line" id="two_line"></div>
          </div>
          <!-- <div class="two" onclick="tabController(apple)">
            huawei
            <div class="line three_line"></div>
          </div> -->
        </div>

        <div class="spacer"></div>
      
        <div class="tab_content">
          <div class="grid-auto" id="samsung">
               <?php
              while ($Samsung= $amsung_product_res->fetch_assoc()) { ?>
                     <a href="product.php?id=<?= $Samsung['id']?>">  <div class="con-verticle-3">
              <img src="./upload/uploads/<?= $Samsung['image']?>" class="cat-img-3" />
              <br />
              <br />
              <h4 class="product"><?= $Samsung['name']?></h4>
              <br />
              <div class="price_banner">RS: <?= $Samsung['price']?></div>
              <br />
              <br />
              <div class="availibility_row">
                Availiable
                <div class="green_av"></div>
                <div class="red_av"></div>
              </div>
            </div>
              </a>
          <?php
                    }
                
                ?>
           
           
          </div>
          <div class="grid-auto tab_content_slides" id="apple">
            <?php
              while ($Apple= $Apple_product_res->fetch_assoc()) { ?>
                     <a href="product.php?id=<?= $Apple['id']?>">  <div class="con-verticle-3">
              <img src="./upload/uploads/<?= $Apple['image']?>" class="cat-img-3" />
              <br />
              <br />
              <h4 class="product"><?= $Apple['name']?></h4>
              <br />
              <div class="price_banner">RS: <?= $Apple['price']?></div>
              <br />
              <br />
              <div class="availibility_row">
                Availiable
                <div class="green_av"></div>
                <div class="red_av"></div>
              </div>
            </div>
              </a>
          <?php
                    }
                
                ?>
          </div>
        </div>
      </section>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <!-- <div class="banner-img"><img src="images/jbl-banner.jpg" class="banner" alt=""></div>
      <div class="spacer"></div>
      <div class="spacer"></div> -->
      <section id="accessories">
        <h1 class="title">Accessories</h1>
        <div class="spacer"></div>
        <div class="grid-auto">
          <?php
              
                    
                    while ($Acc= $Acc_res->fetch_assoc()) { ?>
                    <a href="product.php?id=<?= $Acc['id']?>">
                      <div class="con-verticle-3">

            <img src="./upload/uploads/<?= $Acc['image']?>" class="cat-img-3" />
            <br />
            <br />
            <h4 class="product"><?= $Acc['name']?></h4>
            <br />
            <div class="price_banner">RS: <?= $Acc['price']?></div>
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
      </section>
    </div>
    <section id="footer">
      <div class="container">
        <h1>Copyright © 2023 SDELECTRONICS. All Rights Reserved.</h1>
      </div>
    </section>
    <script>
      const slider = document.querySelector("#header");

      const images = ["ad-1.jpg", "ad-2.jpg", "ad-3.jpg", "ad-4.webp"];
      let count = 0;
      let length = images.length;
      console.log(length);
      slide(count);
      function slide(count) {
        // console.log(count);

        let test = "ad-1.jpg";
        let text = "url(top_ads/" + images[count] + ")";
        slider.style.backgroundImage = text;
      }
      function right() {
        // console.log(length);
        count++;
        if (count == length) {
          count = 0;
        }
        console.log(count);
        slide(count);
      }
      function left() {
        count--;
        if (count == -1) {
          count = length - 1;
        }
        console.log("count" + count);
        slide(count);
      }
      setInterval(slideChange, 3000);

      function slideChange() {
        count++;
        if (count == length) {
          count = 0;
        }
        slide(count);
      }
    </script>
    <script src="app.js"></script>
  </body>
</html>
