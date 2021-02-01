|<?php
include("../db.php");
// sql to delete a record

$materie = $_GET['materie']; // get id through query string

$del = mysqli_query($con,"delete from materii where materie = '$materie'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:materii.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>