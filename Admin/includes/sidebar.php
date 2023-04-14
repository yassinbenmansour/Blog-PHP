<?php
require('./includes/header.php');
if (!isset($_SESSION['Admin'])) {
  header("Location:login.php");
}
?>

<?php

//nbr of articles 
$sqlarticle = "SELECT COUNT(*) FROM articles";
$nbrarticle = mysqli_query($con, $sqlarticle);
$outputarticle = mysqli_fetch_array($nbrarticle)[0];

//nbr of categories
$sqlcategorie = "SELECT COUNT(*) FROM categories";
$nbrcategorie = mysqli_query($con, $sqlcategorie);
$outputcategorie = mysqli_fetch_array($nbrcategorie)[0];

//nbr of admins 
$sqladmins = "SELECT COUNT(*) FROM admins";
$nbradmins = mysqli_query($con, $sqladmins);
$outputadmins = mysqli_fetch_array($nbradmins)[0];



?>


<div style="width:20%;height:100%;" class="bg-light">

  <div>
    <ul class=" navbar-nav mx-2 ">
      <li class="nav-item m-1 pt-2">
        <img src="https://cdn-icons-png.flaticon.com/512/609/609803.png" alt="" width="30px" height="26px">
        <a class="" href="Dashboard.php">Accueil</a>
      </li>
      <hr>
      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/1864/1864984.png" alt="" width="30px" height="26px">

        <a class="" href="addarticle.php">add article</a>
      </li>
      <hr>

      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/9639/9639915.png" alt="" width="30px" height="26px">
        <a class="" href="Articles.php">Articles</a>
        <span class="badge badge-danger ms-2"><?php echo $outputarticle; ?></span>
      </li>
      <hr>
      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/718/718970.png" alt="categorie" width="30px" height="26px">
        <a class="" href="addCategorie.php">add Categorie</a>
      </li>
      <hr>
      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/9304/9304546.png" alt="categorie" width="30px" height="26px">
        <a class="" href="Categories.php">Categories</a>
        <span class="badge badge-danger ms-2"><?php echo $outputcategorie; ?></span>
      </li>
      <hr>
     
      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/9322/9322127.png" alt="admin" width="30px" height="26px">
        <a class="" href="admins.php">Admins</a>
        <span class="badge badge-danger ms-2"><?php echo $outputadmins; ?></span>
      </li>
      <hr>
      <li class="nav-item m-1">
        <img src="https://cdn-icons-png.flaticon.com/512/6568/6568636.png" alt="deconnexion" width="30px" height="26px">
        <a class="" href="logout.php">Deconexion</a>
      </li>
      <hr>



    </ul>
  </div>

</div>