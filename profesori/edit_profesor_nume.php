<?php 
//insert.php
include("../db.php");
include("session_profesor.php");


if(isset($_POST["nume"]))
{
 $nume=$_POST['nume'];
 $query = "UPDATE profesori SET nume='$nume'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
  
header("Location:edit.php?info=modificatnume");
  
 }
}




?>
