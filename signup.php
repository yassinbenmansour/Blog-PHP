<?php

require ('./Database/connexion.php');
require('./Database/functions.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content mg System</title>
        <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
    rel="stylesheet"
    />
    
</head>
<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="Register.php">Se Connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
       
      </ul>

    </div>
  </div>
</nav>


<?php
$erreur = [];
$message = "";

if(isset($_POST['submit'])){
  $nom = mysqli_escape_string($con,$_POST['username']);
  $mail =  mysqli_escape_string($con,$_POST['mail']);
  $pwd =  mysqli_escape_string($con,$_POST['pwd']);
  $created = date("Y-m-d H-s-m");

  if(empty($nom)){
    $erreur = "Veillez saisi votre Nom ";
  }else if(empty($mail)){
    $erreur = "Veillez saisi votre Email ";
  }else if(empty($pwd)){
    $erreur = "Veillez saisi votre mot de passe  ";
  }else{
    $pwd = md5($pwd);
    $sql = "INSERT INTO users(name,email,password,created) VALUES('$nom','$mail','$pwd','$created')";
    if(mysqli_query($con,$sql)){
      $message = "<div class='alert alert-success'> 
            Compte cree reussi 
          </div>";
        header("Location:Register.php");
    }else {
      $message = "<div class='alert alert-danger'> 
          Erreur ". mysqli_error($con)."
      </div>";
    }
  }

}

?>


<div class="container">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">



                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Inscription</p>

                <form class="mx-1 mx-md-4" action="./signup.php" method="post">


                <?php
              if(!empty($erreur)){
                    echo "<div class='alert alert-danger'> 
                        $erreur
                    </div>";
              }else{
                echo $message ;
              }

              ?>

                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">



                      <input type="text" name="username"  class="form-control"  />
                      <label class="form-label">Username</label>




                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">



                      <input type="email" name="mail"  class="form-control"  />
                      <label class="form-label" >Your Email</label>



                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="pwd" class="form-control"  />
                      <label class="form-label" >Password</label>
                    </div>
                  </div>

                  

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://img.freepik.com/vecteurs-libre/sauvez-concept-planete-gens-qui-prennent-soin-terre_23-2148522570.jpg?w=2000"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

</body>
</html>









<?php
require('./includes/footer.php');
?>