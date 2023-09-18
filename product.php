<?php 
   include 'config.php';

$id = $_GET['id'];
$products_sql = "SELECT * FROM products WHERE id = $id ";
$product_res = $con->query($products_sql);
$products= $product_res->fetch_assoc();
$name = $products['name'];
$image1 = $products['image'];


// $desc = $products['description'];
$post = nl2br($products['description']);

$post = '<p class="blog-text">' .preg_replace('#(<br/>[\r\n]+){2}#', '<p><p>', $post).'</p>';

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $name?> - SDElectronics</title>
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="product.css" />
    <link rel="stylesheet" href="nav.css">
    
    
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
    <br>
    <section id="details">
      <div class="slider_img">
        <div class="flex">
          <div class="arrow-left" onclick="left()">
            <i class="fa-solid fa-arrow-left"></i>
          </div>
          <div class="arrow-right" onclick="right()">
            <i class="fa-solid fa-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="details_txt">
        <div class="title"><?= $products['name']?></div>
        <!-- <div class="list">
          <ul>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
            <li>256 storage</li>
          </ul>
        </div> -->

        <div class="description_text">
          <?= $post?>
        </div>
        <div class="spacer"></div>
        <div class="price">Rs: <?= $products['price']?></div>
      </div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="btn_con">
        <button class="buy">Buy Now</button>
      </div>
    </section>

    <section id="ds_image">
      <img src="./upload/uploads/<?= $products['description_img']?>" alt="" class="description_image" />
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="spacer"></div>
    </section>


    <script>
      const slider = document.querySelector(".slider_img");

      const images = ["<?= $products['image']?>", "<?= $products['image_2']?>","<?= $products['image_3']?>","<?= $products['image_4']?>"];
      let count = 0;
      let length = images.length;
      console.log(length);
      slide(count);
      function slide(count) {
        // console.log(count);

        let test = "ad-1.jpg";
        let text = "url(./upload/uploads/" + images[count] + ")";
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
      //   setInterval(slideChange, 3000);

      function slideChange() {
        count++;
        if (count == length) {
          count = 0;
        }
        slide(count);
      }
    </script>
  </body>
</html>
