<?php 

$price = $_GET['t'];
$total = $price + 500;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout - SDElectronics</title>
    <link rel="stylesheet" href="checkout.css" />
    <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>
    <div class="limiter">
      <h1>CHECKOUT</h1>
      <form action="proceed.php" method="POST">
        <br />
        <!-- <br /> --><label class="form-lable">UserName</label>
        <input
          type="text"
          class="form-control"
          id="email"
          required
          name="name"
          placeholder="UserName"
        />

        <br />
        <label class="form-lable">Address</label>

        <input
          required
          type="text"
          class="form-control"
          id="address"
          name="address"
          placeholder="Address"
        />
        <br />
        <br />
        <h2>Total Price</h2>
        <hr />
        <h5>price: 
<input
          required
          type="hidden"
          
          value=<?= $total?>
          name="total"
          
        />
                    
            <?= $usd = " " . number_format($price, 2, ".", ","); ?>   </h5>
        <h5>shipping: 500</h5>
        <br />
        <h4>Total: <?= $usd = " " . number_format($total, 2, ".", ","); ?></h4>
        <br />

        <input type="submit" class="btn btn-primary" />
      </form>
    </div>
  </body>
</html>
