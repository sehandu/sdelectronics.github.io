<?php 
   include 'config.php';

$id = $_GET['id'];
$products_sql = "SELECT * FROM products WHERE id = $id ";
$product_res = $con->query($products_sql); 
$products= $product_res->fetch_assoc(); $name = $products['name']; 
$image1 = $products['image']; 
$post = nl2br($products['description']); 
$post = '<ul class="list">' .preg_replace('#([\r\n]+)#', '<li><li>', $post).'</ul>'; ?>

<!DOCTYPE html>
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

    <link rel="stylesheet" href="nav.css" />
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
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
    <br />
    <div class="spacer"></div>
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

      <div class="details_txt">
        <div class="flexerer">
          <div class="title"><?= $products['name']?></div>
          <div class="price">
            Rs:
            <?= $products['price']?>
          </div>
        </div>

        <div class="spacer"></div>
        <form action="addCart.php" method="POST">
          <div class="flexerer">
            
            <div class="c">quantity<br><input type="number" name="quantity" value="1" class="input quantity-input" /></div>
            

            
            <input type="hidden" name="id" value="<?=$products['id']?>">

            <!-- <a href="addCart.php?pId="
              ><button class="cart_add">Add To Cart</button></a
            > -->
            <input type="submit" value="add to cart" class="cart_add">
          
        </form>
<a href="checkout.php?t=<?=$products['price']?>"><div class="buy">Buy Now</div></a>
 </div>
        

        <div class="spacer"></div>
        <div class="tab">
          <div class="one" onclick="tabController(samsung)">
            Description
            <div class="line" id="one_line"></div>
          </div>
          <div class="two" onclick="tabController(apple)">
            Specifications
            <div class="line" id="two_line"></div>
          </div>
        </div>
        <div class="spacer"></div>

        <div id="samsung">
          <?= $post?>
        </div>
        <div class="spacer"></div>
      </div>
      <div id="apple">
        <div class="con">
          <img
            src="./upload/uploads/<?= $products['description_img']?>"
            alt=""
            class="description_image"
          />
        </div>
        <!-- <div class="co">
        </div>
        <div class="spacer"></div> -->
      </div>
    </section>

    <script src="app.js"></script>

    <script>
      const slider = document.querySelector(".slider_img");

      const images = [
        "<?= $products['image']?>",
        "<?= $products['image_2']?>",
        "<?= $products['image_3']?>",
        "<?= $products['image_4']?>",
      ];
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
