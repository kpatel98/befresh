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

if ($db->connect_error) 
	{
    die("Connection failed: " . $db->connect_error);
	} 
	
 $id= $_GET['id'];
 
 echo $sql="select * from addcart where car_cust_id=$uid and car_pro_id=$id";
 $result=mysqli_query($db,$sql);
 $row = mysqli_fetch_assoc($result);
 if($row['car_contity']>0)
   $sql="update  addcart set car_contity=car_contity+1  where car_cust_id=$uid and car_pro_id=$id";
else
   $sql="insert into addcart(car_cust_id,car_pro_id,car_contity) values($uid,$id,1)";
 if(mysqli_query($db,$sql))
  echo "Record Added";
 else
  echo "Somthing Wrong";
}
?>
				
