<?php 
//insert.php
include("../db.php");
include("session_admin.php");


if(isset($_POST["prenume"]))
{
 $prenume=$_POST['prenume'];
 $query = "UPDATE admin SET prenume='$prenume'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
  
header("Location:edit.php?info=modificatprenume");
  
 }
}




?>
