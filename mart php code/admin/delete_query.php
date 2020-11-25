
<?php

$db = new mysqli("localhost","root","","patel_mart");

if ($db->connect_error) 
	{
    die("Connection failed: " . $db->connect_error);
	} 
	
 $id= $_GET['id'];
 
    $sql= "delete from producta where pro_id=$id"; 
    
    $result=mysqli_query($db,$sql);

 

?>
				
