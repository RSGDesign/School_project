<?php 
//insert.php
include("../db.php");
include("session_profesor.php");


if(isset($_POST["prenume"]))
{
 $prenume=$_POST['prenume'];
 $query = "UPDATE profesori SET prenume='$prenume'   WHERE id='$loggedin_id'";
 if(mysqli_query($con, $query))
 {
  
header("Location:edit.php?info=modificatprenume");
  
 }
}




?>
