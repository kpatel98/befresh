<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>my bascket</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/cartstyle.css">

  
</head>

<body>

  <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  
  
  
  
<?php
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	}
	
	
session_start();
 if(!isset($_SESSION['u_id']))
 {
	 ?><script>alert("you need to login");</script><?php
  header("location: login.php");
 }
 else
 {
  $uid=$_SESSION['u_id'];

 }
	
 //$id= $_GET['id'];
$dispro="select * from addcart where car_cust_id=$uid";

$resultdis=mysqli_query($conn,$dispro);
 while($rowdis = mysqli_fetch_assoc($resultdis)){
 
	$proid=$rowdis['car_pro_id'];
	$query="SELECT * FROM producta where pro_id=$proid";

			$result=mysqli_query($conn,$query);
			//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

while($row = mysqli_fetch_assoc($result)){

    ?>  
  
  
  
  <div class="product">
    <div class="product-image">
      <img src="<?php echo "admin/".$row['pro_img']; ?>">
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $row['pro_name']; ?></div>
      <p class="product-description"><?php echo $row['pro_detail']; ?></p>
    </div>
    <div class="product-price"><?php echo $row['pro_sellprice']; ?></div>
    <div class="product-quantity">
      <input type="number" value="<?php echo$rowdis['car_contity'];?>" min="1"readonly>
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price"><?php echo $row['pro_sellprice']*$rowdis['car_contity']; ?></div>
  </div>
<?php
  $total=$total+($row['pro_sellprice']*$rowdis['car_contity']);
  
   
 }}
    ?>  
  
  
  
 <!-- <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
      <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div> -->

  <div class="totals">
    <div class="totals-item">
    <!--  <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"></div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>-->
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"><?php echo $total;?></div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/cartindex.js"></script>




</body>

</html>
