<?php 
//insert.php
include("../db.php");
include("session_profesor.php");


if(isset($_POST["parola"]))
{
 $parola=$_POST['parola'];
 $query = "UPDATE profesori SET parola='$parola'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
  
header("Location:edit.php?info=modificatparola");
  
 }
}




?>
