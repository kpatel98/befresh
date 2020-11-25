<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    
    
    
    
        <link rel="stylesheet" href="logincss/style.css">

    
    
    
    
  </head>

	
  <body>

    
<form name="lo_valid" class="login-form" method="post" action="" onsubmit="return validateFormloginn()">
  <header>Login</header>
  <label>Admin name <span>*</span></label>
  
  <input type="text" placeholder="" name="lo_pho"/><font color=red><p id="slo_pho"></p></font>
  <label>Password <span>*</span></label>
      <input type="password" placeholder="" name="lo_pas"/><font color=red><p id="slo_pas"></p></font>
  <div class="help"></div>
  

  <div class="help"></div>
<button type="submit" class="btn btn-success" name="lo_log">login</button>
 
  
</form>
    
     <script>
	function validateFormloginn() 
	{
		var xlo_pho = document.forms["lo_valid"]["lo_pho"].value;
		var xlo_pas = document.forms["lo_valid"]["lo_pas"].value;
		
		if (xlo_pho == "")
			{
				
				document.getElementById("slo_pho").innerHTML = "enter user name";
				
				return false;
			}
			else
			{
				document.getElementById("slo_pas").innerHTML = "";
				
				
			}
		
		
	}
  </script>
    
	<?php
 
 

 
 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

if(isset($_POST['lo_log']))
	{
		
		
		
		$vlo_pho=$_POST['lo_pho'];
		$vlo_pas=$_POST['lo_pas'];
		
	
	$queryb="SELECT * FROM ad_login WHERE ad_name='$vlo_pho'";
			$result=mysqli_query($conn,$queryb);
			if(mysqli_num_rows($result)>0)
			{
	
	
			$query="SELECT * FROM ad_login WHERE ad_name='$vlo_pho' and ad_password='$vlo_pas'";
			$resultt=mysqli_query($conn,$query);
			if(mysqli_num_rows($resultt)>0)
			{
				//$_SESSION['bb']=$vlo_pho;
				
				$_SESSION['bb']=$vlo_pho;
			header("location: home.php");
			}
			elseif($vlo_pas=="")
			{	
				?>  <script>document.getElementById("slo_pas").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enter password";</script><?php
			}
			
			else
			{
				?>  <script>document.getElementById("slo_pas").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;password not match";</script><?php
			}
			}
			else
			{
				?> <script>document.getElementById("slo_pho").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin name already not exist";</script><?php
			}
		
	
	}
	
$conn->close();
?>
	
	
    
  </body>
</html>
