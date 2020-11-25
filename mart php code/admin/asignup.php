<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Signup</title>
    
    
    
    
        <link rel="stylesheet" href="logincss/style.css">

    
    
    
    
  </head>

  
  
  	
  
  <body>

    
<form name="ad_valid" class="login-form" method="post" action="" onsubmit="return validateFormloginn()">
  <header>Signup</header>
  <label>Admin name <span>*</span></label>
  
  <input type="text" placeholder="" name="ad_pho"/><font color="red"><p id="sad_pho"></p></font>
  <label>Password <span>*</span></label>
      <input type="password" placeholder="" name="ad_pas"/><font color="red"><p id="sad_pas"></p></font>
	  
	  <table  cellpadding=10>
	  <tr>
	
	   <td><input type="checkbox" name="ad_ord" value="1"></td><td><font color="green">Order</font></td>
      <td><input type="checkbox" name="ad_pro" value="2"></td><td><font color="green">Product</font></td>
	  <td><input type="checkbox" name="ad_cus" value="3"></td><td><font color="blue">Customer</font></td>
	  <td><input type="checkbox" name="ad_adm" value="4"></td><td><font color="orange">Admin</font></td>
	  </tr>
	  </table>
	  

  

  <div class="help"></div>
<button type="submit" class="btn btn-success" name="ad_log">login</button>
 
  
</form>
    
     <script>
	function validateFormloginn() 
	{
		var xad_pho = document.forms["ad_valid"]["ad_pho"].value;
		var xad_pas = document.forms["ad_valid"]["ad_pas"].value;
		
		if (xad_pho == "")
			{
				
				document.getElementById("sad_pho").innerHTML = "enter user name";
				
				return false;
			}
			else
			{
				document.getElementById("sad_pas").innerHTML = "";
				
				
			}
		
		
	}
  </script>
    
	
<?php
 
 

 
 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

if(isset($_POST['ad_log']))
	{
		
		
		
		$vad_pho=$_POST['ad_pho'];
		$vad_pas=$_POST['ad_pas'];
		if(isset($_POST['ad_ord']))
		$vad_ord=1;
	else
		$vad_ord=0;
		
		if(isset($_POST['ad_pro']))
		$vad_pro=1;
	else
		$vad_pro=0;
	
	if(isset($_POST['ad_cus']))
		$vad_cus=1;
	else
		$vad_cus=0;
	
	if(isset($_POST['ad_adm']))
		$vad_adm=1;
	else
		$vad_adm=0;
		
	$query="SELECT * FROM ad_login WHERE ad_name='$vad_pho'";
			$resultt=mysqli_query($conn,$query);
			if(mysqli_num_rows($resultt)>0)
			{	
					?> <script>document.getElementById("sad_pho").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin name already exist";</script><?php
				
			}
			
			else
			{
			$sql="INSERT INTO ad_login (ad_name,ad_password,ad_order,ad_product,ad_customer,ad_admin)VALUES
			('$vad_pho','$vad_pas','$vad_ord','$vad_pro','$vad_cus','$vad_adm')";
			if ($conn->query($sql) === TRUE) 
			{
				?>  
			
			<script>document.getElementById("sad_pas").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signup sucess ";</script><?php
			
			
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			}
		
	
	}
	
$conn->close();
?>
  
  
	
	
    
  </body>
</html>
