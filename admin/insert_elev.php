<?php 
//insert.php
include("../db.php");



if(isset($_POST["clasa"]))
{
 $clasa = $_POST['clasa'];
 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $parola=$_POST['parola'];

 $query = "INSERT INTO elevi (nume,prenume,email,parola,clasa) VALUES('$nume','$prenume','$email','$parola','$clasa')";
 if(mysqli_query($con, $query))
 {
  echo 'Elev adaugat cu succes!';
 }
}
?>
