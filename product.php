<html>
<body>
<form method="POST">
productid:<input type="text" name="productid"><br>
productname:<input type="text" name="productname"><br>
botanicalname:<input type="text" name="botanicalname"><br>
description:<textarea  name="description" rows="4" cols="50"></textarea><br>
climate:<textarea name="climate" rows="4" cols="50"></textarea><br>
growingcondition:<textarea  name="growingcondition" rows="4" cols="50"></textarea><br>
medicinaluse:<textarea  name="medicinaluse" rows="4" cols="50"></textarea><br>
price:<input type="text" name="price"><br>
quantity:<input type="text"  name="quantity"><br>
image:<input type="file" name="image"><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
require("connec.php");

if(isset($_POST['submit']))
{
	echo$productid=$_POST['productid'];
	echo$productname=$_POST['productname'];
	echo$botanicalname=$_POST['botanicalname'];
	echo$description=$_POST['description'];
	echo$climate=$_POST['climate'];
	echo$growingcondition=$_POST['growingcondition'];
	echo$medicinaluse=$_POST['medicinaluse'];
	echo$price=$_POST['price'];
	echo$quantity=$_POST['quantity'];
	echo$image=$_POST['image'];
	
	//insert query
	$ins="INSERT INTO tb_product(productid ,productname, botanicalname , description , climate , growingcondition , medicinaluse , price , quantity,image) VALUES ('$productid'  ,'$productname' , '$botanicalname' , '$description' ,' $climate' , '$growingcondition' , '$medicinaluse' , '$price' ,' $quantity','$image')";
	echo $ins;
	//$sql=mysqli_query($c,$ins);
if ($c->query($ins)==true) 
{
  echo "New record created successfully";
}
 else 
 {
  echo "Error: " . $ins . "<br>" . $c->error;
}
}
?>
