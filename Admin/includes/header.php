<?php

require ('../Database/connexion.php');
require('../Database/functions.php');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.bundle.js" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    

    
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
          <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'];?>">Blog cms Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Voir site</a>
        </li>
       
      </ul>

    </div>
  </div>
</nav>



<?php

//nbr of articles 
$sqlarticle = "SELECT COUNT(*) FROM articles";
$nbrarticle = mysqli_query($con,$sqlarticle);
$outputarticle = mysqli_fetch_array($nbrarticle)[0];

//nbr of categories
$sqlcategorie = "SELECT COUNT(*) FROM categories";
$nbrcategorie = mysqli_query($con,$sqlcategorie);
$outputcategorie = mysqli_fetch_array($nbrcategorie)[0];

//nbr of admins 
$sqladmins = "SELECT COUNT(*) FROM admins";
$nbradmins = mysqli_query($con,$sqladmins);
$outputadmins = mysqli_fetch_array($nbradmins)[0];

//nbr of message 
$sqlmessage = "SELECT count(*) FROM contacts";
$nbrmessage = mysqli_query($con,$sqlmessage);
$outputmessage = mysqli_fetch_array($nbrmessage)[0];


?>


<div style="width:20%;height:100%;" class="bg-light">

  <div>
    <ul class=" navbar-nav mx-2 ">
          <li class="nav-item m-1 pt-2">
          <img src="https://cdn-icons-png.flaticon.com/512/609/609803.png" alt=""  width="30px" height="26px">
            <a class="" href="Dashboard.php">Accueil</a>  
          </li>
          <hr>
          <li class="nav-item m-1">
          <img src="https://cdn-icons-png.flaticon.com/512/1864/1864984.png" alt=""  width="30px" height="26px">

            <a class="" href="addarticle.php">add article</a>   
          </li>
          <hr>
          
          <li class="nav-item m-1">
            <img src="https://cdn-icons-png.flaticon.com/512/9639/9639915.png" alt=""  width="30px" height="26px">
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
            <img src="https://cdn-icons-png.flaticon.com/512/561/561249.png" alt="message" width="30px" height="26px">
            <a class="" href="Message.php">Messages</a>   
            <span class="badge badge-danger ms-2"><?php echo $outputmessage ?></span>
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



<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>








