<?php 
//insert.php
include("../db.php");



if(isset($_POST["materie"]))
{

 $materie=$_POST['materie'];


 $query = "INSERT INTO materii (materie) VALUES('$materie')";
 if(mysqli_query($con, $query))
 {
  
   

header("Location:materii.php?info=materie_adaugata");
  
 }
}
?>
