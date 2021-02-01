<?php 
//insert.php
include("../db.php");



if(isset($_POST["nume"]))
{

 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $parola=$_POST['parola'];

 $query = "INSERT INTO admin (nume,prenume,email,parola) VALUES('$nume','$prenume','$email','$parola')";
 if(mysqli_query($con, $query))
 {
  
   

header("Location:add_admin.php?info=contcreat");
  
 }
}
?>
