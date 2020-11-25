
<?php
//include("db.php");
/*if(!isset($_SESSION['admin_login']))
  header("location: adminlogin.php");*/


 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 


if(isset($_POST["insertupdate"])) 
{
	$upd_vp_id=$_POST['upd_a_id'];
	$upd_vp_nam=$_POST['upd_a_nam'];
	$upd_vp_sim=$_POST['upd_a_sim'];
	$upd_vp_bra=$_POST['upd_a_bra'];$upd_vp_brad=$_POST['upd_d_a_bra'];
	$upd_vp_con=$_POST['upd_a_con'];
	$upd_vp_typ=$_POST['upd_a_typ'];
	$upd_vp_pac=$_POST['upd_a_pac'];
	$upd_vp_pri=$_POST['upd_a_pri'];
	$upd_vp_dis=$_POST['upd_a_dis'];
	$upd_vp_sav=$_POST['upd_a_sav'];
	$upd_vp_sel=$_POST['upd_a_sel'];
	$upd_vp_det=$_POST['upd_a_det'];
	$upd_vp_ret=$_POST['upd_a_ret'];$upd_vp_retd=$_POST['upd_d_a_ret'];
	$upd_vp_sto=$_POST['upd_a_sto'];
	$upd_vp_cat=$_POST['a_catab'];$upd_vp_catd=$_POST['upd_d_a_cat'];
	echo $upd_vp_catd;
	echo $upd_vp_cat;
	if($upd_vp_cat !="")
	{
		$upd_vp_cat_fin=$upd_vp_cat;
	
	}
	else
	{
		
		$upd_vp_cat_fin=$upd_vp_catd;
	}
	
	if($upd_vp_bra !="")
	{
		$upd_vp_bra_fin=$upd_vp_bra;
	
	}
	else
	{
		$upd_vp_bra_fin=$upd_vp_brad;
	}
	
	
	
	
	if($upd_vp_ret !="")
	{
		$upd_vp_ret_fin=$upd_vp_ret;
	
	}
	else
	{
		$upd_vp_ret_fin=$upd_vp_retd;
	}
	
	
	
	
	if($upd_vp_dis !="" || $upd_vp_dis !=0)
	{
		
	$upd_vp_fin=$upd_vp_sel-(($upd_vp_sel/100)*$upd_vp_dis);
	
	}
	else
	{
		$upd_vp_fin=$upd_vp_sel-$upd_vp_sav;
		
	}
	
	
    $target_file = "productimg/" . basename($_FILES["fileToUpload"]["name"]);
     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
   $upd_vp_img=$_POST['upd_d_a_img'];
   
   if($target_file =="productimg/")
	{
		
	$target_file_fin=$upd_vp_img;
	
	}
	else
	{
		$target_file_fin=$target_file;
		
	}
	
   
    $sqlup="UPDATE producta SET 
								pro_simelar='$upd_vp_sim',
								pro_name='$upd_vp_nam',
								pro_brand='$upd_vp_bra_fin',
								pro_contity='$upd_vp_con',
								pro_contype='$upd_vp_typ',
								pro_pack='$upd_vp_pac',
								pro_price='$upd_vp_pri',
								pro_sellprice='$upd_vp_sel',
								pro_dis='$upd_vp_dis',
								pro_save='$upd_vp_sav',
								pro_finelprice='$upd_vp_fin',
								pro_detail='$upd_vp_det',
								pro_returntime='$upd_vp_ret_fin',
								sub_id='$upd_vp_cat_fin',
								pro_stock='$upd_vp_sto',
								pro_img='$target_file_fin'
							where pro_id='$upd_vp_id'";
 
 
  if(mysqli_query($conn,$sqlup))
  {
        echo "record update";
  }
  /*$sqlu = "UPDATE producta SET pro_simelar=36 WHERE pro_simelar=0"; 

	if(mysqli_query($conn,$sqlu))
	{
		
	}		*/
    	
		
}
?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body>


<script>
/*$(document).ready(function(){
  $(".chan").change(function(){
    
		
  });
});*/


</script>
<script>
function categorya() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "upd_displaytry.php?id="+document.forms["upd_add_valid"]["a_cat"].value, true);
    xhttp.send(); 
  
  
}
</script>
<script>
function categorypro() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demob").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "catproduct.php?idd="+document.forms["upd_add_valid"]["a_cata"].value, true);
    xhttp.send(); 
  
  
}
</script>




<script>
function upd_branddrop() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("upd_bgroup").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "upd_brandgroup.php", true);
    xhttp.send(); 
  
  
}
</script>
<?Php
 $idfor= $_GET['id'];
$query="SELECT * FROM producta where pro_id=$idfor";
			$resultu=mysqli_query($conn,$query);
			$rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC);
			
?>
<table  align=left border=1><tr><td>
<form  name="upd_add_valid" method="post" enctype="multipart/form-data" onsubmit="return upd_valid_add()">
   
				<table border=0 align=center>
				<tr><td>ID</td><td><input type="text" name="upd_a_id" value="<?php echo $rowu['pro_id']?>" readonly></td></tr>
				<tr><td>		 <p id="supd_a_nam">Name</p></td><td><input type="text" value="<?php echo $rowu['pro_name']?>" name="upd_a_nam">Simelar<input type="text" value="<?php echo $rowu['pro_simelar']?>" name="upd_a_sim"></td></tr>
				<tr><td><p id="supd_a_bra">Brand</p>		 </td><td>
				<?php
				 $sql= "select * from pro_brand order by bra_name "; 
				 $result=mysqli_query($conn,$sql);
				 ?><div class="chan"><?php
				 echo "<select onchange='upd_branddrop()' name='upd_a_bra'>";?></div><?php
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['bra_name'] ."</option>";
				 }
			    	echo "</select>";
				?><input type="text" name='upd_d_a_bra'value="<?php echo $rowu['pro_brand']?>" readonly></td></tr>
				<tr><td><p id="supd_a_con">Packing size</p>   	 </td><td><input type="text" value="<?php echo $rowu['pro_contity']?>"name="upd_a_con"></td></tr>
				<tr><td><p id="supd_a_typ">Contity type</p> </td><td>
				<?php
				 $sql= "select * from pro_contity order by con_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='upd_a_typ'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['con_name'] ."</option>";
				 }
			    	echo "</select>";
				?><input type="text" value="<?php echo $rowu['pro_contype']?>" readonly>
				</td></tr>
				<tr><td><p id="supd_a_pac">Packing</p>	 </td><td>
				<?php
				 $sql= "select * from pro_packing order by pac_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='upd_a_pac'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['pac_name'] ."</option>";
				 }
			    	echo "</select>";
				?><input type="text" value="<?php echo $rowu['pro_pack']?>" readonly>
				</td></tr>
				<tr><td><p id="supd_a_pri">Price</p>      	 </td><td><input type="text" value="<?php echo $rowu['pro_price']?>"name="upd_a_pri"></td></tr>
				<tr><td><p id="supd_a_dis">Discount</p>	 </td><td><input type="text" value="<?php echo $rowu['pro_dis']?>"name="upd_a_dis">Save<input type="text" value="<?php echo $rowu['pro_save']?>"name="upd_a_sav"></td></tr>
				<tr><td><p id="supd_a_sel">MRP</p></td><td><input type="text" value="<?php echo $rowu['pro_sellprice']?>"name="upd_a_sel"></td></tr>
				<tr><td><p id="">Selling price</p></td><td><input type="text" value="<?php echo $rowu['pro_finelprice']?>" readonly></td></tr>
				<tr><td><p id="supd_a_det">Detail</p>		 </td><td><textarea rows="6" cols="40"  name="upd_a_det"><?php echo $rowu['pro_detail']?></textarea></td></tr>
				<tr><td><p id="supd_a_ret">Return time</p>  </td><td>
				<?php
				 $sql= "select * from pro_ret order by ret_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='upd_a_ret'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['ret_name'] ."</option>";
				 }
			    	echo "</select>";
				?><input type="text" name="upd_d_a_ret"value="<?php echo $rowu['pro_returntime']?>" readonly>
				
				<!------------------------------->
				</td></tr>
				<tr><td><p id="upd_sa_cat">Category</p>	 </td><td>
				<?php
				 $sql= "select * from pro_category group by cat_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_cat'  onchange='categorya()'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['cat_id'].">". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
					
				?><?php
				
				$cc=$rowu['sub_id'];
				$catpro="select * from cat_products where cat_id=$cc";
			$resultupro=mysqli_query($conn,$catpro);
			$rowupro=mysqli_fetch_array($resultupro,MYSQLI_ASSOC);
				
				$vv=$rowupro['sub_id'];
				$catprosub="select * from sub_category where sub_id=$vv";
			$resultuprosub=mysqli_query($conn,$catprosub);
			$rowuprosub=mysqli_fetch_array($resultuprosub,MYSQLI_ASSOC);
			
			$bb=$rowuprosub['cat_id'];
				$catprosubcat="select * from pro_category where cat_id=$bb";
			$resultuprosubcat=mysqli_query($conn,$catprosubcat);
			$rowuprosubcat=mysqli_fetch_array($resultuprosubcat,MYSQLI_ASSOC);
				?>
				<input type="text" value="<?php echo $rowupro['cat_name']?>" readonly><br>
				<input type="text" value="<?php echo $rowuprosub['sub_name']?>" readonly><br>
				<input type="text" name="upd_d_a_cat" value="<?php echo $rowuprosubcat['cat_name']?>" readonly>
				
				<p id="demo"></p>
				<p id="demob"></p>
				
				
				
				
				
				</td></tr>
				<tr><td><p id="supd_a_sto">Stock</p></td><td><input type="text" value="<?php echo $rowu['pro_stock']?>"name="upd_a_sto"></td></tr>
				<!---------------------->
                <tr><td><p id="upd_sa_ima">Image</p>        </td><td><img height=100 width=100 src="<?php echo $rowu['pro_img']; ?>" />
				<input type="text" name="upd_d_a_img"value="<?php echo $rowu['pro_img']?>" readonly>
				<input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
				<tr><td colspan=2 align=center><br><hr><input type="submit" value="update Product" name="insertupdate"><p id="upd_sa_ins"></p></td></tr>
				
				<tr><td>
						
				
				
<p id="mor"></p>
</td></tr>
				</table>
         
</form>

</td></tr></table>

<script>



function upd_valid_add()
	{
		var xupd_a_bra = document.forms["upd_add_valid"]["upd_a_nam"].value;
		if (xupd_a_bra == "")
			{
				
				document.getElementById("supd_a_nam").innerHTML = "<font color=red>Enter name</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_nam").innerHTML = "Name";
				
				
			}
				
		/*var xupd_a_bra = document.forms["upd_add_valid"]["upd_a_bra"].value;
		if (xupd_a_bra == "")
			{
				
				document.getElementById("supd_a_bra").innerHTML = "<font color=red>Select brand</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_bra").innerHTML = "Brand";
				
				
			}*/
			
			var xupd_a_con = document.forms["upd_add_valid"]["upd_a_con"].value;
		if (xupd_a_con == "")
			{
				
				document.getElementById("supd_a_con").innerHTML = "<font color=red>Enter stock</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_con").innerHTML = "Stock";
				
				
			}
			
			
			
			/*var xupd_a_typ = document.forms["upd_add_valid"]["upd_a_typ"].value;
		if (xupd_a_typ == "")
			{
				
				document.getElementById("supd_a_typ").innerHTML = "<font color=red>select contity type</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_typ").innerHTML = "Contity type";
				
				
			}*/
			
			
			var xupd_a_pri = document.forms["upd_add_valid"]["upd_a_pri"].value;
		if (xupd_a_pri == "")
			{
				
				document.getElementById("supd_a_pri").innerHTML = "<font color=red>Enter price</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_pri").innerHTML = "Price";
				
				
			}
			
			var xupd_a_dis = document.forms["upd_add_valid"]["upd_a_dis"].value;
			var xupd_a_sav = document.forms["upd_add_valid"]["upd_a_sav"].value;
		if (xupd_a_dis == "" && xupd_a_sav == "")
			{
				
				document.getElementById("supd_a_dis").innerHTML = "<font color=red>Enter discount or Save</font>";
				
				return false;
			}
			else if (xupd_a_dis != "" && xupd_a_sav != "")
			{
				if (xupd_a_dis == "0" && xupd_a_sav != "")
				{
				document.getElementById("supd_a_dis").innerHTML = "Discount";
				}
				else if (xupd_a_dis != "" && xupd_a_sav == "0")
				{
				document.getElementById("supd_a_dis").innerHTML = "Discount";
				}
				else
				{
				document.getElementById("supd_a_dis").innerHTML = "<font color=red>Enter any one</font>";
				return false;
				}
			}
			else
			{
				document.getElementById("supd_a_dis").innerHTML = "Discount";
				
				
			}
			
		var xupd_a_sel = document.forms["upd_add_valid"]["upd_a_sel"].value;
		if (xupd_a_sel == "")
			{
				
				document.getElementById("supd_a_sel").innerHTML = "<font color=red>Enter MRP</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_sel").innerHTML = "MRP";
				
				
			}
			
			
		var xupd_a_det = document.forms["upd_add_valid"]["upd_a_det"].value;
		if (xupd_a_det == "")
			{
				
				document.getElementById("supd_a_det").innerHTML = "<font color=red>Enter detail</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_det").innerHTML = "Detail";
				
				
			}
			
			
					/*var xupd_a_ret = document.forms["upd_add_valid"]["upd_a_ret"].value;
		if (xupd_a_ret == "")
			{
				
				document.getElementById("supd_a_ret").innerHTML = "<font color=red>Select return time</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_ret").innerHTML = "Return time";
				
				
			}*/
			
			
			
		var xupd_a_cat = document.forms["upd_add_valid"]["a_cat"].value;
		if (xupd_a_cat == "")
			{
				
				document.getElementById("upd_sa_cat").innerHTML = "<font color=red>Select category</font>";
				
				return false;
			}
			else
			{
				document.getElementById("upd_sa_cat").innerHTML = "category";
				
				
			}
			
		var xupd_a_ima = document.forms["upd_add_valid"]["a_ima"].value;
		if (xupd_a_ima == "")
			{
				
				document.getElementById("upd_sa_ima").innerHTML = "<font color=red>Select image</font>";
				
				return false;
			}
			else
			{
				document.getElementById("upd_sa_ima").innerHTML = "Image";
				
				
			}
			
			
		var xupd_a_pac = document.forms["upd_add_valid"]["upd_a_pac"].value;
		if (xupd_a_pac == "")
			{
				
				document.getElementById("supd_a_pac").innerHTML = "<font color=red>Select Packing</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_pac").innerHTML = "Packing";
				
				
			}
			
			var xupd_a_sto = document.forms["upd_add_valid"]["upd_a_sto"].value;
		if (xupd_a_sto == "")
			{
				
				document.getElementById("supd_a_sto").innerHTML = "<font color=red>Add stock</font>";
				
				return false;
			}
			else
			{
				document.getElementById("supd_a_sto").innerHTML = "Stock";
				
				
			}	
				
				
			
			
			
	}

</script>

<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->

<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->








<p id="upd_bgroup"></p>
<p id="dem"></p>





<!-- add new  dropdown-->
<!-- add new  dropdown-->
<!-- add new  dropdown-->
<!-- add new  dropdown-->
<!-- add new  dropdown-->
<!-- add new  dropdown-->
<!-- add new  dropdown-->


</body>
</html>





