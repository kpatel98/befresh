
<html>



<head>



 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->




	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

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
	
	
</style>

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






<body>

<?php

$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	$ind_idd=$_GET['ind_id'];
$queryi="SELECT * FROM producta where pro_id=$ind_idd group by pro_simelar";
			$resulti=mysqli_query($conn,$queryi);
			//$rowind = mysqli_fetch_array($resulti,MYSQLI_ASSOC);

	
	
while($rowind = mysqli_fetch_assoc($resulti)){

    ?>



<div class="col-md-3" >
	<!-- product -->
	<table border=0 class=shadow width="170" height="375" >
	<tr><td colspan="2" align="right" bgcolor="" class=shadowb><font size=2 color="#990000">
	
	<?php
	if($rowind['pro_dis']!=0)
	{
		echo "GET".$rowind['pro_dis']."% off"; 
	}
	else
	{
		echo "SAVE Rs ".$rowind['pro_save'];
	}
	
	
	?>
	<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;</font></td></tr>
	<tr><td> &nbsp;</td></tr>
	<tr><td colspan="2" cellpadding=50 align=center><div class=ind><img height=150 width=150 src="<?php echo "admin/".$rowind['pro_img']; ?>" /></div></td></tr>
	<tr><td colspan="2" bgcolor=""><font size=1 color="#c0c0c0">&nbsp;&nbsp;&nbsp;<?php echo $rowind['pro_brand']; ?></font></td></tr>
	<tr><td colspan="2" bgcolor=""><font size=2 color="#595959"> <?php echo $rowind['pro_name']; ?></font></td></tr>
	<tr><td colspan="2" bgcolor="">&nbsp;</td></tr>
	<tr><td colspan="2" bgcolor="">
	
	 
	
	<font size=2 color="#595959">
	
	<!-- add droup down  -->
	<?php
	$a=$rowind['pro_simelar'];
	
	
				 $sql1= "select * from producta where $a=pro_simelar"; 
				 
				 $resulti1=mysqli_query($conn,$sql1);
				 ?><div class="chan"><?php
				 echo "<select  onchange='packsize()' name='ind_packsize'>";?></div><?php
				 while($rowind1 = mysqli_fetch_assoc($resulti1))
				 {
					echo "<option value=".$rowind1['pro_id'].">". $rowind1['pro_contity']." ".$rowind1['pro_contype']." - Rs ".$rowind1['pro_sellprice']."</option>";
				 }
			    	echo "</select>";
				?>
	
	</font>
  
  
  
  </td></tr>
  
  
 <!-- #f2f2f2 bgcolor=""-->
  
  
  <tr><td colspan="2" bgcolor="#f2f2f2">
						<table><tr><td><font size=1 color="#808080">&nbsp;&nbsp;MRP: <strike>Rs.<?php echo $rowind['pro_sellprice']; ?></strike></font></td><td><h4><font size=3 color="#595959">&nbsp;&nbsp;Rs. <?php echo $rowind['pro_finelprice']; ?></font></h4></td></tr></table>
						</td></tr>
	<tr><td colspan="2" bgcolor="#f2f2f2"><font size=1 color="#808080 ">&nbsp;&nbsp;<i class="fa fa-truck"></i> Express deleviry by tommorrowind</font></td></tr>
	<tr><td bgcolor="#f2f2f2"><font size=2 color="#808080 ">&nbsp;Qty</font><input type="textbox" class="resizedTextbox" value="" ></td><td bgcolor="#f2f2f2"  align=center>
	<button type="button" class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-shopping-cart"></span>Add</button></td></tr>
	</table>
<div class="col-md-12">&nbsp;&nbsp;</div><div class="col-md-12">&nbsp;&nbsp;</div>
	<!-- product -->
</div>
<?php
}

?>
</body>
</html>
