<?php
require("connec.php");
 $userid = $_POST['userid'] ;
$password = $_POST['password'];
//SELECT * FROM `movies` WHERE `category_id` = 2 AND `year_released` = 2008;
 
 $query = "SELECT userid, password FROM tb_register WHERE userid = '$userid' AND password = '$password'";
//die();
$result = mysqli_query($c,$query)or die(mysqli_error());
//$result = mysqli_query($c,$query);
//print_r($result);
//echo $result->field_count;
//echo $res = mysqli_num_rows($result);
//print_r($res);
//echo "999".$result->num_rows;
$row = mysqli_fetch_assoc($result);
//print_r($row);
//die();
if(mysqli_num_rows($result))
    {
	$_SESSION["myname"] = $row['userid'];
    $_SESSION["mypswd"] = $row['password' ];
 
       echo "Login Successfull";
	   header("Location: prod.html"); /* Redirect browser */

    }
else
{
        echo "Sorry Wrong Username or password";
		header("Location: lo.html"); /* Redirect browser */
		
}
?>