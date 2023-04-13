<?php
require('./includes/sidebar.php');

?>


<div class="container" style="width:80%;height:100%; padding-left:20% ; margin-top:-800px;">
    <h1 class="text-primary">Ajoute Article</h1>
    <hr>


    <?php

$erreur = [];
$message = "";

// submit data to database
if (isset($_POST['submit'])) {
  $categorie = mysqli_escape_string($con, empty($_POST['categorie']) ?  $article['category_id'] : $_POST['categorie']);
  $title = mysqli_escape_string($con, $_POST['title']);
  $body =  mysqli_escape_string($con, $_POST['body']);
  $image =  mysqli_escape_string($con, empty($_FILES['image']['name']) ? $article['image'] : $_FILES['image']['name']);
  $created = date("Y-m-d H-i-s");
  $author = mysqli_escape_string($con, $_SESSION['Name']);



  if (empty($title)) {
    $erreur = "Veillez saisi le titre ";
  } else if (empty($body)) {
    $erreur = "Veillez saisi la description ";
  } else if (empty($categorie)) {
    $erreur = "Veillez selectione une categorie  ";
  } else {

    $fileNm = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];

    $dir = "images/";
    $file = $dir.basename($fileNm);

    $sql = "INSERT into  articles (title,body,image,category_id,author,created)
            VALUES ('$title','$body','$image','$categorie','$author','$created')";

    if (mysqli_query($con, $sql)) {
      //upload photo 
      move_uploaded_file($filetmp, $file);

      $message = "<div class='alert alert-success'> 
          Article modifie  

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
            <select class="form-select" name="categorie" id="categorie">
              <option disabled selected>Veuillez choisir une categorie</option>

              <?php
              $sqlcategorie = "SELECT * FROM categories";
              $output = mysqli_query($con, $sqlcategorie);
              while ($catego = $output->fetch_assoc()) :
              ?>

                <option value="<?php echo  $catego["id"]; ?>" <?php echo $catego['id'] == $article['category_id'] ? "selected" : ''; ?>>
                  <?php echo  $catego["name"]   ?>

                </option>

              <?php
              endwhile
              ?>

            </select>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <div class="form-outline flex-fill mb-0">
            <label for="">Titre</label>
            <input type="text" name="title" class="form-control border" value="<?php echo $article['title']; ?>" />
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <div class="form-outline flex-fill mb-0">
            <label for="">Contenu</label>
            <textarea cols="30" rows="10" name="body" class="form-control border"><?php echo $article['body']; ?></textarea>
          </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
          <div class="form-outline flex-fill mb-0">
            <label>Image</label>
            <input type="file" name="image" class="form-control border" />
          </div>
        </div>


        <div>
          <button type="submit" name="submit" class="btn btn-primary btn-lg">Valider</button>
        </div>

      </form>

    </div>

  </div>
</div>


</div>