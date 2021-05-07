<?php
  require ("config.php");

  function chargerClasse($classname)
  {
    require $classname.'.class.php';
  }

  spl_autoload_register('chargerClasse');

  try 
  {
    $db = new PDO("mysql:host=$host;dbname=$base;charset=utf8",$login,$motdepasse);
  } 
  catch (PDOException $e) 
  {
    echo "Erreur : ".$e->getMessage();
    die();
  }

  // On va créer un objet de type manager pour gérer les formulaires avec la BDD
  $manager = new FormulaireManager($db);



    // On récupère la liste des Formulaire et on met les résultats dans un tableau pour en faire des registres
    $listeFormulaire = $manager->getList();
    $resultat = "";
    // On affiche en parcourant le tableau
    foreach ($listeFormulaire as $unFormulaire) 
    {
      $resultat .= '<li><a href="registre.php?ref='.$unFormulaire->getRef().' ">'." Référence : ".$unFormulaire->getRef().", Auteur : ".$unFormulaire->getAuteur().", Traitement / Logiciel : ".$unFormulaire->getNom()."</a></li>";
    }
  



?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Registres RGPD</title>
  <meta charset="UTF-8">

  <!-- Stylesheets -->

  <link href="assets/css/style.css" rel="stylesheet">
  
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/flaticon.css"/>
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>



</head>
<body class="bg-white">

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Site RGPD</a></h1>
        <div class="social-links mt-3 text-center">
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="index.php"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="formulaire.php"><i class="bx bx-book-content"></i> Formulaire</a></li>
          <li><a href="fourniture.php"><i class="bx bx-box"></i> Fourniture</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">




  <div class="container">
    <div class="section-title">
      <h1>Registre RGPD ( Service DSIN )</h1>
    </div>
      <form action="" method="post">  

<!-- ACTEURS -->
    <div class="section-title">
      <h2>Résultats disponibles: </h2>
    </div>


  <fieldset id="field_result">
    <h3>
      <?php 
      if (isset($resultat))
      {
        
        echo $resultat;
        unset($resultat);
      }
      ?>
    </h3>
  </fieldset>
           
           







</main><!-- Fin #main -->
  

<?php include('footer.php'); ?>
