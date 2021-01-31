<?php include "logincheck.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Inregistreaza-te</title>



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

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
   <link href="signup.css" rel="stylesheet">
	<link href="navbar.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div>


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

<iframe src="meniu.html" style="border:none;" title="meniu" width="100%"></iframe>
</div>
<div class="container register" >
                <div class="row">
                    <div  class="col-md-3 register-left">
                       
                        <h3 >Buna ziua</h3>
                        <p>Cele notate cu * sunt obligatorii de completat</p>
						<br>
						<p> Daca aveti cont deja, mergeti pe pagina de <a style="color:#b8b8b8" href="login.php">logare.</a></p>
						<p>Inregistrandu-va acceptati <a style="color:#b8b8b8" href="termeni.html">termenii si conditiile </a> acestui site</p>
                  
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Elev</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profesor</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                       
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Inregistreaza-te ca elev</h3>
                                <form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
                                <div class="row register-form">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nume *" name="nume" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenume *" name="prenume"value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Parola *" name="parola" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirma Parola *" name="parola_2" value="" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Adresa de email *" name="email" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"   class="form-control" name="email_parinte" placeholder="Email parinte *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Telefon Parinte *" name="telefon_parinte" value="" />
                                        </div>
                                        <div class="form-group">
                                        <select Emp Name='clasa' class="form-control">  
                                        <option value="">Clasa</option>  
                                        <?php  
                                          
                                            include('db.php');
                                            $select="clase";
                                        ?>  
                                        <?php  
                                            $list=mysqli_query($con,"select * from clase order by id asc");  
                                        while($row_list=mysqli_fetch_assoc($list)){  
                                            ?>  
                                                <option value="<?php echo $row_list['id']; ?>"<?php if($row_list['id']==$select){ echo "selected"; } ?> >  
                                                                    <?php echo $row_list['clasa'];?>  
                                                </option>  
                                            <?php  
                                            }  
                                            ?>  
                                        </select>
                                        </div>
                                        <input type="submit" class="btnRegister"  name="submit" value="Inregistreaza-te"/>
                                    </div>
                                   
                                </div>
                               
                            </div>
                            </form>
							
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Inregistreaza-te ca profesor</h3>
                                <form name="reg" action="execute_profesor.php" onsubmit="return validateForm()" method="post" id="reg">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nume *" value="" name="nume_profesor"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenume *" value="" name="prenume_profesor"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email*" value="" name="email_profesor"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Parola*" value="" name="parola_profesor"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirma Parola *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Cod verificare" value="" name="verificare" />
                                        </div>
                                       
                                        <input type="submit" class="btnRegister"  name="submit" value="Inregistreaza-te"/>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
			

</body>

</html>
