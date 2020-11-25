
<?php
//include("db.php");
/*if(!isset($_SESSION['admin_login']))
  header("location: adminlogin.php");*/


 
$conn = new mysqli("localhost","root","","patel_mart");

if ($conn->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 
$query="SELECT * FROM producta where pro_id=(SELECT max(pro_id) FROM producta)";
			$resultu=mysqli_query($conn,$query);
			$rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC);

if(isset($_POST["insert"])) 
{
	
	$vp_nam=$_POST['a_nam'];
	$vp_sim=$_POST['a_sim'];
	$vp_bra=$_POST['a_bra'];
	$vp_con=$_POST['a_con'];
	$vp_typ=$_POST['a_typ'];
	$vp_pac=$_POST['a_pac'];
	$vp_pri=$_POST['a_pri'];
	$vp_dis=$_POST['a_dis'];
	$vp_sav=$_POST['a_sav'];
	$vp_sel=$_POST['a_sel'];
	$vp_det=$_POST['a_det'];
	$vp_ret=$_POST['a_ret'];
	$vp_sto=$_POST['a_sto'];
	$vp_cat=$_POST['a_catab'];
	
	if($vp_dis !="")
	{
		
	$vp_fin=$vp_sel-(($vp_sel/100)*$vp_dis);
	
	}
	else
	{
		$vp_fin=$vp_sel-$vp_sav;
		
	}
	
	
    $target_file = "productimg/" . basename($_FILES["fileToUpload"]["name"]);
     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
   
   
   $target_fileb = "productimg/" . basename($_FILES["fileToUploadb"]["name"]);
     move_uploaded_file($_FILES["fileToUploadb"]["tmp_name"], $target_fileb);
	 
   $target_filec = "productimg/" . basename($_FILES["fileToUploadc"]["name"]);
     move_uploaded_file($_FILES["fileToUploadc"]["tmp_name"], $target_file);
	 
   $target_filed = "productimg/" . basename($_FILES["fileToUploadd"]["name"]);
     move_uploaded_file($_FILES["fileToUploadd"]["tmp_name"], $target_file);
   
   
    $sql="insert into producta(pro_simelar,pro_name,pro_brand,pro_contity,pro_contype,pro_pack,pro_price,pro_sellprice,pro_dis,pro_save,pro_finelprice,pro_detail,pro_returntime,sub_id,pro_stock,pro_img,pro_imgb,pro_imgc,pro_imgd)values 
							 ('$vp_sim','$vp_nam','$vp_bra','$vp_con','$vp_typ','$vp_pac','$vp_pri','$vp_sel','$vp_dis','$vp_sav','$vp_fin','$vp_det','1d','$vp_cat',10000,'$target_file','$target_fileb','$target_filec','$target_filed')";
							 
 
  if(mysqli_query($conn,$sql))
  {
        echo "record saved";
		

		 $sqlu = "UPDATE producta SET pro_simelar=pro_id WHERE pro_simelar=0"; 
$query="SELECT * FROM producta where pro_id=(SELECT max(pro_id) FROM producta)";
			$resultu=mysqli_query($conn,$query);
			$rowu = mysqli_fetch_array($resultu,MYSQLI_ASSOC);
			
  }
 
	if(mysqli_query($conn,$sqlu))
	{
		
	}		
    	
		
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
    xhttp.open("GET", "displaytry.php?id="+document.forms["add_valid"]["a_cat"].value, true);
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
    xhttp.open("GET", "catproduct.php?idd="+document.forms["add_valid"]["a_cata"].value, true);
    xhttp.send(); 
  
  
}
</script>



<script>
function branddrop() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("bgroup").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "brandgroup.php?sim="+document.forms["add_valid"]["a_bra"].value, true);
    xhttp.send(); 
  
  
}
</script>
<table >
<tr><td valign="top">
<table border=0>
<tr><td>
<form  name="add_valid" method="post" enctype="multipart/form-data" onsubmit="return valid_add()">
   <table  align=left border=1><tr><td>
				<table border=0 align=center>
				
				<tr><td>		 <p id="sa_nam">Name</p></td><td><input type="text" name="a_nam">Simelar<input type="text" name="a_sim"></td></tr>
				<tr><td><p id="sa_bra">Brand</p>		 </td><td>
				<?php
				 $sql= "select * from pro_brand order by bra_name "; 
				 $result=mysqli_query($conn,$sql);
				 ?><div class="chan"><?php
				 echo "<select onchange='branddrop()' name='a_bra'>";?></div><?php
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['bra_name'] ."</option>";
				 }
			    	echo "</select>";
				?></td></tr>
				<tr><td><p id="sa_con">Packing size</p>   	 </td><td><input type="text" name="a_con"></td></tr>
				<tr><td><p id="sa_typ">Contity type</p> </td><td>
				<?php
				 $sql= "select * from pro_contity order by con_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_typ'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['con_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				</td></tr>
				<tr><td><p id="sa_pac">Packing</p>	 </td><td>
				<?php
				 $sql= "select * from pro_packing order by pac_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_pac'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['pac_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				</td></tr>
				<tr><td><p id="sa_pri">Price</p>      	 </td><td><input type="text" name="a_pri"></td></tr>
				<tr><td><p id="sa_dis">Discount</p>	 </td><td><input type="text" name="a_dis">Save<input type="text" name="a_sav"></td></tr>
				<tr><td><p id="sa_sel">MRP</p></td><td><input type="text" name="a_sel"></td></tr>
				<tr><td><p id="sa_det">Detail</p>		 </td><td><textarea rows="6" cols="40" name="a_det"></textarea></td></tr>
				<tr><td><p id="sa_ret">Return time</p>  </td><td>
				<?php
				 $sql= "select * from pro_ret order by ret_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_ret'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option>". $row['ret_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				
				<!------------------------------->
				</td></tr>
				<tr><td><p id="sa_cat">Category</p>	 </td><td>
				<?php
				 $sql= "select * from pro_category group by cat_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='a_cat'  onchange='categorya()'>";
				 echo "<option></option>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['cat_id'].">". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
				?>
				
				
				<p id="demo"></p>
				<p id="demob"></p>
				
				
				
				
				
				</td></tr>
				<tr><td><p id="sa_sto">Stock</p></td><td><input type="text" name="a_sto"></td></tr>
				<!---------------------->
                <tr><td><p id="sa_ima">Image</p>        </td><td><input type="file" name="fileToUpload" id="fileToUpload"> </td></tr>
				 <tr><td></td><td><input type="file" name="fileToUploadb" id="fileToUploadb"> </td></tr>
				<tr><td></td><td> <input type="file" name="fileToUploadc" id="fileToUploadc"> </td></tr>
				 <tr><td></td><td><input type="file" name="fileToUploadd" id="fileToUploadd"> </td></tr>
					</td></tr>
				<tr><td colspan=2 align=center><br><hr><input type="submit" value="Add Product" name="insert"><p id="sa_ins"></p></td></tr>
				
				<tr><td>
						
				
				
<p id="mor"></p>
</td></tr>
				</table>
         
</form>

</td></tr></table>
</td></tr>
<script>



function valid_add()
	{
		var xa_bra = document.forms["add_valid"]["a_nam"].value;
		if (xa_bra == "")
			{
				
				document.getElementById("sa_nam").innerHTML = "<font color=red>Enter name</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_nam").innerHTML = "Name";
				
				
			}
				
		var xa_bra = document.forms["add_valid"]["a_bra"].value;
		if (xa_bra == "")
			{
				
				document.getElementById("sa_bra").innerHTML = "<font color=red>Select brand</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_bra").innerHTML = "Brand";
				
				
			}
			
			var xa_con = document.forms["add_valid"]["a_con"].value;
		if (xa_con == "")
			{
				
				document.getElementById("sa_con").innerHTML = "<font color=red>Enter stock</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_con").innerHTML = "Stock";
				
				
			}
			
			
			
			var xa_typ = document.forms["add_valid"]["a_typ"].value;
		if (xa_typ == "")
			{
				
				document.getElementById("sa_typ").innerHTML = "<font color=red>select contity type</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_typ").innerHTML = "Contity type";
				
				
			}
			
			
			var xa_pri = document.forms["add_valid"]["a_pri"].value;
		if (xa_pri == "")
			{
				
				document.getElementById("sa_pri").innerHTML = "<font color=red>Enter price</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_pri").innerHTML = "Price";
				
				
			}
			
			var xa_dis = document.forms["add_valid"]["a_dis"].value;
			var xa_sav = document.forms["add_valid"]["a_sav"].value;
		if (xa_dis == "" && xa_sav == "")
			{
				
				document.getElementById("sa_dis").innerHTML = "<font color=red>Enter discount or Save</font>";
				
				return false;
			}
			else if (xa_dis != "" && xa_sav != "")
			{
				
				document.getElementById("sa_dis").innerHTML = "<font color=red>Enter any one</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_dis").innerHTML = "Discount";
				
				
			}
			
		var xa_sel = document.forms["add_valid"]["a_sel"].value;
		if (xa_sel == "")
			{
				
				document.getElementById("sa_sel").innerHTML = "<font color=red>Enter MRP</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_sel").innerHTML = "MRP";
				
				
			}
			
			
		var xa_det = document.forms["add_valid"]["a_det"].value;
		if (xa_det == "")
			{
				
				document.getElementById("sa_det").innerHTML = "<font color=red>Enter detail</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_det").innerHTML = "Detail";
				
				
			}
			
			
					var xa_ret = document.forms["add_valid"]["a_ret"].value;
		if (xa_ret == "")
			{
				
				document.getElementById("sa_ret").innerHTML = "<font color=red>Select return time</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_ret").innerHTML = "Return time";
				
				
			}
			
			
			
		
			
		var xa_ima = document.forms["add_valid"]["a_ima"].value;
		if (xa_ima == "")
			{
				
				document.getElementById("sa_ima").innerHTML = "<font color=red>Select image</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_ima").innerHTML = "Image";
				
				
			}
			
			
		var xa_pac = document.forms["add_valid"]["a_pac"].value;
		if (xa_pac == "")
			{
				
				document.getElementById("sa_pac").innerHTML = "<font color=red>Select Packing</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_pac").innerHTML = "Packing";
				
				
			}
			
			var xa_sto = document.forms["add_valid"]["a_sto"].value;
		if (xa_sto == "")
			{
				
				document.getElementById("sa_sto").innerHTML = "<font color=red>Add stock</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_sto").innerHTML = "Stock";
				
				
			}	
				
			





			
				var xa_cat = document.forms["add_valid"]["a_cat"].value;
		if (xa_cat == "")
			{
				
				document.getElementById("sa_cat").innerHTML = "<font color=red>Select category</font>";
				
				return false;
			}
			else
			{
				document.getElementById("sa_cat").innerHTML = "category";
				
				
			}
			
			
	}

</script>
<tr><td>
<br><br>
</td></tr>
<tr><td>
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<?php

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
//	$upd_vp_cat=$_POST['upd_a_catab'];
	$upd_vp_cat=$_POST['up_a_catab'];
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
								sub_id='$upd_vp_cat',
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


<script>
function up_categorya() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("up_demo").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "up_displaytry.php?up_id="+document.forms["upd_add_valid"]["up_a_cat"].value, true);
    xhttp.send(); 
  
  
}
</script>
<script>
function up_categorypro() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("up_demob").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "up_catproduct.php?up_idd="+document.forms["upd_add_valid"]["up_a_cata"].value, true);
    xhttp.send(); 
  
  
}
</script>



<script>
function up_branddrop() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("up_bgroup").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "up_brandgroup.php?up_sim="+document.forms["upd_add_valid"]["up_a_bra"].value, true);
    xhttp.send(); 
  
  
}
</script>



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
				 echo "<select onchange='up_branddrop()' name='up_a_bra'>";?></div><?php
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
				<input type="text" value="<?php echo $rowuprosubcat['cat_name']?>" readonly><br>
				
				<?php
				 $sql= "select * from pro_category group by cat_name "; 
				 $result=mysqli_query($conn,$sql);
				 echo "<select name='up_a_cat'  onchange='up_categorya()'>";
				 while($row = mysqli_fetch_assoc($result))
				 {
					echo "<option value=".$row['cat_id'].">". $row['cat_name'] ."</option>";
				 }
			    	echo "</select>";
					
				?>
				
				<p id="up_demo"></p>
				<p id="up_demob"></p>
				
				
				
				
				
				</td></tr>
				<tr><td><p id="supd_a_sto">Stock</p></td><td><input type="text" value="<?php echo $rowu['pro_stock']?>"name="upd_a_sto"></td></tr>
				<!---------------------->
                <tr><td><p id="upd_sa_ima">Image</p>        </td><td><img height=100 width=100 src="<?php echo $rowu['pro_img']; ?>" /><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
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

<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->	
			
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->
<!---------/update form-------------><!----------------------><!----------------------><!----------------------><!---------------------->

</td></tr>
<tr><td>
<br><Br><br>
</td></tr>
</table>


</td>
<td valign="top">
<p id="bgroup"></p>
<p id="up_bgroup"></p>

</td></tr>
</table>




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





