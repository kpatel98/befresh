
<?php
//include("db.php");
/*if(!isset($_SESSION['admin_login']))
  header("location: adminlogin.php");*/


 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body>

<?php
if(isset($_POST['add_brand']))
	{
		$vb_bra=$_POST['brand'];
		$querya="SELECT * FROM pro_brand WHERE bra_name='$vb_bra'";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO pro_brand (bra_name)VALUES('$vb_bra')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>document.getElementById("sb_bra").innerHTML = "insert ";</script><?php
			}
				}
	}

	
	if(isset($_POST['add_contity']))
	{
		$vb_con=$_POST['contity_type'];
		$querya="SELECT * FROM pro_contity WHERE con_name='$vb_con'";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO pro_contity (con_name)VALUES('$vb_con')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>document.getElementById("sb_con").innerHTML = "insert ";</script><?php
			}
				}
				
	}
	
	
	if(isset($_POST['add_return']))
	{
		$vb_ret=$_POST['return_time'];
		$querya="SELECT * FROM pro_ret WHERE ret_name='$vb_ret'";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO pro_ret (ret_name)VALUES('$vb_ret')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>document.getElementById("sb_ret").innerHTML = "insert ";</script><?php
			}
				}
				
	}
	
	
	
	
	if(isset($_POST['add_packing']))
	{
		$vb_pac=$_POST['packing'];
		$querya="SELECT * FROM pro_packing WHERE pac_name='$vb_pac'";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO pro_packing (pac_name)VALUES('$vb_pac')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>document.getElementById("sb_pac").innerHTML = "insert ";</script><?php
			}
				}
				
	}
	
	
?>



<br>
<table  align=left border=1><tr><td>

<table align=center border=0>
<caption align=center><font size=5><u><b>Add new</b></u></font></caption>
<tr><td>
<form name="bra_valid" method="post" action="" onsubmit="return valid_brand()">
<input type="text" name="brand"><input type="submit" value="Add brand" name="add_brand"><font color=red><p id="sb_bra"></p></font>
</form>
</td></tr>

<tr><td>
<form name="con_valid" method="post" action="" onsubmit="return valid_contity()">
<input type="text" name="contity_type"><input type="submit" value="Add contity type" name="add_contity"><font color=red><p id="sb_con"></p></font>
</form>
</td></tr>

<tr><td>
<form name="ret_valid" method="post" action="" onsubmit="return valid_return()">
<input type="text" name="return_time"><input type="submit" value="Add return time" name="add_return"><font color=red><p id="sb_ret"></p></font>
</form>
</td></tr>



<tr><td>
<form name="pac_valid" method="post" action="" onsubmit="return valid_packing()">
<input type="text" name="packing"><input type="submit" value="Add packing" name="add_packing"><font color=red><p id="sb_pac"></p></font>
</form>
</td></tr>

<tr><td colspan=2 align=center><input type="button" value="Reload Page" onClick="reload"></tr></td>
</table>
</td></tr></table>



<script>
	function valid_brand()
	{
		var xd_bra = document.forms["bra_valid"]["brand"].value;
		if (xd_bra == "")
			{
				
				document.getElementById("sb_bra").innerHTML = "Enter brand name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_bra").innerHTML = "";
				
				
			}	
	}
	
	function valid_contity()
	{
	var xd_con = document.forms["con_valid"]["contity_type"].value;
		if (xd_con == "")
			{
				
				document.getElementById("sb_con").innerHTML = "Enter contitytype name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_con").innerHTML = "";
				
				
			}
	}
	
	function valid_return()
	{
	var xd_ret = document.forms["ret_valid"]["return_time"].value;
		if (xd_ret == "")
			{
				
				document.getElementById("sb_ret").innerHTML = "Enter return time name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_ret").innerHTML = "";
				
				
			}
	}

	
			function valid_packing()
	{	
	var xd_pac = document.forms["pac_valid"]["packing"].value;
		if (xd_pac == "")
			{
				
				document.getElementById("sb_pac").innerHTML = "Enter packing type";
				
				return false;
			}
			else
			{
				document.getElementById("sb_pac").innerHTML = "";
				
				
			}
	}
	
</script>



<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->
<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->
<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->
<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->
<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->
<!--  ----------------------------- --><!--  ----------------------------- --><!--  ----------------------------- -->



<?php



if(isset($_POST['add_category']))
	{
		$vb_cat=$_POST['category'];
		$querya="SELECT * FROM pro_category WHERE cat_name='$vb_cat'";
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO pro_category (cat_name)VALUES('$vb_cat')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>//document.getElementById("sb_cat").innerHTML = "insert ";</script><?php
			}
				}
				
	}
?>

<table border=1>
<tr><td><p id="sa_cat">Category</p>	 

<form name="cat_valid" method="post" action="" onsubmit="return valid_category()">
<input type="text" name="category">
<input type="submit" value="Add new category" name="add_category"><font color=red><p id="sb_cat"></p></font>
</form>



<script>
function valid_category()
	{	
	var xd_cat = document.forms["cat_valid"]["category"].value;
		if (xd_cat == "")
			{
				
				document.getElementById("sb_cat").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_cat").innerHTML = "";
				
				
			}
			
	}		
</script>
</td></tr>



<!-- ------------- --><!-- ------------- --><!-- ------------- --><!-- ------------- -->


<form name="subcat_valid" method="post" action="" onsubmit="return valid_subcategory()">
<tr><td><p id="sa_cat">Subcategory</p>	 
				<?php
				 $sql= "select * from pro_category order by cat_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_cat'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['cat_id'].">". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				
				<font color=red><p id="sb_dcat"></p></font>
				<input type="text" name="subcategory"><font color=red><p id="sb_dsubcat"></p></font>
<input type="submit" value="Add new subcategory" name="add_subcategory">
				
				</td></tr>


</form>

<?php



if(isset($_POST['add_subcategory']))
	{
		$vb_cat=$_POST['a_cat'];
		$vb_sub=$_POST['subcategory'];
		$querya="SELECT * FROM sub_category WHERE sub_name='$vb_sub'";
		
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO sub_category (cat_id,sub_name)VALUES('$vb_cat','$vb_sub')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>//document.getElementById("sb_cat").innerHTML = "insert ";</script><?php
			}
				}
				
	}
?>

<script>
function valid_subcategory()
	{	
	var xd_acat = document.forms["subcat_valid"]["a_cat"].value;
		if (xd_acat == "")
			{
				
				document.getElementById("sb_dcat").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_dcat").innerHTML = "";
				
				
			}
			
	var xd_subcat = document.forms["subcat_valid"]["subcategory"].value;
		if (xd_subcat == "")
			{
				
				document.getElementById("sb_dsubcat").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_dsubcat").innerHTML = "";
				
				
			}

			
			
	}		
</script>

<!-- -------------   --><!-- -------------   --><!-- -------------   --><!-- -------------   -->

<!-- -------------   -->

<script>
function categorya() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demonew").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "categorypronewins.php", true);
    xhttp.send(); 
  
  
}
</script>




<form name="subproduct_valid" method="post" action="" onsubmit="return valid_subproduct)">
<tr><td><p id="sa_cat">Sub product</p>	
				<?php
				 $sql= "select * from pro_category order by cat_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_cat' onchange='categorya()'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				
				<p id="demonew"></p>
				
				<font color=red><p id="sb_dprosubcat"></p></font>
				
				<input type="text" name="subproduct"><font color=red><p id="sb_dprosubproduct"></p></font>
<input type="submit" value="Add new subproduct" name="add_subproduct">
				
				</td></tr>

</table>
</form>

<?php



if(isset($_POST['add_subproduct']))
	{
		//$vb_cat=$_POST['a_cat'];
		$vb_sub=$_POST['a_catabc'];
		$vb_subpro=$_POST['subproduct'];
		$querya="SELECT * FROM cat_products WHERE cat_name='$vb_subpro'";
		
				$resulta=mysqli_query($conn,$querya);
				
				if(mysqli_num_rows($resulta)>0)
				{
		
				}
				else
				{
		$sql = "INSERT INTO cat_products (sub_id,cat_name)VALUES('$vb_sub','$vb_subpro')";
			if ($conn->query($sql) === TRUE) 
			{
			?><script>//document.getElementById("sb_cat").innerHTML = "insert ";</script><?php
			}
				}
				
	}
?>

<script>
function valid_subproduct()
	{	
	var xd_acat = document.forms["subproduct_valid"]["a_cat"].value;
		if (xd_acat == "")
			{
				
				document.getElementById("sb_dprocat").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_dprocat").innerHTML = "";
				
				
			}
			
	var xd_subcat = document.forms["subproduct_valid"]["subcategory"].value;
		if (xd_subcat == "")
			{
				
				document.getElementById("sb_dprosubcat").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_dprosubcat").innerHTML = "";
				
				
			}
			
			
	var xd_subpro = document.forms["subproduct_valid"]["subproduct"].value;
		if (xd_subpro == "")
			{
				
				document.getElementById("sb_dprosubproduct").innerHTML = "Enter category name";
				
				return false;
			}
			else
			{
				document.getElementById("sb_dprosubproduct").innerHTML = "";
				
				
			}

			
			
	}		
</script>
</body>
</html>

















