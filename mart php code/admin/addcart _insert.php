<html>
<body>

<?php
 session_start();
 if(!isset($_SESSION['u_id']))
 {
   echo 0;
 }
 else
 {
  $uid=$_SESSION['u_id'];

$db = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	
 $id= $_GET['id'];
 
 $sql="select * from addcart where log_userid=$uid and pro_id=$id";
 $result=mysqli_query($db,$sql);
 $row = mysqli_fetch_assoc($result);
 if($row['car_contity']>0)
   $sql="update  addcart set car_contity=car_contity+1  where u_id=$uid and pro_id=$id";
else
   $sql="insert into cart(car_cust_id,ccar_pro_id,car_contity) values($uid,$id,1)";
 if(mysqli_query($db,$sql))
  echo "Record Added";
 else
  echo "Somthing Wrong";
}
?>
				
</body>
</html>