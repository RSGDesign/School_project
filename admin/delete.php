|<?php
include("../db.php");
// sql to delete a record

$sql = "DELETE FROM profesori WHERE nume=$select";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
?>