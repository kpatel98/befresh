<html>
<body>




<?php

$conn = new mysqli("localhost","root","","patel_mart");
	

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
	
$query="SELECT * FROM producta";
			$result=mysqli_query($conn,$query);
			//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<table>
<tr>

<td style="border: 1px solid black"><font color=red>ID</font></td>
<td style="border: 1px solid black"><font color=red>BRAND</font></td>
<td style="border: 1px solid black"><font color=red>NAME</font></td>
<td style="border: 1px solid black"><font color=red>IMAGE</font></td>
<td style="border: 1px solid black"><font color=red>Delete</font></td>	


</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>


<tr >

<td style="border: 1px solid black"><?php echo $row["pro_id"];?></td>
<td style="border: 1px solid black"><?php echo $row['pro_brand'];?></td>
<td style="border: 1px solid black"><?php echo $row['pro_name']; ?></td>
<td style="border: 1px solid black"><img height=50 width=50 src="<?php echo $row['pro_img']; ?>" /></td>	

</tr>

	<?php
}
    ?>
	</table>
</body>
</html>