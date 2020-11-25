<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>



 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->




	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Shop</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/stylex.css" />
<!--<link type="text/css" rel="stylesheet" href="css/stylex.css" />-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
 <meta charset="UTF-8">
  <title>login</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.resizedTextbox {width: 30px; height: 20px}
.resizeddrop{width: 100%; height: 20px}
.shadow{
    border: 0px solid;
    padding: 10px;
    box-shadow: 5px 10px 18px #888888;
}
.shadowb{
    border: 0px solid;
    padding: 0px;
    box-shadow: 5px 10px 18px #888888;
	}
	
	.ind{z-index: -1;}
	
	
</style++>

		<style>
		.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1;
  background-color: white;
}

.sticky + .content {
  padding-top: 102px;
}
	




	
		</style>
		
		
		
		 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vl {
  border-left: 1px solid #CCCCCC;
  height: 1000px;
}
</style>
</head>
<?php

$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	
	
$query="SELECT * FROM pro_category";
			$result=mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<body>

<div>
	
	<div id="myHeader">

	<!-- HEADER -->
	<header>
	
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to Patel-mart!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><span class="glyphicon glyphicon-earphone"></span>  +9181-401-69137</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Select city <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<!--<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>-->
						
						
						
						<!-- Account -->
						<li class="header-account dropdown default-dropdown"><div class="header-btns-icon"><i class="fa fa-user-o"></i></div>
						<li>
							
							<a href="login.php"  class="text-uppercase">Login</a> / <a href="signup.php" class="text-uppercase">Join</a>
							
							</li>
						</li>
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							
							<ul class="custom-menu">
								<li><a href="account.php" id="h_acco"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="order.html"><i class="fa fa-exchange"></i> my order</a></li>
								<li><a href="pay.html"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="login.php"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="signup.php"><i class="fa fa-user-plus"></i> Create An Account</a></li>
								<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
							</ul>
						</li>
						<!-- /Account -->
						
						
						
					</ul>
					
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<!--<a class="logo" href="index.html">
							<img src="./img/befresh.jpeg" alt="">
						</a> -->
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
					
						<form>
						<table><tr><td>
						<a class="" href="index.html">
							<img height=100 width=300 src="./img/befresh.jpeg" alt="">
						</a></td><td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>
							<input class="input search-input" type="text" placeholder="Search for product">
							</td><td>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							</td></tr></table>
						</form>
					</div><!-- Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">


						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a href="viewcart.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<a href="viewcart.php"><img src="img/basket.jpeg" height=50>
								<strong >My Basket</strong>
								<br></a>
								
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$0032.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	
	
	<!-- NAVIGATION -->
<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
					
					<!--- one dropdown --->
					<?php 
while($row = mysqli_fetch_assoc($result)){

    ?>
						<li class="dropdown side-dropdown">
							<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo $row['cat_name']; ?> <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
<?php }?>
						<!---/ one dropdown --->
						
						
						<!--- one dropdown --->
						
						<li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="#">Women’s Clothing</a></li>
											<li><a href="#">Men’s Clothing</a></li>
											<li><a href="#">Phones & Accessories</a></li>
											<li><a href="#">Jewelry & Watches</a></li>
											<li><a href="#">Bags & Shoes</a></li>
										</ul>
									</div>
									<div class="col-md-4 hidden-sm hidden-xs">
										<a class="banner banner-2" href="#">
											<img src="./img/banner04.jpg" alt="">
											<div class="banner-caption">
												<h3 class="white-color">NEW<br>COLLECTION</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<!---/ one dropdown --->
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="home.php">Home</a></li>
						<li><a href="index.php">Shop</a></li>
						<li><a href="products.html">offers</a></li>
						<li><a href="products.html">speacialty</a></li>
						
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- /NAVIGATION -->
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

	
	
	
	
	
	
	
	
	
	
<!------------------------------------------------->





<!----------------------------------------------->
	
	
	
	
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	

	
	
	
	
	
<div></div>
	
</div>
	
	<div class="col-md-12">
	
	
					<div>
						<p align= center ><font color=gray size=5><br></font></p>
						
					</div>
				</div>
	<!--</div>-->
	<div class="container">
  
  
  
  
  
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarouse2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarouse2" data-slide-to="1"></li>
      <li data-target="#myCarouse2" data-slide-to="2"></li>
	  <li data-target="#myCarouse2" data-slide-to="3"></li>
	  
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href=" "><img src="popup/s2_1.jpg" alt="Los Angeles" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href=" "><img src="popup/s2_2.jpg" alt="Chicago" style="width:100%;"></a>
      </div>
    
      <div class="item">
        <a href=" "><img src="popup/s2_3.jpg" alt="New york" style="width:100%;"></a>
      </div>
	  
	   <div class="item">
        <a href=" "><img src="popup/s2_4.jpg" alt="New york" style="width:100%;"></a>
      </div>
	  
    </div>

    <!-- Left and right controls -->
   
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
	<br><br><br>
	<!-- Wrapper for slides -->
	
	
	<!-- section-title -->
				
	<!-- /section-title -->
	
	
		
	
	
	
	
<script>
function myFunctiona() {
  var checkBox = document.getElementById("myCheck");
  var textt = document.getElementById("textt");
  if (checkBox.checked == true){
    
	location.replace("displaytry.php");
	textt.style.display = "block";
  } else {
     textt.style.display = "none";
  }
}
</script>
<script>
function addcart(str) {
	
  var xhttp;   
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==0)
            window.location.href = "login.php";
      
    }
  };
  xhttp.open("GET", "addcart_insert.php?id="+str, true);
  xhttp.send();
}
function detail(str) {
	
  var xhttp;   
 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      
    }
  };
  
  xhttp.open("GET", "product_detail.php?id="+str, true);
  xhttp.send();
}
</script>







	<div class="container">
	
	
		<div class="col-md-2">
	
		<font size=4 color="#595959" >Category</font>
		<hr>
		<font size=3 color="#8c8c8c">
		</font>
		
		<?php
				 $sqlq= "select cat_name from pro_category where cat_id=27 "; 
				 $resultq=mysqli_query($conn,$sqlq);
				 $rowq = mysqli_fetch_assoc($resultq);
				
			?>		
				
		<label ><font color="#88cc00"><?php echo $rowq['cat_name'];?></font></label>
		
		<?php
				 $sqly= "select * from sub_category where cat_id=27"; 
				 $resulty=mysqli_query($conn,$sqly);
				 
				 while($rowy = mysqli_fetch_assoc($resulty))
				 {
					echo "<label ><font color=gray>". $rowy['sub_name'] ."</font></label>";
				 }
			    	
				?>
		
		
		
		
<br>
		<input type="checkbox" id="myCheck"  onclick="myFunctiona()">
	</div>
	
	<div class="col-md-10">
	
	
	
	
	


	<?php

$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	?>
	<?Php
$query="SELECT * FROM producta group by pro_simelar";
			$result=mysqli_query($conn,$query);
			//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
	
	<?php 
while($row = mysqli_fetch_assoc($result)){

    ?>
	
<form name="ind_display">
<p id="ind_pack">
<div class="col-md-3" >
	<!-- product -->
	<table border=0 class=shadow width="170" height="375" >
	<tr><td colspan="2" align="right" bgcolor="" class=shadowb><font size=2 color="#990000">
	
	<?php
	if($row['pro_dis']!=0)
	{
		echo "GET".$row['pro_dis']."% off"; 
	}
	else
	{
		echo "SAVE Rs ".$row['pro_save'];
	}
	
	
	?>
	
	<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;</font></td></tr>
	<tr><td> &nbsp;</td></tr>
	<tr><td colspan="2" cellpadding=50 align=center><div class=ind><a href="product_detail.php"><img  height=150 width=150 src="<?php echo "admin/".$row['pro_img']; ?>" /></a></div></td></tr>
	<tr><td colspan="2" bgcolor=""><font size=1 color="#c0c0c0">&nbsp;&nbsp;&nbsp;<?php echo $row['pro_brand']; ?></font></td></tr>
	<tr><td colspan="2" bgcolor=""><font size=2 color="#595959"> <?php echo $row['pro_name']; ?></font></td></tr>
	<tr><td colspan="2" bgcolor="">&nbsp;</td></tr>
	<tr><td colspan="2" bgcolor="">
	
	 
	
	<font size=2 color="#595959">
	
	<!-- add droup down  -->
	<?php
	$a=$row['pro_simelar'];
	
	
				 $sql1= "select * from producta where $a=pro_simelar"; 
				 
				 $result1=mysqli_query($conn,$sql1);
				 ?><div class="chan"><?php
				 echo "<select  onchange='packsize()' name='ind_packsize'>";?></div><?php
				 while($row1 = mysqli_fetch_assoc($result1))
				 {
					echo "<option value=".$row1['pro_id'].">". $row1['pro_contity']." ".$row1['pro_contype']." - Rs ".$row1['pro_sellprice']."</option>";
				 }
			    	echo "</select>";
				?>
	
	</font>
  
  
  
  </td></tr>
  
  
 <!-- #f2f2f2 bgcolor=""-->
  
  
  <tr><td colspan="2" bgcolor="#f2f2f2">
						<table><tr><td><font size=1 color="#808080">&nbsp;&nbsp;MRP: <strike>Rs.<?php echo $row['pro_sellprice']; ?></strike></font></td><td><h4><font size=3 color="#595959">&nbsp;&nbsp;Rs. <?php echo $row['pro_finelprice']; ?></font></h4></td></tr></table>
						</td></tr>
	<tr><td colspan="2" bgcolor="#f2f2f2"><font size=1 color="#808080 ">&nbsp;&nbsp;<i class="fa fa-truck"></i> Express deleviry by tommorrow</font></td></tr>
	<tr><td bgcolor="#f2f2f2"><font size=2 color="#808080 ">&nbsp;Qty</font><input type="textbox" class="resizedTextbox" name="ind_qty" value="" ></td><td bgcolor="#f2f2f2"  align=center>
	
	<?php
	$addc=$row['pro_id'];
	?>
	<button type="button" class="btn btn-success btn-xs" onclick="addcart(<?php echo $row['pro_id']; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span>Add</button></td></tr>
	</table>
<div class="col-md-12">&nbsp;&nbsp;</div><div class="col-md-12">&nbsp;&nbsp;</div>
	<!-- product -->
</div></p></form>
      <?php
}
   
?></p>
<!-- product single -->
<script>
function packsize() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ind_pack").innerHTML =
            this.responseText;
       }
    };
	
    xhttp.open("GET", "ind_select.php?ind_id="+document.forms["ind_display"]["ind_packsize"].value, true);
    xhttp.send(); 
  
  
}
</script>
	
	
	
	
	
	
	
	
	
	<div class="vl"></div>
	
	</div>

</div>

	<!-- section-title -->
			
	<!-- section-title -->
	<!-- section-title -->
	<!-- section-title -->
	<!-- section-title -->
	<!-- section-title -->
	<!-- /section-title -->
	
	
	
	<!-- /section-title -->
	

	
	
	
	
	
	


	
	
	
	
	<div class="col-md-12">
	
	
					<div>
						<p align= center ><font ><br><br></font></p>
						
					</div>
				</div>
	
	
	
	
	<h1 >Patel-mart – online grocery store</h1>
	<div class="ggroove">
	<p>Did you ever imagine that the freshest of fruits and vegetables, top quality pulses and food grains, dairy products and hundreds of branded items could be handpicked and delivered to your home, all at the click of a button? India’s first comprehensive online megastore, bigbasket.com, brings a whopping 20000+ products with more than 1000 brands,to over 4 million happy customers. From household cleaning products to beauty and makeup, bigbasket has everything you need for your daily needs. bigbasket.com is convenience personified Wehave taken away all the stress associated with shopping for daily essentials, and you can now order all your household products and even buy groceries onlinewithout travelling long distancesor standing in serpentine queues. Add to this the convenience of finding all your requirements at one single source, along with great savings, and you will realise that bigbasket- India’s largest online supermarket, has revolutionised the way India shops for groceries. Online grocery shopping has never been easier. Need things fresh? Whether it’s fruits and vegetables or dairy and meat, we have this covered as well! Get fresh eggs, meat, fish and more online at your convenience. Hassle-free Home Delivery options</p>

	<p>We deliver to 25 cities across India and maintain excellent delivery times, ensuring that all your products from groceries to snacks branded foods reach you in time.</p>

	<p>
	<ul >
	<li>-Slotted Delivery: Pick the most convenient delivery slot to have your grocery delivered. From early morning delivery for early birds, to late-night delivery for people who work the late shift, bigbasket caters to every schedule.<br></li>
	<li>-Express Delivery: This super useful service can be availed by customers in cities like Bangalore, Mumbai, Pune, Chennai, Kolkata, Hyderabad and Delhi-NCR in which we deliver your orders to yourdoorstep in 90 Minutes .<br></li>
	<li>-BB Speciality stores: Missed out on buying that essential item from your favourite neighbourhood store for tonight’s party? We’ll deliver it for you! From bakery, sweets and meat to flowers and chocolates, we deliveryour order in 90 minutes, through a special arrangement with a nearby speciality store, verified by us.<br></li>
	</ul>
	</P>
	
	</div>
	<br><br>
	
	
	
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				
				<!-- footer widget -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-header"><font color=#88cc00>patel-mart</font></h3>






						<ul class="list-links">
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="wishlist.html">In News</a></li>
							
							<li><a href="aboutgreen.html">Green Patel-mart</a></li>
							<li><a href="login.html">Privacy Policy</a></li>
							<li><a href="login.html">Affiliate</a></li>
							<li><a href="login.html">Terms and Conditions</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>





				<!-- footer widget -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-header"><font color=#88cc00>Help</font></h3>
						<ul class="list-links">
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">pm Wallet FAQs</a></li>
							<li><a href="#">pm Wallet T&amp;Cs</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				
				

						

						<!-- footer social -->
						<div class="footer">
						<h3 class="footer-header"><font color=#88cc00>Get Social With Us</font></h3></div>
						<ul class="footer-social">
							<li><a href="https://m.facebook.com/aghera.kevin.3?ref=nf"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				
				
			
				
				
				
				
			</div>
			<!-- /row -->
			<hr>
			<div class=container>
			<table>
			<tr><td width=200><h5><font color=#88cc00>POPULAR CATEGORIES:</font></h5></td><td>
			<a href=" ">Washing Powders,</a>
			<a href=" "> Milk,</a>
			<a href=" "> Tea,</a>
			<a href=" "> Liquid Soaps & Bars,</a>
			<a href=" "> Toor Dal,</a>
			<a href=" "> Ghee,</a>
			<a href=" "> Washing Bars,</a>
			<a href=" "> Other Fruits,</a>
			<a href=" "> Butter & Cream,</a>
			<a href=" "> Basmati Rice,</a>
			<a href=" "> Cheese,</a>
			<a href=" "> Fresh Chicken,</a>
			<a href=" "> Toothpaste,</a>
			<a href=" "> Toilet Cleaners,</a>
			<a href=" "> Glucose,</a>
			<a href=" "> Marie & Milk Biscuits,</a></td></tr><tr><td><br></td><td></td></tr>
			
			<tr><td width=200><h5><font color=#88cc00>POPULAR BRANDS:</font></h5></td><td>
			<a href=" ">Fresho,</a>
			<a href=" "> pm Royal,</a>
			<a href=" "> Surf Excel,</a>
			<a href=" "> Amul,</a>
			<a href=" "> Nestle ,</a>
			<a href=" "> Saffola,</a>
			<a href=" "> Britannia,</a>
			<a href=" "> Harpic,</a>
			<a href=" "> Lizol,</a>
			<a href=" "> Colgate,</a>
			<a href=" "> Dettol,</a>
			<a href=" "> Dabur,</a>
			<a href=" "> Tata I Shakti,</a>
			<a href=" "> Dhara ,</a>
			<a href=" "> Fresho Meats,</a>
			<a href=" "> Parle,</a>
			<a href=" "> Real,</a>
			<a href=" "> Tropicana,</a>
			<a href=" "> Kissan,</a>
			<a href=" "> danone,</a></td></tr></tr><tr><td><br></td><td></td></tr>
			
			<tr><td width=200><h5><font color=#88cc00>CITIES WE SERVE:</font></h5></td><td>
			
			<a href=" ">Bangalore,</a>
			<a href=" "> Hyderabad,</a>
			<a href=" "> Mumbai,</a>
			<a href=" "> Pune,</a>
			<a href=" "> Chennai,</a>
			<a href=" "> Delhi,</a>
			<a href=" "> Mysore,</a>
			<a href=" "> Coimbatore,</a>
			<a href=" "> Vijayawada-Guntur,</a>
			<a href=" "> Kolkata,</a>
			<a href=" "> Ahmedabad-Gandhinagar,</a>
			<a href=" "> Lucknow-Kanpur,</a>
			<a href=" "> Gurgaon,</a>
			<a href=" "> Vadodara,</a>
			<a href=" "> Visakhapatnam,</a>
			<a href=" "> Surat,</a>
			<a href=" "> Nagpur,</a>
			<a href=" "> Patna,</a>
			<a href=" "> Indore,</a>
			<a href=" "> Chandigarh Tricity,</a>
			<a href=" "> Jaipur,</a>
			<a href=" "> Noida-Ghaziabad,</a> </td></tr>
			</table>
			</div>
			
			
			
			<hr>
			<!-- row -->
			<div class=container>
			<div class="col-md-8">
				
						Copyright &copy;2011-<script>document.write(new Date().getFullYear());</script> Supermarket Grocery Supplies Pvt Ltd
			</div>	
			
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	
	
	
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

	
	
	
	
	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	
	
	
	<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
</body>

</html>
