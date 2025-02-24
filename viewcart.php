<?php 
// Include the configuration file 
require_once 'config.php'; 
 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
	<link rel="stylesheet" type="text/css" href="css/cpstylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.0.min.js"></script>
	
	<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
	
</head>

<body>
	<header>
	<h1>ConceptPalace</h1>
    <h5>Inspiration Through Innovation</h5>
	</header>
	
	<h2>Cart Items</h2>
	<div class="cart">
	<table class="table">
	<tbody>
		<tr>
		    <th width="35%">Product</th>
			<th width="15%">Description</th>
			<th width="10%">Category</th>
			<th width="15%">Price</th>
			<th width="5%">Quantity</th>
			<th width="15%">Total</th>
		</tr>
		<tr>
		    <td><form method='post' action=''>
<input type='hidden' name='code' value="allow" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form></td>
            <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		    <td></td>
		</tr>
		<tr>
<td colspan="5" align="right">
<strong>TOTAL: </strong>
</td>
</tr>
		</tbody>
	</table>
	
	<?php 
                        if($cart->total_items() > 0){ 
                            // Get cart items from session 
                            $cartItems = $cart->contents(); 
                            foreach($cartItems as $item){ 
                                $proImg = !empty($item["image"])?'images/products/'.$item["image"]:'images/demo-img.png'; 
                        ?>
                            <tr>
                                <td><img src="<?php echo $proImg; ?>" alt="..."></td>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo CURRENCY_SYMBOL.$item["price"].' '.CURRENCY; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td><?php echo CURRENCY_SYMBOL.$item["subtotal"].' '.CURRENCY; ?></td>
                                <td><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to remove cart item?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;" title="Remove Item"><i class="itrash"></i> </button> </td>
                            </tr>
                        <?php } }else{ ?>
                            <tr><td colspan="6"><p>Your cart is empty.....</p></td>
                        <?php } ?>
                        <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Cart Total</strong></td>
                                <td><strong><?php echo CURRENCY_SYMBOL.$cart->total().' '.CURRENCY; ?></strong></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="shop.php" class="btn btn-block btn-secondary"><i class="ialeft"></i>Continue Shopping</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-block btn-primary">Proceed to Checkout<i class="iaright"></i></a>
                        <?php } ?>
                    </div>
                </div>
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