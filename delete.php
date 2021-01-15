<?php
require("connec.php");

$s = "DELETE FROM tb_product WHERE id=3";

if ($c->query($s) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $c->error;
}
?>