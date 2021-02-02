<?php 
//insert.php
include("../db.php");
include("session_admin.php");


if(isset($_POST["email"]))
{


 $email=$_POST['email'];



 $query = "UPDATE admin SET email='$email'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
  
header("Location:logout.php?info=emailschimbat");
  
 }
}




?>
