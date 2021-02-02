
<?php
session_start();
if(isset($_SESSION['email'])  )

{
  header("Location:admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logheaza-te</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
	
   <link href="../signup.css" rel="stylesheet">
	<link href="../navbar.css" rel="stylesheet">
  </head>
  <body class="text-center">

  
<iframe src="../meniu.html" style="border:none;" width="100%" title="meniu"></iframe>
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';

if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>

<div class="container register" >
                <div class="row">
                    
                    <div class="col-md-12 register-right">
                        
                        <div class="tab-content" id="myTabContent">
						
                           
                            <?php
                                $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                                
                                if ($remarks=='failed') {
                                echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
                                }
                            ?>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                <h3 class="register-heading">Logheaza-te ca administrator</h3>
                                <form action="logincheck_admin.php" method="POST" id="signin" id="reg">
                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Adresa de email *" name="email" value="" required>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Parola *" name="parola" value="" required>
                                        </div>
                                        <input type="submit" class="btnRegister" name="signin" value="Logheaza-te"/>
                                    </div>
                                </div>
                                </form>
                            </div>
							
                            
                        </div>
                    </div>
                </div>

            </div>

</body>




<?php
   if(isset($_GET['info']) && $_GET['info'] == 'parolagresita'){


  echo'<script>  alert("Parola este gresita!")</script>'; 

}
?>		








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
</html>
