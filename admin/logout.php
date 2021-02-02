<?php
session_start();
session_destroy();
if(isset($_GET['info']) && $_GET['info'] == 'emailschimbat'){


 
  
 header("Location: login_admin.php?info=emailschimbat");
}
else{
    header("Location: login_admin.php");
}

?>