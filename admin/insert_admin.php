<?php 
//insert.php
include("../db.php");



if(isset($_POST["email"]))
{

 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $parola=$_POST['parola'];

 $sql = "SELECT email FROM admin WHERE email='$email'";
 $result = mysqli_query($con, $sql);
 $check = mysqli_num_rows($result);


 if ($check > 0) {
    header("Location:add_admin.php?info=existent");
    die();
 }
    else{
 $query = "INSERT INTO admin (nume,prenume,email,parola) VALUES('$nume','$prenume','$email','$parola')";
 if(mysqli_query($con, $query))
 {
  
header("Location:add_admin.php?info=contcreat");
  
 }
}
}

?>
