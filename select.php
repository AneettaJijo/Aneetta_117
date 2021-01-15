<?php
require("connec.php");
$select=mysqli_query($c,"select * from tb_product  ");



echo '<table><tr>
			<th>id</th>
			<th>productid</th>
			<th>image</th>
			<th>botanicalname</th>
			<th>description</th>
			<th>climate</th>
			<th>growingcondition</th>
			<th>medicinaluse</th>
			<th>price</th>
			<th>quantity</th>
		</tr>';
while($row=mysqli_fetch_array($select))
{
	
	echo '<tr><td>'.$row["id"].'</td>
			<td>'.$row["productid"].'</td>
			<td>'.$row["image"].'</td>
			<td>'.$row["botanicalname"].'</td>
			<td>'.$row["description"].'</td>
			<td>'.$row["climate"].'</td></tr>
	         <td>'.$row["growingcondition"].'</td>
			 <td>'.$row["medicinaluse"].'</td>
			 <td>'.$row["price"].'</td>
			 <td>'.$row["quantity"].'</td>';
}
echo '</table>';
?>