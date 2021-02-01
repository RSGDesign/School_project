<?php
 include('session_admin.php');
 
?>
<!doctype html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link href="../css/bootstrap.min.css" rel="stylesheet">
 
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <title>Adauga profesor</title>

    <?php
      $sql="SELECT * FROM admin where id=$loggedin_id";
      $result=mysqli_query($con,$sql);
      
  
    ?>
    <?php
while($rows=mysqli_fetch_array($result)){
?>


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
  <div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">School Project</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample05">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="acasa.html">Acasa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Va urma</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown05">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item">
  <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
	  </li>
	  
	  </ul>
    </form>
    </div>
</div>
<div class="container">
    <div class="main-body" style="padding-top:20px">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>
                      <?php echo $rows['nume']; ?> <?php echo $rows['prenume'];?>
                      </h4>
                      <p class="text mb-1">Administator</p>
                      <button class="btn btn-primary">Editeaza informatiile</button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
}
?>
              <div class="card mt-3">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <a class="link" href="add_profesor.php"><b>Adauga profesor</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="add_elev.php"><b>Adauga Elev</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="add_admin.php"><b>Adauga Administrator</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="clase.php"><b>Adauga/Modifica/Sterge/vizualizare clase</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="materii.php"><b>Adauga/Modifica/Sterge/vizualizare materii</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="list_profesori.php"><b>Lista profesori</b></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="link" href="list_elevi.php"><b>Lista elevi</b></a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                  
                    <div class="row">
                    <div class="col-md-12">
                      <h4 class="mb-0">Adauga profesor</h4>
                      <br>
                      <form method="post" id="framework_form">
                            <input type="text" class="form-control" placeholder="Nume" name="nume" value="">
                            <br>
                            <input type="text" class="form-control" placeholder="Prenume" name="prenume" value="">
                            <br>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="">
                            <br>
                            <div class="form-group">
                            
                            <select id="materie" name="materie[]" multiple class="form-control" >
                                        <?php  
                                          
                                          include('db.php');
                                          $select="materii";
                                        ?>  
                                      <?php  
                                          $list=mysqli_query($con,"select * from materii order by id asc");  
                                      while($row_list=mysqli_fetch_assoc($list)){  
                                          ?>  
                                              <option value="<?php echo $row_list['materie']; ?>"<?php if($row_list['materie']==$select){ echo "selected"; } ?> >  
                                                                  <?php echo $row_list['materie'];?>  
                                              </option>  
                                          <?php  
                                          }  
                                          ?>  
                            </select>
                            </div>
                            <br>
                            <input type="password" class="form-control" placeholder="Parola" name="parola" value="">
                            <br>
                            <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>


			

</body>

</html>
<script>
$(document).ready(function(){
 $('#materie').multiselect({
  nonSelectedText: 'Selecteaza materii predate',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#materie option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#materie').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script>
