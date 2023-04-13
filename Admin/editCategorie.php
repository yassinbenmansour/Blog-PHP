<?php
require('./includes/sidebar.php');

?>


<div class="container" style="width:80%;height:100%; padding-left:20% ; margin-top:-800px;">
  <h1 class="text-primary">Edit categorie </h1>
  
  <hr>

  <?php

  $erreur = [];
  $message = "";
  // get current article
  $ida = mysqli_escape_string($con, $_GET["id"]);
  $query = "SELECT * from categories WHERE id = $ida";
  $result = mysqli_query($con, $query);
  $article = $result->fetch_assoc();


  // submit data to database

  if (isset($_POST['submit'])) {
    $categorie = mysqli_escape_string($con, $_POST['categorie']);
    $author = mysqli_escape_string($con,$_SESSION['Name']) ;

      $sql = "UPDATE categories SET name = '$categorie' created_by = '$author' WHERE id = $ida";

      if (mysqli_query($con, $sql)) {
    
        $message = "<div class='alert alert-success'> 
           categorie editer  

          </div>";

      } else {
        $message = "<div class='alert alert-danger'> 
          Erreur " . mysqli_error($con) . "
      </div>";
      }
    }
  

  ?>


  <div class="container">
    <div class="col-lg-12 col-xl-11">
      <div class="row justify-content-center">
        <form class="mx-1 mx-md-4" action="#" method="post">

         
          <div class="d-flex flex-row align-items-center mb-4">
            <div class="form-outline flex-fill mb-0">
              <label for="">categorie</label>
              <input type="text" name="categorie" class="form-control border" value="<?php echo $categorie['name']; ?>" />
            </div>
          </div>

          
          <div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Edit</button>
          </div>

        </form>

      </div>

    </div>
  </div>


</div>