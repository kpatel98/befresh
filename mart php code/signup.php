<?php
session_start();
if(isset($_SESSION['aa']))
	header("location: logout.php");
else
{
	


?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>login</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
      <link rel="stylesheet" href="css/loginstyle.css">

  
</head>


<?php
 
 
 

 

 
 

 
 

 

 
 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 


if(isset($_POST['l_sub']))
	{
		
		$vl_use=$_POST['l_use'];
		$vl_pho=$_POST['l_pho'];
		$vl_ema=$_POST['l_ema'];
		$vl_add=$_POST['l_add'];
		$vl_pin=$_POST['l_pin'];
		$vl_sta=$_POST['l_sta'];
		$vl_dis=$_POST['l_dis'];
		$vl_cit=$_POST['l_cit'];
		$vl_are=$_POST['l_are'];
		$vl_pas=$_POST['l_pas'];
			
	$query="SELECT * FROM login WHERE log_phonenumber='$vl_pho'";
	
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0)
		{
				$querya="SELECT * FROM login WHERE log_phonenumber='$vl_pho' and log_login>0";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
					
				$queryd="DELETE FROM login WHERE log_phonenumber='$vl_pho'";
					$resultd=mysqli_query($conn,$queryd);
				$sql = "INSERT INTO login (log_username,log_phonenumber,log_email,log_address,log_pincode,log_state,log_distric,log_city,log_area,log_password,log_login)VALUES 
			('$vl_use','$vl_pho','$vl_ema','$vl_add','$vl_pin','$vl_sta','$vl_dis','$vl_cit','$vl_are','$vl_pas',0)";
				if ($conn->query($sql) === TRUE) 
			{
				?>  
			
			<script>document.getElementById("slo_pas").innerHTML = "login sucess ";</script>";<?php
			
			
			}
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
				
				
				}
				else
				{
					?><script> alert('phone is registered')</script><?php
					
				}
			
		}
		else
		{

	
			$sql = "INSERT INTO login (log_username,log_phonenumber,log_email,log_address,log_pincode,log_state,log_distric,log_city,log_area,log_password,log_login)VALUES 
			('$vl_use','$vl_pho','$vl_ema','$vl_add','$vl_pin','$vl_sta','$vl_dis','$vl_cit','$vl_are','$vl_pas',5)";


			if ($conn->query($sql) === TRUE) 
			{
				?>  
			
			<script>document.getElementById("slo_pas").innerHTML = "Signup sucess ";</script>";<?php
			
			header("location: otp.php");
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
	
	
		}
	
		
	
	}
	
			
		
	
$conn->close();

?>
	
	


<body>

  <div class="login-page">
  <div class="form">
    
	
	
	
	
	
    <form name="l_valid" class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateFormlogin()">
	<h3>Enter your detail</h3><br>
      <input type="text" placeholder="name"name="l_use" /><font color=red><p id="sl_use" ></p></font>
	  <input type="text" placeholder="phonenumber" name="l_pho"/><font color=red><p id="sl_pho"></p></font>
	  <input type="text" placeholder="email address" name="l_ema"/><font color=red><p id="sl_ema"></p></font>
	  <input type="text" placeholder="address" name="l_add"/><font color=red><p id="sl_add"></p></font>
	  <input type="text" placeholder="pincode" name="l_pin"/><font color=red><p id="sl_pin"></p></font>
	  <input type="text" placeholder="state" name="l_sta"/><font color=red><p id="sl_sta"></p></font>
	  <input type="text" placeholder="district" name="l_dis"/><font color=red><p id="sl_dis"></p></font>
	  <input type="text" placeholder="city" name="l_cit"/><font color=red><p id="sl_cit"></p></font>
	  <input type="text" placeholder="area" name="l_are" /><font color=red><p id="sl_are"></p></font>
	  
	 
	  
	  <input type="password" id=ql_pas placeholder="password" name="l_pas" /><font color=red><p id="sl_pas"></p></font>
	  <input type="password" id=ql_con placeholder="confirm password" name="l_con" /><font color=red><p id="sl_con"></p></font>
	  <button type="submit"  class="btn btn-success" name="l_sub">Send otp</button><br><br>
	  
	  
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 
    <script  src="js/loginindex.js"></script>

<script>
	function validateFormlogin() 
	{
		var xl_use = document.forms["l_valid"]["l_use"].value;
		var xl_pho = document.forms["l_valid"]["l_pho"].value;
		var xl_ema = document.forms["l_valid"]["l_ema"].value;
		var xl_add = document.forms["l_valid"]["l_add"].value;
		var xl_pin = document.forms["l_valid"]["l_pin"].value;
		var xl_sta = document.forms["l_valid"]["l_sta"].value;
		var xl_dis = document.forms["l_valid"]["l_dis"].value;
		var xl_cit = document.forms["l_valid"]["l_cit"].value;
		var xl_are = document.forms["l_valid"]["l_are"].value;
		var xl_pas = document.forms["l_valid"]["l_pas"].value;
		var xl_con = document.forms["l_valid"]["l_con"].value;
		
		
		
  
		 
      
		
		if (xl_use == "")
			{
				
				document.getElementById("sl_use").innerHTML = "enter user name not include special chacture";
				
				return false;
			}
			else
			{
				document.getElementById("sl_use").innerHTML = "";
				
				
			}
			
		if (xl_pho == "")
			{
				
				document.getElementById("sl_pho").innerHTML = "enter valid phone number";
				
				return false;
			}
			else
			{	
					
		
		
		
		
				document.getElementById("sl_pho").innerHTML = "";
				
				
			}
			
			
			
			
		if (xl_ema == "")
			{
				
				document.getElementById("sl_ema").innerHTML = "email address is incorrect";
				
				return false;
			}
			else
			{
				document.getElementById("sl_ema").innerHTML = "";
				
				
			}
			
			
			
		if (xl_add == "")
			{
				
				document.getElementById("sl_add").innerHTML = "enter address not include special chacture";
				
				return false;
			}
			else
			{
				document.getElementById("sl_add").innerHTML = "";
				
				
			}
			
		if (xl_pin == "")
			{
				
				document.getElementById("sl_pin").innerHTML = "pincode is incorrect";
				
				return false;
			}
			else
			{
				document.getElementById("sl_pin").innerHTML = "";
				
				
			}

			
		if (xl_sta == "")
			{
				
				document.getElementById("sl_sta").innerHTML = "enter state name";
			
				return false;
			}
			else
			{
				document.getElementById("sl_sta").innerHTML = "";
				
				
			}

			
		if (xl_dis == "")
			{
				
				document.getElementById("sl_dis").innerHTML = "enter district name";
				
				return false;
			}
			else
			{
				document.getElementById("sl_dis").innerHTML = "";
				
				
			}

			
		if (xl_cit == "")
			{
				
				document.getElementById("sl_cit").innerHTML = "enter city name";
				
				return false;
			}
			else
			{
				document.getElementById("sl_cit").innerHTML = "";
				
			}

			
		if (xl_are == "")
			{
				
				document.getElementById("sl_are").innerHTML = "enter area name not include special chacture";
				
				return false;
			}
			else
			{
				document.getElementById("sl_are").innerHTML = "";
				
				
			}
	
		
		
		if (xl_pas=="")
			{
				document.getElementById("sl_pas").innerHTML = "enter password";
				return false;
				
			}
			else
			{
				document.getElementById("sl_pas").innerHTML = "";
		if (xl_pas == xl_con)
			{
				document.getElementById("sl_con").innerHTML = "";
				
				
			}
			else
			{
				document.getElementById("sl_con").innerHTML = "password not match";
				
				return false;
			}
			}
			

			
		
	}
	
	
	

	
	
	


	</script>
	



</body>

</html>
<?php
}
?>