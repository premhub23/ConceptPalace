<?php 
// Start session to manage cart
session_start();


class Cart {
    public function total_items() {
        return isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0;
    }
}

// Initialize the cart
$cart = new Cart();

// Add product to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    // Check if product already exists in the cart
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = 1; // Add the product to the cart
    } else {
        $_SESSION['cart'][$product_id] += 1; // Increment quantity if already in the cart
    }
    // Set a session variable to display a confirmation message
    $_SESSION['message'] = "Product added to cart successfully!";
    header("Location: viewcart.php"); // Redirect to cart page
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/productcard.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
<div class="search">
    <form class="form-wrapper-2 cf">
        <input type="text" placeholder="Search" required>
        <button type="submit">Search</button>
    </form>
</div>
	
	<div class="navigation bar">
<ul class="nav justify-content-center">
<li><a href="index.php">HOME</a></li>
<li><a href="artists.php">ARTISTS</a></li>
<li><a href="news.php">NEWS</a></li>
<li><a href="contact us.php">CONTACT US</a></li>
<li><a href="about us.php">ABOUT US</a></li>
<li><a href="Shop.php"><b>SHOP</b></a></li>
<li><a href="admin.php">LOGIN/SIGNUP</a></li>	
</ul>
</div>
    <div>

		<p> Welcome to ConceptPalace.</p>
		
		<p> Shop</p>
		
		<div class="container">
		
		<div id="product-gallery" class="row">
		
			<div class="col-md-4">
				
			<div class="card">
	<form method="post">				
  <input type="hidden" name="product_id" value="1">				
  <img src="shop/archer tote bag by ansil.jpg" alt="archer tote bag" style="width:100%">
  <h1>Archer tote bag by Ansil Quow</h1>
  <p class="price">$24.99</p>
  <p>A custom made tote bag feature the archer by Ansil Quow.</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
					</form>
</div>
	
				
		<div class="card">
	<form method="post">
  <input type="hidden" name="product_id" value="2">	
  <img src="shop/dog men t-shirt by jonathan.png" alt="dog men t-shirt" style="width:100%">
  <h1>Dog Men T-Shirt by Jonathan Providence</h1>
  <p class="price">$19.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
</div>
	
				
			<div class="card">
	<form method="post">		
  <input type="hidden" name="product_id" value="3">		
  <img src="shop/manticore t-shirt by premchand.png" alt="manticore t-shirt" style="width:100%">
  <h1>Manticore T-Shirt by Premchand Budhooram</h1>
  <p class="price">$9.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
				
</div>
	
				<div class="card">
	<form method="post">				
  <input type="hidden" name="product_id" value="4">	
  <img src="shop/ogre t-shirt by premchand.png" alt="ogre t-shirt" style="width:100%">
  <h1>Ogre T-Shirt by Premchand Budhooram</h1>
  <p class="price">$9.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
</div>
	
		<div class="card">
	<form method="post">		
  <input type="hidden" name="product_id" value="5">			
  <img src="shop/shooter lunch box by ansil.jpg" alt="shooter lunch box by ansil" style="width:100%">
  <h1>Shooter Lunch Box by Ansil Quow</h1>
  <p class="price">$39.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
</div>
				
				<div class="card">
	<form method="post">
  <input type="hidden" name="product_id" value="6">	
  <img src="shop/superhero girl character t-shirt by ansil.png" alt="superhero girl t-shirt" style="width:100%">
  <h1>Superhero Girl T-Shirt by Ansil Quow</h1>
  <p class="price">$19.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
</div>
	
				<div class="card">
	<form method="post">
  <input type="hidden" name="product_id" value="7">	
  <img src="shop/thor t-shirt by ansil.png" alt="thor t-shirt" style="width:100%">
  <h1>Thor T-Shirt by Ansil Quow</h1>
  <p class="price">$19.99</p>
  <p>Some text about the product..</p>
  <p><a href="viewcart.php" title="View Cart"><i class="icart"><button type="submit" name="add_to_cart" onclick="myFunction()" >Add to Cart</button></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':0; ?>)</a></p>
			</form>
</div>
	
				
			</div>
		</div>

	</div>
		
</div>
	
	<?php 
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
    unset($_SESSION['message']); // Clear the message after displaying
}
?>
	<script>
	function addToCart(productId, quantity) {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    if (cart[productId]) {
        cart[productId] += quantity;
    } else {
        cart[productId] = quantity;
    }
    localStorage.setItem('cart', JSON.stringify(cart));
}
	</script>
		
	<footer>
	<h1>ConceptPalace</h1>
<h5>Inspiration Through Innovation</h5>
<h6> &copy ConceptPalace 2025 </h6>
	</footer>
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	
</body>
</html>