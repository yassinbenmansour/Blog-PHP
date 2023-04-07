<?php
require('./includes/sidebar.php');

?>


<div class="container" style="width:80%;height:100%; padding-left:20% ; margin-top:-800px;">
    <h1 class="text-primary">Delete article </h1>

    <hr>

    <?php

    $erreur = [];
    $message = "";
    // get current article
    $ida = mysqli_escape_string($con, $_GET["id"]);
    $query = "SELECT * from articles WHERE id = $ida";
    $result = mysqli_query($con, $query);
    $article = $result->fetch_assoc();


    // submit data to database

    if (isset($_POST['delete'])) {
        $title = mysqli_escape_string($con, $_POST['title']);
        $body =  mysqli_escape_string($con, $_POST['body']);


        $sql = "DELETE FROM articles WHERE id = $ida";

        if (mysqli_query($con, $sql)) {

            $message = "<div class='alert alert-success'> 
            Article supprime 
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
                    <?php
                    echo $message;
                    ?>
                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label for="">Titre</label>
                            <input readonly type="text" name="title" class="form-control border" value="<?php echo $article['title']; ?>" />
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label for="">Contenu</label>
                            <textarea readonly cols="30" rows="10" name="body" class="form-control border"><?php echo $article['body']; ?></textarea>
                        </div>
                    </div>




                    <div>
                        <button type="submit" name="delete" class="btn btn-primary btn-lg">Delete</button>
                    </div>

                </form>

            </div>

        </div>
    </div>


</div>