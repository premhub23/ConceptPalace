<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
include ("databaseconnect.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/checkoutform.css">
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
	<div class="navigation bar">
<ul class="nav justify-content-center">
<li><a href="index.php"><b>HOME</b></a></li>
<li><a href="artists.php">ARTISTS</a></li>
<li><a href="news.php">NEWS</a></li>
<li><a href="contact us.php">CONTACT US</a></li>
<li><a href="about us.php">ABOUT US</a></li>
<li><a href="Shop.php">SHOP</a></li>
</ul>
</div>
    <div>
 <p> Checkout Form</p>
		
		<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="databaseconnect.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$0</span></p>
      <p><a href="#">Product 2</a> <span class="price">$0</span></p>
      <p><a href="#">Product 3</a> <span class="price">$0</span></p>
      <p><a href="#">Product 4</a> <span class="price">$0</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$0</b></span></p>
    </div>
  </div>
</div>

	</div>
	<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
</body>
</html>