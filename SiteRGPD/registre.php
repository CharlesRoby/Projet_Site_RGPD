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

?>

<main id="main">

<?php

  $registrer=$manager->get($_GET['ref']);
  if (htmlspecialchars($_GET['ref']))
    {
      $registre=  
      '

    <div class="section-title">
      <h2>Fiche Registre n°'.$registrer->getRef().'</h2>
    </div>  

        <div class="form-group">
          <label for="Nom_A" class="text-Dark" >Description du traitement / Nom du logiciel : '.$registrer->getNom().' </label>   
        </div>

</br>


        <div class="form-group">
          <label for="_A" class="text-Dark" >Auteur du formulaire : '.$registrer->getAuteur().' </label>   
        </div>

</br>

    <div class="section-title">
      <h2>Acteurs</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Responsable du traitement : '.$registrer->getResponsable1().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Responsable du traitement : Bernadette Albert DRH </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Représentant (sous-traitant) : '.$registrer->getRepresentant().' </label>   
        </div>

</br>


        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Responsable(s) conjoint(s) : '.$registrer->getResponsable2().' </label>   
        </div>

</br>


    <div class="section-title">
      <h2>Fondement juridique du traitement</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Licéité du traitement : '.$registrer->getLiceite().' </label>   
        </div>

</br>

    <div class="section-title">
      <h2>Finalité(s) du traitement effectué</h2>
    </div>        

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Finalité Principale : '.$registrer->getFinaliteP().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation: "Sous-finalité 1 : '.$registrer->getFinalite1().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation: "Sous-finalité 2 : '.$registrer->getFinalite2().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation: "Sous-finalité 3 : '.$registrer->getFinalite3().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation: "Sous-finalité 4 : '.$registrer->getFinalite4().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation: "Sous-finalité 5 : '.$registrer->getFinalite5().' </label>   
        </div>
        
    <div class="section-title">
      <h2>Catégories de données personnelles concernées, traitées & enregistrées</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Etat civil : '.$registrer->getEtat().' </label>   
        </div>
      
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte1().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree1().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Numémro de Sécurité Sociale : '.$registrer->getNSS().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte2().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree2().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Vie personnelles : '.$registrer->getViepers().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte3().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree3().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Informations de type économique et financier : '.$registrer->getEconomique().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte4().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree4().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données de connexion : '.$registrer->getConnexion().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte5().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree5().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données de localisations : '.$registrer->getLocalisation().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte6().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree6().' </label>   
        </div>

        </br>
        </br>

    <div class="section-title">
      <h2>Données sensibles concernées, traitées & enregistrées</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant des origine raciale et/ou ethnique : '.$registrer->getOrigine().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte7().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree7().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant des opinion politiques : '.$registrer->getPolitique().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte8().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree8().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant les convictions religieuses ou philosophiques : '.$registrer->getConviction().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte9().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree9().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant les appartenances syndicales : '.$registrer->getSyndicale().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte10().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree10().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant du medicales : '.$registrer->getMedicale().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte11().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree11().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant des orientations sexuelles et/ou vie sexuelle : '.$registrer->getOrientation().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte12().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree12().' </label>   
        </div>

        </br>
        </br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Données révélant des infractions et/ou condamnations pénales : '.$registrer->getInfraction().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Explication de la collecte des données : '.$registrer->getCollecte13().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Durée de conservation : '.$registrer->getDuree13().' </label>   
        </div>

        </br>
        </br>

    <div class="section-title">
      <h2>Echanges de données</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Avec des autres services au sein de oganisme déclarant : '.$registrer->getEchange1().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Avec des organismes extérieurs au déclarant : '.$registrer->getEchange2().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Avec des sous-traitants ? Hébergeur, prestataire et/ou maintenance informatique : '.$registrer->getEchange3().' </label>   
        </div>

    <div class="section-title">
      <h2>Destinataires</h2>
    </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire 1 : '.$registrer->getDestinataire1().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire 2 : '.$registrer->getDestinataire2().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire 3 : '.$registrer->getDestinataire3().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire 4 : '.$registrer->getDestinataire4().' </label>   
        </div>

</br>
        
     <div class="section-title">
      <h2>Transfert hors UE</h2>
     </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Transfert hors UE : '.$registrer->getHorsUE().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire Hors UE 1 : '.$registrer->getDestinataireHUE1().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Pays : '.$registrer->getPays1().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Type de garanties : '.$registrer->getGarantie1().' </label>   
        </div>

</br>
</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire Hors UE 2 : '.$registrer->getDestinataireHUE2().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Pays : '.$registrer->getPays2().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Type de garanties : '.$registrer->getGarantie2().' </label>   
        </div>

</br>
</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire Hors UE 3 : '.$registrer->getDestinataireHUE3().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Pays : '.$registrer->getPays3().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Type de garanties : '.$registrer->getGarantie3().' </label>   
        </div>

</br>
</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Destinataire Hors UE 4 : '.$registrer->getDestinataireHUE4().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Pays : '.$registrer->getPays4().' </label>   
        </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Type de garanties : '.$registrer->getGarantie4().' </label>   
        </div>

</br>

      <div class="section-title">
      <h2>Mesure de sécurité</h2>
     </div>



        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Mesure de sécurité 1 '.$registrer->getSecurite1().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Mesure de sécurité 2 '.$registrer->getSecurite2().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Mesure de sécurité 3 '.$registrer->getSecurite3().' </label>   
        </div>

</br>

      <div class="section-title">
      <h2>Technologie particulière utilisée</h2>
     </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Technologie particulière utilisée 1 '.$registrer->getTechnologie1().' </label>   
        </div>
</br>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Technologie particulière utilisée 2 '.$registrer->getTechnologie2().' </label>   
        </div>

</br>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Autre technolgie : '.$registrer->getAutre().' </label>   
        </div>

</br>

      <div class="section-title">
      <h2>Droits des peronnes concernées </h2>
     </div>

        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit d\'accès </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit de rectification </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit d\'éffacement </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit à la portabilité </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit à la limitation </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit du traitement </label>   
        </div>
        <div class="form-group">
          <label for="conservation_A" class="text-Dark" >Droit d\'opposition </label>   
        </div>

  '.'';
  } 
  ?>
    <button id="togg1">Supprimer</button>
    <button id="togg2">Modifier</button>
    <div id="d1">
        <form action="" method="post">

                                  <div class="col-md-4 mb-3">
                                    <label for="nom_A" class="text-dark">mot de passe</label>
                                    <input type="text" class="form-control" name="mdp" placeholder="*******" >
                                  </div>
							        <div class="form">         
							          <button class="btn btn-primary" name="supprimer" value="Accepter" type="submit">Supprimer</button>
							        </div>
                              </form>
                      <?php
                      if (isset($_POST['supprimer'])){
                        if ($manager->getMdp($_POST['mdp'])==TRUE){ 

                      $ref=$_GET['ref'];
                      $manager->delete($ref);
                      header('Location: registres.php');
                    }
                  }
?>
    </div>
    <div id="d2">
              <form action="" method="post">

                                  <div class="col-md-4 mb-3">
                                    <label for="nom_A" class="text-dark">mot de passe</label>
                                    <input type="text" class="form-control" name="mdp" placeholder="*******" >
                                  </div>
							        <div class="form">         
							          <button class="btn btn-primary" name="modifier" value="Accepter" type="submit">Modifier</button>
							        </div>
                              </form>
                      <?php
                      if (isset($_POST['modifier'])){
                        if ($manager->getMdp($_POST['mdp'])==TRUE){ 
                          header('Location: modifier.php?ref='.$_GET['ref'].'');
                        }
                  }
?>
    </div>





<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Registre selectionné</title>
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

  <script>
    let togg1 = document.getElementById("togg1");
    let togg2 = document.getElementById("togg2");
    let d1 = document.getElementById("d1");
    let d2 = document.getElementById("d2");
    togg1.addEventListener("click", () => {
      if(getComputedStyle(d1).display != "block"){
        d1.style.display = "block";
      } else {
        d1.style.display = "none";
      }
    })

    function togg(){
      if(getComputedStyle(d2).display != "block"){
        d2.style.display = "block";
      } else {
        d2.style.display = "none";
      }
    };
    togg2.onclick = togg;
  </script>



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
          <li><a href="registres.php"><i class="bx bx-server"></i> Registre</a></li>
          <li><a href="fourniture.php"><i class="bx bx-box"></i> Fourniture</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->


  <div class="container">
    <div class="section-title">
      <h1>Nom / sigle : Mairie de Périgueux </h1>
    </div>

  <fieldset id="field_result">
    <h3>
      <?php 
      if (isset($registre))
      {
        
        echo $registre;
        unset($registre);
      }
      ?>
    </h3>
  </fieldset>

</div>


</main><!-- End #main -->
  

<?php include('footer.php'); ?>






