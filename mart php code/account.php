<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Pure CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/accountstyle.css">

  
</head>


<?php

session_start();

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

		

	
			$sql = "UPDATE login SET 
			 log_username='$vl_use',log_email='$vl_ema',log_address='$vl_add',log_pincode='$vl_pin',log_state='$vl_sta',log_distric='$vl_dis',log_city='$vl_cit',log_area='$vl_are' WHERE log_phonenumber='$vl_pho'"; 

			 
			if ($conn->query($sql) === TRUE) 
			{
				  
			
			?><script>document.getElementById("sl_are").innerHTML = "login sucess ";</script><?php
			
			
			} 
			else 
			{
				echo"false";
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
	
	
		
	
		
	
	}
	
if(isset($_SESSION['aa']))

{
		$ffno=$_SESSION['aa'];
	$query="SELECT * FROM login WHERE log_phonenumber='$ffno'";
			$result=mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
}
else
{
	header("location: login.php");
}





	
	$conn->close();
		
?>

<body>

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="active"> Sign In </h2></a>
    <a href="signup.php"><h2 class="inactive underlineHover">Sign Up </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./popup/user.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form name="l_valid" class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateFormlogin()">
	
	  <input type="text" name="l_use" value="<?php echo $row['log_username']?>"/><p id="sl_use" ></p></font>
	  <input type="text" name="l_pho1" value="<?php echo $row['log_phonenumber']?>" disabled />
	  <input type="hidden" name="l_pho" value="<?php echo $row['log_phonenumber']?>" />
	  <input type="text" name="l_ema" value="<?php echo $row['log_email']?>"/><p id="sl_ema"></p></font>
	  <input type="text" name="l_add" value="<?php echo $row['log_address']?>"/><p id="sl_add"></p></font>
	  <input type="text" name="l_pin" value="<?php echo $row['log_pincode']?>"/><p id="sl_pin"></p></font>
	  <input type="text" name="l_sta" value="<?php echo $row['log_state']?>"/><p id="sl_sta"></p></font>
	  <input type="text" name="l_dis" value="<?php echo $row['log_distric']?>"/><p id="sl_dis"></p></font>
	  <input type="text" name="l_cit" value="<?php echo $row['log_city']?>"/><p id="sl_cit"></p></font>
	  <input type="text" name="l_are" value="<?php echo $row['log_area']?>"/><br><p id="sl_are"></p>
	
	
	
	
     <!-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">-->
    <input type="submit" name="l_sub" class="fadeIn fourth" value="Upadte">
	  
	  
	  
	  
	  
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="logout.php">logout</a>
    </div>

  </div>
</div>
  
  
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
		
		/*var xl_pas = document.forms["l_valid"]["l_pas"].value;
		var xl_con = document.forms["l_valid"]["l_con"].value;*/
		
  
		 
      
		
		if (xl_use == "")
			{
				alert('phone is 123')
		
		
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
	
		
		
	
			

			
		
	}
	
	
	

	
	
	


	</script>
  

</body>



</html>
