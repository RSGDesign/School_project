<?php
include("../db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $parola=mysqli_real_escape_string($con,$_POST['parola']);

 $result = mysqli_query($con,"SELECT * FROM admin");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$email) {
  header("location: index.php?remark_login=failed");
 }
 $sql="SELECT id FROM admin WHERE email='$email'  and parola='$parola'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
    $_SESSION['email']=$email;
  header("location: admin.php");
 }
}

?>