<?php 
//insert.php
include("../db.php");



if(isset($_POST["clasa"]))
{

 $clasa=$_POST['clasa'];


 $query = "INSERT INTO clase (clasa) VALUES('$clasa')";
 if(mysqli_query($con, $query))
 {
  
   

header("Location:clase.php?info=clasaadaugata");
  
 }
}
?>
