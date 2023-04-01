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
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        
       
       <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
       
      </ul>
      


      <form action="resultsearch.php" method="get">
        <div class="input-group">
           <input type="text" class="form-control mx-2 rounded-5 border border-primary" placeholder="search article ..." name="chaine">
           <div class="input-group-append">
            <input class="btn btn-primary mx-2" type="submit" value="search">
           </div>
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link" ><img src="https://icon-library.com/images/online-status-icon/online-status-icon-1.jpg" style="width:25;height:20;"> Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="seconnecter.php">Deconexion</a>
        </li>
      </ul>

        </div>
      </form>




    </div>
  </div>
  <!-- Container wrapper -->
</nav>



<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>

</body>
</html>


