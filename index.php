<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header.css">



</head>

<body id="page-top">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>

    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1" style="display: contents;">
      <form method="post">
        <input class="form-control mr-sm-2" type="search" name="recherche" style="visibility: hidden;" placeholder="Search" aria-label="Search" value="produits">
        <button type="submit" class="btn btn-success">Photos Produits</button><!-- ajout des tags pour les photos Produits -->
      </form>
      <form method="post">
        <input class="form-control mr-sm-2" type="search" name="recherche" style="visibility: hidden;" placeholder="Search" aria-label="Search" value="ambiance">
        <button type="submit" class="btn btn-primary">Photos Ambiance</button><!-- ajout des tags pour les photos Ambiance -->
      </form>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">🛍️ PassionFroid</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      <nav class="navbar navbar-light">
        <form class="form-inline" method='POST'>
        <input class="form-control mr-sm-2" type="search" name="recherche" placeholder="Search" aria-label="Search">
        <!-- Systeme de recherche qui est lié a la BDD -->
        </li>
  </form>
</nav>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        
      </div>
    </div>
  </header>
  <!-- Menu pour changer de page -->
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#about">Menu</a>
      <a class="p-2 text-muted" href="#experience">Articles</a>
      <a class="p-2 text-muted" href="connect/login.php">Login</a>
      <a class="p-2 text-muted" href="#">A la Une</a>

    </nav>
  </div>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
      <img src="img/header.jpg" class="images_LBC" style="height: 100%; width: 100%; "> <!-- L'image du header -->
      </div>
    </section>

    <hr class="m-0">

    <?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'h48';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

 // Récupère la recherche
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

 // la requete mysql
 $q = $conn->query("SELECT * FROM articles WHERE titre LIKE '%$recherche%' OR type LIKE '%$recherche%' ");?>

<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <center><h2 class="mb-5">Les articles</h2></center>

<?php
 // affichage du résultat avec une boucle while
 while( $recherche = mysqli_fetch_array($q)){?>

  <div class="card" style="width: 24%; display: inline-flex; ">
  <?php
        echo "<div id='img_div' >";
      	echo "<img class=' card-img-top'  ' src='images/".$recherche['image']."' >";
        echo "</div>";?>
  <div class="card-body">
    <p class="card-text"><?php echo $recherche['titre'] ; ?></p>
  </div>
</div>
   <?php } ?>
    </div>
    </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

  <footer class="blog-footer">
  <p>🛒 PassionFroid</p>
  <p>
    <a href="#">Revenir en haut</a>
  </p>
</footer>
</body>
</html>
