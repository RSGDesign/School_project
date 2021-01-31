<?php 
session_start();
include('../db.php');
$email=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM profesori WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: signup.php?remarks=failed"); 
}else {
 $nume=$_POST['nume_profesor'];
 $prenume=$_POST['prenume_profesor'];
 $email=$_POST['email__profesor'];
 $parola=$_POST['parola_profesor'];
 if(mysqli_query($con,"INSERT INTO profesori(nume, prenume, email, parola )VALUES('$nume', '$prenume', '$email', '$parola' )")){ 
 header("location: profesor.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: signup.php?remarks=error&value=$e");  
 }
}
?>