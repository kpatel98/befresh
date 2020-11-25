<!DOCTYPE html>
<html>
<body>
<?php
$a="hi";
echo $a;
?>

<form name="try">
<button onclick="categorypro()" value="$a" name="addpro">Click me</button>
</form>
<p id="demo"></p>

<script>
function categorypro() {
	
var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           
       }
    };
    xhttp.open("GET", "addcart_insert.php?idd="+document.forms["try"]["addpro"].value, true);
    xhttp.send(); 
  
  alert('hi');
}
</script>

</body>
</html>
