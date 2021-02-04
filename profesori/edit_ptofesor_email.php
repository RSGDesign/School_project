<?php 
//insert.php
include("../db.php");
include("session_profesor.php");


if(isset($_POST["email"]))
{
 $email=$_POST['email'];
 $query = "UPDATE profesori SET email='$email'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
header("Location:logout.php?info=emailschimbat");
  
 }
}




?>
