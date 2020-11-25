<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple HTML/CSS Contact Form</title>
  
  
  
      <link rel="stylesheet" href="css/otpstyle.css">

  
</head>

<?php
session_start();
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 


if(isset($_POST['o_sub']))
	{
		$vo_otp=$_POST['o_otp'];
		$vo_pho=$_SESSION['pho'];
	echo $_SESSION['otp'].$vo_otp;
			if($_SESSION['otp']==$vo_otp)
			{
				$query="UPDATE login SET log_login	='0' WHERE log_phonenumber=$vo_pho";
				$resultd=mysqli_query($conn,$query);
				header("location: home.php");
				
			}
			else
			{
				echo"no";
			}
		
	//header("location: login.php");
	}
	
	
?>
<body>

  <div class="container">  
 
   <form  name="l_valid" id="contact"  method="post" action="" onsubmit="return validateFormlogin()">
    <h3>Enter otp</h3>
    
    <fieldset>
      <input placeholder="OTP" type="text" tabindex="1" required autofocus  name="o_otp" /><font color=red><p id="so_otp" ></p></font>
    </fieldset>
   
    
      <button name="o_sub" type="submit" id="contact-submit">Submit</button>
    </fieldset>
    <p class="copyright"><a href="" target="_blank" title="Colorlib">RESEND OTP</a></p>
  </form>
</div>
  
  


</body>

<script>
/*	function validateFormlogin() 
	{
		var xl_use = document.forms["l_valid"]["l_use"].value;
	}*/
	</script>
	

</html>
