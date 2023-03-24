<?php
function affCategorie($con,$id){
    $query = "SELECT * FROM categories WHERE id = '$id'";
    $output = mysqli_query($con,$query);

    return $categorie = $output->fetch_assoc();
}



?>


