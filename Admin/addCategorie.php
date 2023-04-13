<?php
require('./includes/sidebar.php');

?>

<div class="container" style="width:80%;height:100%; padding-left:20% ; margin-top:-700px;">
    <h1>Ajouter une Categorie</h1>

    <?php

$erreur = [];
$message = "";

// submit data to database
if (isset($_POST['submit'])) {
  $name = mysqli_escape_string($con, $_POST['name']);  
  $by = mysqli_escape_string($con, $_SESSION['Name']);

  if (empty($name)) {
    $erreur = "Veillez saisir une categorie  ";
  } else {
    $sql = "INSERT into  categories (name,added_by)
            VALUES ('$name','$by')";

    if (mysqli_query($con, $sql)) {
    
      $message = "<div class='alert alert-success'> 
            categorie ajouter
        </div>";

    } else {
      $message = "<div class='alert alert-danger'> 
        Erreur " . mysqli_error($con) . "
    </div>";
    }
  }
}

?>


<div class="container">
  <div class="col-lg-12 col-xl-11">
    <div class="row justify-content-center">
      <form class="mx-1 mx-md-4" action="#" method="post" enctype="multipart/form-data">

        <?php
        if (!empty($erreur)) {
          echo "<div class='alert alert-danger'> 
                      $erreur
                  </div>";
        } else {
          echo $message;
        }

        ?>

        <div class="d-flex flex-row align-items-center mb-4">
          <div class="form-outline flex-fill mb-0">
            <label for="">Categorie</label>
            <input type="text" name="name" class="form-control border"  />

          </div>
        </div>

        <div>
          <button type="submit" name="submit" class="btn btn-primary btn-lg">Ajouter</button>
        </div>

      </form>

    </div>

  </div>
</div>


</div>