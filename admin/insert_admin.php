<?php 
//insert.php
include("../db.php");



if(isset($_POST["username"]))
{

 $nume=$_POST['nume'];
 $prenume=$_POST['prenume'];
 $email=$_POST['email'];
 $parola=$_POST['parola'];
 $username=$_POST['username'];

 $sql = "SELECT username FROM admin WHERE username='$username'";
 $result = mysqli_query($con, $sql);
 $check = mysqli_num_rows($result);


 if ($check > 0) {
    header("Location:add_admin.php?info=uexistent");
    die();
 }
    else{
 $query = "INSERT INTO admin (nume,prenume,email,username,parola) VALUES('$nume','$prenume','$email','$username','$parola')";
 if(mysqli_query($con, $query))
 {
  
header("Location:add_admin.php?info=contcreat");
  
 }
}
}

?>
