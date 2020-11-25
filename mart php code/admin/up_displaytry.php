<html>
<body>

<?php
$conn = new mysqli("localhost","root","","patel_mart");
$upid=$_GET['up_id'];

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

				 $sql= "select * from sub_category where cat_id=$upid"; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='up_a_cata' id='' onchange='up_categorypro()'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['sub_id'].">". $row['sub_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				<p id="demo"></p>
				
</body>
</html>