<?php session_start();?>

<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/style_checkout.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="function.js"></script>
</head>
<style>
.quantity-btn {
    margin-top: 118px;
    display: flex;
}
 .quantity-btn input {
    width: 30px;
    border: none;
    outline: none;
    text-align: center;
    background-color: #EB5E28;
    color: #FFFCF2;
}
</style>
<body>

        <?php 
          include "DBQuery.php"; 
          $product = []; 
          if(isset($_SESSION['ID'])){
            $ID = $_POST['productID'];
            $product = getProductInfo($ID); 
         

          }
          else if (!isset($_SESSION['ID'])){
            $status_message = "Please Log In First";
            $ID = $_SESSION['productID']; 
            $path = "item.php?myVariable=" . urlencode($ID);
            echo "<script>  alert('$status_message'); window.location.href = '$path'; </script>";
          }
        ?>

        <div class="container">
        <section class="shipping-info">
          <h3>Shipping Information</h3>
          <p>Contact Information</p>
          <input type="text" id="fname" name="fname" placeholder="First Name">
          <input type="text" id="lname" name="lname" placeholder="Last Name">
          <input type="tel" id="pnumber" name="pnumber" placeholder="Phone Number">

          <p>Shipping Address</p>
          <input type="text" id="country" name="country" placeholder="Country">
          <input type="text" id="province" name="province" placeholder="Province">
          <input type="text" id="municipality" name="municipality" placeholder="Municipality">
          <input type="text" id="zip" name="zip" placeholder="Zip">

          <section class="paymentMethods">
            <h4>Payment Method</h4>
            <div class="payment-options">
              <button id="cash-on-delivery" onclick="selectPaymentOption('cash-on-delivery')">Cash on Delivery</button>
              <button id="credit-card" onclick="selectPaymentOption('credit-card')">Credit Card</button>
              <button id="other" onclick="selectPaymentOption('other')">Other</button>
            
            </div>
          </section>
          </section>

        <section class="cart">
          <h3>Your Cart</h3>
          <p id="qty">Qty</p>
          <div class="grid-container">

          <form action="checkout-server.php" Method ="" > 
            <?php
              checkOutRow($product); 
            ?>
            
              <button id="checkout" onclick="selectPaymentOption('other')">Checkout</button>
          </form>

        </div>
        </section>
      </div>
      <div id="credit-card-form" class="payment-form hidden">
        <form>
          <input type="text" id="fullName" name="fullName" placeholder="Full Name on Card" required>
          <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number" required>
          <input type="text" id="expiration" name="expiration" placeholder="Expiration" required>
          <input type="text" id="securityCode" name="securityCode" placeholder="Card Security Code" required>
          <button type="button" id="continueToCheckout" onclick="continueToCheckout()">Continue to Checkout</button>
        </form>
      </div>

      <form action="checkout-server.php">


</form>
          <script>
            
          </script>

</body>
</html>