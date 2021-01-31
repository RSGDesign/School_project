<?php 
session_start();
include('../db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM elevi WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: signup.php?remarks=failed"); 
}else {
 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $email_parinte=$_POST['email_parinte'];
 $parola=$_POST['parola'];
 $clasa=$_POST['clasa'];
 $telefon_parinte=$_POST['telefon_parinte'];
 if(mysqli_query($con,"INSERT INTO elevi(nume, prenume, email_parinte,email, parola, clasa,  telefon_parinte)VALUES('$nume', '$prenume','$email_parinte', '$email', '$parola', '$clasa', '$telefon_parinte')")){ 
 header("location: elev.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: signup.php?remarks=error&value=$e");  
 }
}
?>