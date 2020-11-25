<html>
<body>

<?php
$conn = new mysqli("localhost","root","","patel_mart");
$id=$_GET['id'];

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

				 $sql= "select * from sub_category where cat_id=$id"; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_cata' id='' onchange='categorypro()'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['sub_id'].">". $row['sub_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				<p id="demo"></p>
				
</body>
</html>