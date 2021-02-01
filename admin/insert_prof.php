<?php 
//insert.php
include("../db.php");



if(isset($_POST["materie"]))
{
 $materie = '';
 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $parola=$_POST['parola'];
 foreach($_POST["materie"] as $row)
 {
  $materie .= $row . ', ';
 }
 $materie = substr($materie, 0, -2);
 $query = "INSERT INTO profesori(nume,prenume,email,parola,materie) VALUES('$nume','$prenume','$email','$parola','".$materie."')";
 if(mysqli_query($con, $query))
 {
  echo 'Profesor adaugat cu succes!';
 }
}
?>
