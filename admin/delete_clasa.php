|<?php
include("../db.php");
// sql to delete a record

$clasa = $_GET['clasa']; // get id through query string

$del = mysqli_query($con,"delete from clase where clasa = '$clasa'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:clase.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>