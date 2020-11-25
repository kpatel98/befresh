<html>
<body>

<?php
$conn = new mysqli("localhost","root","","patel_mart");
$iddd=$_GET['idd'];

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

				 $sql= "select * from cat_products where sub_id=$iddd"; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_catab'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['cat_id'].">". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				<p id="demob"></p>
</body>
</html>