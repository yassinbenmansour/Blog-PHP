<?php
require('./includes/sidebar.php');

?>


<div class="container" style="width:80%;height:100%; padding-left:20% ; margin-top:-800px;">
    <h1 class="text-primary">delete Categorie </h1>

    <hr>

    <div class="container">
        <div class="col-lg-12 col-xl-11">
            <div class="row justify-content-center">
                <form class="mx-1 mx-md-4" action="#" method="post">

                    <?php
                    $erreur = [];
                    $message = "";

                    $id = $_GET['id'];
                    $sql = "SELECT * FROM categories WHERE id = $id";
                    $result = mysqli_query($con, $sql);
                    $categoname = $result->fetch_assoc();


                    if (isset($_POST['submit'])) {
                      
                        $changeSql = "DELETE FROM categories WHERE id = $id";
                        if (mysqli_query($con, $changeSql)) {
                            $message = "<div class='alert alert-success'> 
                            categorie deleted  
                
                          </div>";
                        } else {
                            $message = "<div class='alert alert-danger'> 
                              Erreur " . mysqli_error($con) . "
                          </div>";
                        }
                    }


                    ?>

                    <?php
                    if (!empty($erreur)) {
                        echo "<div class='alert alert-danger'> 
                        ". $erreur." 
                    </div>";
                    } else {
                        echo $message;
                    }

                    ?>


                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <label for="">Categorie</label>
                            <input type="text" name="categorie" class="form-control border" value="<?php echo $categoname['name']  ?>">
                        </div>
                    </div>




                    <div>
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Delete"></input>
                    </div>

                </form>

            </div>

        </div>
    </div>


</div>