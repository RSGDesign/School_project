<?php
 include('../db.php');
 session_start();
 $user_check=$_SESSION['email'];
 $ses_sql=mysqli_query($con,"select email,id from profesori where email='$user_check'");
 $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 $loggedin_session=$row['email'];
 $loggedin_id=$row['id'];
 if(isset($loggedin_session)==$row)
 
 {
     
 $user_check=$_SESSION['email'];
 $ses_sql=mysqli_query($con,"select email,id from profesori where email='$user_check'");
 $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 $loggedin_session=$row['email'];
 $loggedin_id=$row['id'];
 if(!isset($loggedin_session) || $loggedin_session==NULL) {
     echo "Go back";
     header("Location: login.php");
    }
 }
?>