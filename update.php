<?php
require("connec.php");

$sql = "UPDATE tb_product SET botanicalname='Doe' WHERE id=2";

if ($c->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $c->error;
}
?>