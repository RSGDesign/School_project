<?php
session_start();
include('db.php');
$clasa=$_POST['clasa'];
$result = mysqli_query($con,"SELECT * FROM clase WHERE clasa='$clasa'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
    header("location: signup.php?remarks=failed"); 
   }else {
    $clasa=$_POST['clasa'];
    
    if(mysqli_query($con,"INSERT INTO clase(clasa)VALUES('$clasa')")){ 
    }else{
     $e=mysqli_error($con);
    header("location: signup.php?remarks=error&value=$e");  
    }
   }
   