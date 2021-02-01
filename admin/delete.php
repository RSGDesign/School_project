|<?php
include("../db.php");
// sql to delete a record

$nume = $_GET['nume']; // get id through query string

$del = mysqli_query($con,"delete from profesori where nume = '$nume'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:list_profesori.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>