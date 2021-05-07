<!-- page Modifier/ bouton modfier & supprimer / *count*   / compte rendu /  
  rajouter modfier dans manager /enlever la map / supprimer les données dans formulaire après test / tester / télécharger -->

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

  if (isset($_POST['ajouter']))
  {
    $Nom = $_POST['nom_A'];
    $Mdp = $_POST['mdp_A'];
    $Liceite = $_POST['liceite_A'];
    $Auteur = $_POST['auteur_A'];
    $Service = $_POST['service_A'];
    $Responsable1 = $_POST['responsable1_A'];
    $Responsable2 = $_POST['responsable2_A'];
    $Representant = $_POST['representant_A'];
    $FinaliteP = $_POST['finalitep_A'];
    $Finalite1 = $_POST['finalite1_A'];
    $Finalite2 = $_POST['finalite2_A'];
    $Finalite3 = $_POST['finalite3_A'];
    $Finalite4 = $_POST['finalite4_A'];
    $Finalite5 = $_POST['finalite5_A'];
    $Etat = $_POST['etat_A'];
    $Collecte1 = $_POST['collecte1_A'];
    $Duree1 = $_POST['duree1_A'];
    $NSS = $_POST['nss_A'];
    $Collecte2 = $_POST['collecte2_A'];
    $Duree2 = $_POST['duree2_A'];
    $Viepers = $_POST['viepers_A'];
    $Collecte3 = $_POST['collecte3_A'];
    $Duree3 = $_POST['duree3_A'];
    $Economique = $_POST['economique_A'];
    $Collecte4 = $_POST['collecte4_A'];
    $Duree4 = $_POST['duree4_A'];
    $Connexion = $_POST['connexion_A'];
    $Collecte5 = $_POST['collecte5_A'];
    $Duree5 = $_POST['duree5_A'];
    $Localisation = $_POST['localisation_A'];
    $Collecte6 = $_POST['collecte6_A'];
    $Duree6 = $_POST['duree6_A'];
    $Origine = $_POST['origine_A'];
    $Collecte7 = $_POST['collecte7_A'];
    $Duree7 = $_POST['duree7_A'];
    $Politique = $_POST['politique_A'];
    $Collecte8 = $_POST['collecte8_A'];
    $Duree8 = $_POST['duree8_A'];
    $Conviction = $_POST['conviction_A'];
    $Collecte9 = $_POST['collecte9_A'];
    $Duree9 = $_POST['duree9_A'];
    $Syndicale = $_POST['syndicale_A'];
    $Collecte10 = $_POST['collecte10_A'];
    $Duree10 = $_POST['duree10_A'];
    $Medicale = $_POST['medicale_A'];
    $Collecte11 = $_POST['collecte11_A'];
    $Duree11 = $_POST['duree11_A'];
    $Orientation = $_POST['orientation_A'];
    $Collecte12 = $_POST['collecte11_A'];
    $Duree12 = $_POST['duree12_A'];
    $Infraction = $_POST['infraction_A'];
    $Collecte13 = $_POST['collecte13_A'];
    $Duree13 = $_POST['duree13_A'];
    $Echange1 = $_POST['echange1_A'];
    $Echange2 = $_POST['echange2_A'];
    $Echange3 = $_POST['echange3_A'];
    $Destinataire1 = $_POST['destinataire1_A'];
    $Destinataire2 = $_POST['destinataire2_A'];
    $Destinataire3 = $_POST['destinataire3_A'];
    $Destinataire4 = $_POST['destinataire4_A'];
    $HorsUE = $_POST['horsue_A'];
    $DestinataireHUE1 = $_POST['destinatairehue1_A'];
    $Pays1 = $_POST['pays1_A'];
    $Garantie1 = $_POST['garantie1_A'];
    $DestinataireHUE2 = $_POST['destinatairehue2_A'];
    $Pays2 = $_POST['pays2_A'];
    $Garantie2 = $_POST['garantie2_A'];
    $DestinataireHUE3 = $_POST['destinatairehue3_A'];
    $Pays3 = $_POST['pays3_A'];
    $Garantie3 = $_POST['garantie3_A'];
    $DestinataireHUE4 = $_POST['destinatairehue4_A'];
    $Pays4 = $_POST['pays4_A'];
    $Garantie4 = $_POST['garantie4_A'];
    $Securite1 = $_POST['securite1_A'];
    $Securite2 = $_POST['securite2_A'];
    $Securite3 = $_POST['securite3_A'];
    $Technologie1 = $_POST['technologie1_A'];
    $Technologie2 = $_POST['technologie2_A'];
    $Autre = $_POST['autre_A'];
    $Formulaire = new Formulaire(['Nom'=>$Nom, 'Mdp'=>$Mdp, 'Liceite'=>$Liceite, 'Auteur'=>$Auteur, 'Service'=>$Service, 'Responsable1'=>$Responsable1, 'Responsable2'=>$Responsable2, 'Representant'=>$Representant, 'FinaliteP'=>$FinaliteP, 'Finalite1'=>$Finalite1, 'Finalite2'=>$Finalite2, 'Finalite3'=>$Finalite3, 'Finalite4'=>$Finalite4, 'Finalite5'=>$Finalite5, 'Etat'=>$Etat, 'Collecte1'=>$Collecte1, 'Duree1'=>$Duree1, 'NSS'=>$NSS, 'Collecte2'=>$Collecte2, 'Duree2'=>$Duree2, 'Viepers'=>$Viepers, 'Collecte3'=>$Collecte3, 'Duree3'=>$Duree3, 'Economique'=>$Economique, 'Collecte4'=>$Collecte4, 'Duree4'=>$Duree4, 'Connexion'=>$Connexion, 'Collecte5'=>$Collecte5, 'Duree5'=>$Duree5, 'Localisation'=>$Localisation, 'Collecte6'=>$Collecte6, 'Duree6'=>$Duree6, 'Origine'=>$Origine, 'Collecte7'=>$Collecte7, 'Duree7'=>$Duree7, 'Politique'=>$Politique, 'Collecte8'=>$Collecte8, 'Duree8'=>$Duree8, 'Conviction'=>$Conviction, 'Collecte9'=>$Collecte9, 'Duree9'=>$Duree9, 'Syndicale'=>$Syndicale, 'Collecte10'=>$Collecte10, 'Duree10'=>$Duree10, 'Medicale'=>$Medicale, 'Collecte11'=>$Collecte11, 'Duree11'=>$Duree11, 'Orientation'=>$Orientation, 'Collecte12'=>$Collecte12, 'Duree12'=>$Duree12, 'Infraction'=>$Infraction, 'Collecte13'=>$Collecte13, 'Duree13'=>$Duree13, 'Echange1'=>$Echange1, 'Echange2'=>$Echange2, 'Echange3'=>$Echange3, 'Destinataire1'=>$Destinataire1, 'Destinataire2'=>$Destinataire2, 'Destinataire3'=>$Destinataire3, 'Destinataire4'=>$Destinataire4, 'HorsUE'=>$HorsUE, 'DestinataireHUE1'=>$DestinataireHUE1, 'Pays1'=>$Pays1, 'Garantie1'=>$Garantie1, 'DestinataireHUE2'=>$DestinataireHUE2, 'Pays2'=>$Pays2, 'Garantie2'=>$Garantie2, 'DestinataireHUE3'=>$DestinataireHUE3, 'Pays3'=>$Pays3, 'Garantie3'=>$Garantie3, 'DestinataireHUE4'=>$DestinataireHUE4, 'Pays4'=>$Pays4, 'Garantie4'=>$Garantie4, 'Securite1'=>$Securite1, 'Securite2'=>$Securite2, 'Securite3'=>$Securite3, 'Technologie1'=>$Technologie1, 'Technologie2'=>$Technologie2, 'Autre'=>$Autre]);
    $manager->add($Formulaire);
  }



?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Formulaire RGPD</title>
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
          <li><a href="registres.php"><i class="bx bx-server"></i> Registre</a></li>
          <li><a href="fourniture.php"><i class="bx bx-box"></i> Fourniture</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">

  <div class="container">
    <div class="section-title">
      <h1>Formulaire RGPD ( Service DSIN )</h1>
    </div>
      <form action="" method="post">  


<!-- DESCRIPTION -->

    <div class="section-title">
      <h2>Remplissez attenvivement les champs ( * obligatoire )</h2>
    </div>   




      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="Nom" class="text-dark">Description du traitement / Nom du logiciel*</label>
          <input type="text" class="form-control" id="Nom"name="nom_A" placeholder="Logiciel" required>        
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="Mdp" class="text-black">Mot de passe du registre*</label>
          <input type="text" class="form-control" id="Mdp" name="mdp_A" placeholder="*********" required>        
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
      <div class="col-md-4 mb-3">
          <label for="Auteur" class="text-dark">Nom et prenom de l'auteur du formulaire*</label>
          <input type="text" class="form-control" id="Auteur" name="auteur_A" placeholder="Nom & Prenom" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="Service" class="text-dark">Service chargé de la mise en oeuvre*</label>
          <input type="text" class="form-control" id="Service" name="service_A" placeholder="le Service" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
      </div>

<!-- ACTEURS -->
    <div class="section-title">
      <h2>Acteurs</h2>
    </div>

      <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="Responsable1" class="text-dark">Responsable du traitement*</label>
          <input type="text" class="form-control" id="Responsable1" name="responsable1_A" placeholder="Nom, Prenom" required>        
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="Representant" class="text-dark">Représentant (sous-traitant)*</label>
          <input type="text" class="form-control" id="Representant" name="representant_A" placeholder="Nom, Prenom" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="Responsable2" class="text-dark">Responsable(s) conjoint(s)*</label>
          <input type="text" class="form-control" id="Responsable2" name="responsable2_A" placeholder="Nom, Prenom" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>    
      </div>

<!-- FONDEMENT JURIDIQUE DU TRAITEMENT -->
    <div class="section-title">
      <h2>Fondement juridique du traitement</h2>
    </div>

      <div class="form-group row">
          <label class="md-3 text-dark" for="type"> Licéité du traitement* :</label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="mission" name="liceite_A" value="mission d'intérêt public" required>
            <label class="custom-control-label text-dark" for="mission">mission d'intérêt public</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="exercice" name="liceite_A" value="relevant de l'exercice de l'autorité publique" required>
            <label class="custom-control-label text-dark" for="exercice">relevant de l'exercice de l'autorité publique</label>
          </div>   
          <div class="invalid-feedback">
            Le type est obligatoire
          </div>          
        </div>

<!-- FINALITE -->
    <div class="section-title">
      <h2>Finalité(s) du traitement effectué</h2>
    </div>

      <div class="form-group row">
        <div class="form-group col-md-4">
           <label for="finalitep" class="text-dark"> Finalité Principale*</label>              
          <select class="form-control" id="finalitep" name="finalitep_A" required>
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="finalite1" class="text-dark"> Sous-finalité 1</label>
      <select class="form-control" id="finalite1" name="finalite1_A">
              <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom2 = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom2; ?>"><?php echo $nom2; ?></option>
                      <?php
                  }
                  ?>
      </select>
       </div>
       <div class="form-group col-md-4">
           <label for="finalite2" class="text-dark"> Sous-finalité 2</label>
          <select class="form-control" id="finalite2" name="finalite2_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="finalite3" class="text-dark"> Sous-finalité 3</label>
          <select class="form-control" id="finalite3" name="finalite3_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="finalite4" class="text-dark"> Sous-finalité 4</label>
          <select class="form-control" id="finalite4" name="finalite4_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="finalite5" class="text-dark"> Sous-finalité 5</label>
          <select class="form-control" id="finalite5" name="finalite5_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
      </div>






<!-- CATEGORIES DE DONNEES PERSONNELLES -->
    <div class="section-title">
      <h2>Catégories de données personnelles concernées, traitées & enregistrées</h2>
    </div>
  
  <p><strong>Détails des données traitées & Origine : "Quelles données personnelles traitez-vous ?"</strong></p>

  
         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Etat civil*</strong> (identité, données d'identifcation, images...): </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Etat1" name="etat_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Etat1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Etat2" name="etat_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Etat2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte1" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte1" name="collecte1_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree1" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree1" name="duree1_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Numémro de Sécurité Sociale* </strong> ( ou NIR) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="NSS1" name="nss_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="NSS1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="NSS2" name="nss_A" value="Non" required>
            <label class="custom-control-label text-dark" for="NSS2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte2" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte2" name="collecte2_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree2" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree2" name="duree2_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Vie personnelles* </strong> ( habitudes de vie, situation familiale...) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Viepersonnelle1" name="viepers_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Viepersonnelle1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Viepersonnelle2" name="viepers_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Viepersonnelle2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte3" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte3" name="collecte3_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree3" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree3" name="duree3_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Informations d'ordre économique et financier* </strong> ( revenus, situation financière, situation fiscale...) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Economique1" name="economique_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Economique1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Economique2" name="economique_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Economique2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Service" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Nom" name="collecte4_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree4" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree4" name="duree4_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données de connexion* </strong> (adresse IP, logs...) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Connexion1" name="connexion_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Connexion1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Connexion2" name="connexion_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Connexion2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte5" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte5" name="collecte5_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree5" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree5" name="duree5_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données de localisations* </strong> (déplacements, données GPS, GSM...) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Localisation1" name="localisation_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Localisation1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Localisation2" name="localisation_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Localisation2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte6" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte6" name="collecte6_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree6" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree6" name="duree6_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>



<!-- CATEGORIES DE DONNEES SENSIBLES -->
    <div class="section-title">
      <h2>Données sensibles concernées, traitées & enregistrées</h2>
    </div>
  
  <p><strong>Détails des données sensibles traitées & Origine: "Quelles données sensibles traitez-vous ? :"</strong></p>

  
         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant l'origine raciale et/ou ethnique*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Origine1" name="origine_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Origine1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Origine2" name="origine_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Origine2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte7" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte7" name="collecte7_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree7" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree7" name="duree7_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>



         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant l'opinion politiques*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Politique1" name="politique_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Politique1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Politique2" name="politique_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Politique2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte8" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte8" name="collecte8_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree8" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree8" name="duree8_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>


         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant les convictions religieuses ou philosophiques*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Conviction1" name="conviction_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Conviction1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Conviction2" name="conviction_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Conviction2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte9" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte9" name="collecte9_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree9" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree9" name="duree9_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant l'appartenance syndicale*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Syndicale1" name="syndicale_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Syndicale1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Syndicale2" name="syndicale_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Syndicale2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte10" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte10" name="collecte10_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree10" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree10" name="duree10_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant du medicales*</strong> ( génétiques, biométriques...) : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Medicale1" name="medicale_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Medicale1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Medicale2" name="medicale_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Medicale2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte11" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte11" name="collecte11_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree11" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree11" name="duree11_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
  </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant l'orientation sexuelle et/ou vie sexuelle*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Orientation1" name="orientation_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Orientation1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Orientation2" name="orientation_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Orientation2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte12" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte12" name="collecte12_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree12" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree12" name="duree12_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
      </div>

         <div class="form-group row">
          <label class="md-3 text-dark" for="type"><strong>Données révélant d'infractions et/ou condamnations pénales*</strong> : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Infraction1" name="infraction_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Infraction1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Infraction2" name="infraction_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Infraction2">Non</label>
          </div>   
          <div class="invalid-feedback"> 
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">        
        <div class="col-md-4 mb-3">
          <label for="Collecte13" class="text-dark">Comment avez-vous collecté ces données?*</label>
          <input type="text" class="form-control" id="Collecte13" name="collecte13_A" placeholder="Explication" required>
          <div class="invalid-feedback">
           Le champ Nom est obligatoire
          </div>
        </div>

        <div class="form-group col-md-4">
           <label for="Duree13" class="text-dark"> Durée de conservation*</label>
          <select class="form-control" id="Duree13" name="duree13_A" required>
          <?php
          $req = $db->query("SELECT * FROM durée");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Annee'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
      </div>

<!-- ECHANGES DE DONNEES -->

    <div class="section-title">
      <h2>Echanges de données</h2>
    </div>

      <div class="form-group row">
          <label class="md-3 text-dark" for="type"> Avec d'autres services au sein de l'oganisme déclarant ?* :</label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange11" name="echange1_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Echange11">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange12" name="echange1_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Echange12">Non</label>
          </div>   

          <div class="invalid-feedback">
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">
          <label class="md-3 text-dark" for="type"> Avec des organismes extérieurs au déclarant ?* :</label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange21" name="echange2_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Echange21">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange22" name="echange2_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Echange22">Non</label>
          </div>   
          <div class="invalid-feedback">
            Le type est obligatoire
          </div>          
        </div>

      <div class="form-group row">
          <label class="md-3 text-dark" for="type"> Avec des sous-traitants ? Hébergeur, prestataire et/ou maintenance informatique* :</label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange31" name="echange3_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="Echange31">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="Echange32" name="echange3_A" value="Non" required>
            <label class="custom-control-label text-dark" for="Echange32">Non</label>
          </div>   
          <div class="invalid-feedback">
            Le type est obligatoire
          </div>          
        </div>

<!-- DESTINATAIRE -->

    <div class="section-title">
      <h2>Destinataires</h2>
    </div>

      <div class="form-group row">
        <div class="form-group col-md-4">
           <label for="Destinataire1" class="text-dark"> Destinataire 1*</label>
          <select class="form-control" id="Destinataire1" name="destinataire1_A" required>
          <?php
          $req = $db->query("SELECT * FROM destinataire");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Destinataire'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Destinataire2" class="text-dark"> Destinataire 2</label>
          <select class="form-control" id="Destinataire2" name="destinataire2_A">
          <?php
          $req = $db->query("SELECT * FROM destinataire");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Destinataire'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Destinataire3" class="text-dark"> Destinataire 3</label>
          <select class="form-control" id="Destinataire3" name="destinataire3_A">
          <?php
          $req = $db->query("SELECT * FROM destinataire");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Destinataire'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Destinataire4" class="text-dark"> Destinataire 4</label>
          <select class="form-control" id="Destinataire4" name="destinataire4_A">
          <?php
          $req = $db->query("SELECT * FROM destinataire");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Destinataire'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
      </div>

<!-- TRANSFERT HORS UE -->

     <div class="section-title">
      <h2>Transfert hors UE</h2>
     </div>

      <div class="form-group row">
          <label class="md-3 text-dark" for="type"> Transfert hors UE* : </label>
          
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="HorsUE1" name="horsue_A" value="Oui" required>
            <label class="custom-control-label text-dark" for="HorsUE1">Oui</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="HorsUE2" name="horsue_A" value="Non" required>
            <label class="custom-control-label text-dark" for="HorsUE2">Non</label>
          </div>   
          <div class="invalid-feedback">
            Le type est obligatoire
          </div>          
        </div>

    <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="DestinataireHUE1" class="text-dark"> Destinataire Hors UE 1</label>
          <input type="text" class="form-control" id="DestinataireHUE1" name="destinatairehue1_A" placeholder="Nom de l'Organisme">        
        </div>
        <div class="col-md-4 mb-3">
          <label for="Pays1" class="text-dark"> Pays</label>
          <input type="text" class="form-control" id="Pays1" name="pays1_A" placeholder="Pays">        
        </div>
       <div class="form-group col-md-4">
           <label for="Garantie1" class="text-dark"> Type de garanties</label>
              
          <select class="form-control" id="Garantie1" name="garantie1_A">
          <?php
          $req = $db->query("SELECT * FROM garantie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Garantie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>      
      </div>

    <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="DestinataireHUE2" class="text-dark"> Destinataire Hors UE 2</label>
          <input type="text" class="form-control" id="DestinataireHUE2" name="destinatairehue2_A" placeholder="Nom de l'Organisme" >   
        </div>
        <div class="col-md-4 mb-3">
          <label for="Pays2" class="text-dark"> Pays</label>
          <input type="text" class="form-control" id="Pays2" name="pays2_A" placeholder="Pays" >        
        </div>
       <div class="form-group col-md-4">
           <label for="Garantie2" class="text-dark"> Type de garanties</label>
          <select class="form-control" id="Garantie2" name="garantie2_A">
          <?php
          $req = $db->query("SELECT * FROM garantie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Garantie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>       </div>      
      </div>

    <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="DestinataireHUE3" class="text-dark"> Destinataire Hors UE 3</label>
          <input type="text" class="form-control" id="DestinataireHUE3" name="destinatairehue3_A" placeholder="Nom de l'Organisme" > 
        </div>
        <div class="col-md-4 mb-3">
          <label for="Pays3" class="text-dark"> Pays</label>
          <input type="text" class="form-control" id="Pays3" name="pays3_A" placeholder="Pays" >
        </div>
       <div class="form-group col-md-4">
           <label for="Garantie3" class="text-dark"> Type de garanties</label>
          <select class="form-control" id="Garantie3" name="garantie3_A">
          <?php
          $req = $db->query("SELECT * FROM garantie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Garantie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>      
      </div>

    <div class="form-group row">
        <div class="col-md-4 mb-3">
          <label for="DestinataireHUE4" class="text-dark"> Destinataire Hors UE 4</label>
          <input type="text" class="form-control" id="DestinataireHUE4" name="destinatairehue4_A" placeholder="Nom de l'Organismes" >     
        </div>
        <div class="col-md-4 mb-3">
          <label for="Pays4" class="text-dark"> Pays</label>
          <input type="text" class="form-control" id="Pays4" name="pays4_A" placeholder="Pays" >       
        </div>
       <div class="form-group col-md-4">
           <label for="Garantie4" class="text-dark"> Type de garanties</label>
          <select class="form-control" id="Garantie4" name="garantie4_A">
          <?php
          $req = $db->query("SELECT * FROM garantie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Garantie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>      
      </div>


<!-- MESURE DE SECURITE -->

      <div class="section-title">
      <h2>Mesure de sécurité</h2>
     </div>

      <div class="form-group row">
        <div class="form-group col-md-4">
           <label for="Securite1" class="text-dark"> Mesure de sécurité 1*</label>
          <select class="form-control" id="Securite1" name="securite1_A" required>
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Securite2" class="text-dark"> Mesure de sécurité 2</label>
          <select class="form-control" id="Securite2" name="securite2_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Securite3" class="text-dark"> Mesure de sécurité 3</label>
          <select class="form-control" id="Securite3" name="securite3_A">
          <?php
          $req = $db->query("SELECT * FROM finalite");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Finalite'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
      </div>

      <div class="section-title">
      <h2>Technologie particulière utilisée</h2>
     </div>

      <div class="form-group row">
        <div class="form-group col-md-4">
           <label for="Technologie1" class="text-dark"> Technologie particulière utilisée 1</label>
          <select class="form-control" id="Technologie1" name="technologie1_A">
          <?php
          $req = $db->query("SELECT * FROM technologie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Technologie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
       <div class="form-group col-md-4">
           <label for="Technologie2" class="text-dark"> Technologie particulière utilisée 2</label>
          <select class="form-control" id="Technologie2" name="technologie2_A">
          <?php
          $req = $db->query("SELECT * FROM technologie");
                  while ($donnees = $req->fetch())
                  {
                      $nom = $donnees['Nom_Technologie'];
                      ?>
                  <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
                      <?php
                  }
                  ?>
          </select>
       </div>
        <div class="col-md-4 mb-3">
          <label for="Autre" class="text-dark"> Autre ( précisez )</label>
          <input type="text" class="form-control" id="Autre" name="autre_A" placeholder="Votre technologie" >        
        </div>
      </div>      

      
        <div class="form">         
          <button class="btn btn-primary" name="ajouter" value="Ajouter" type="submit">Envoyer</button>
        </div>
      </form>

  </div>


</main><!-- Fin #main -->


<?php include('footer.php'); ?>
