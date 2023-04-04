<?php
require('./includes/header.php');
?>


<?php
$erreur = [];
$message = "";

if(isset($_POST['submit'])){
  $mail =  mysqli_escape_string($con,$_POST['mail']);
  $pwd =  mysqli_escape_string($con,$_POST['pwd']);

  if(empty($mail)){
    $erreur = "Veillez saisi votre Email ";
  }else if(empty($pwd)){
    $erreur = "Veillez saisi votre mot de passe  ";
  }else{
    //$pwd = md5($pwd); //sha1()
    $sql = "SELECT * FROM admins WHERE email = '$mail' AND password = '$pwd'";
    if($data = mysqli_query($con,$sql)){
      $user = $data->num_rows ;

      if($user>0){
        $datauser = $data->fetch_assoc();
        $_SESSION['Admin']= true;
        $_SESSION['User_id'] =$datauser['id'] ;
        $_SESSION['Name'] = $datauser['name'];
        $_SESSION['Email'] = $datauser['email'];
        header("Location:Dashboard.php");
      }
      else {
        $message = "<div class='alert alert-danger'> 
            Erreur email ou mot de passe incorrect ". mysqli_error($con)."
        </div>";
      }

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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Session</p>

                <form class="mx-1 mx-md-4" action="login.php" method="post">


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
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Se connecter</button>
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


<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

</body>
</html>




<?php
require('./includes/footer.php');
?>