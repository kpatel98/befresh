<?php
session_start();

	


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

<body>

  <div class="login-page">
  <div class="form">
    
	
	
	
	
	
    
	<form name="l_valid" class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p><font color=red><b>YOU LOGOUT YOUR ACCOUNT</b></font></p><br><br>
	  <button type="submit"  class="btn btn-success" name="l_sub">LOGOUT</button></a><br><br>
	  
	  <a href="home.php"><button type="button" class="btn btn-success">BACK</button></a>
      
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/loginindex.js"></script>

<?php
if(isset($_POST['l_sub']))
	{
		
		session_destroy();
		header("location: login.php");
		
	}
?>


</body>

</html>
