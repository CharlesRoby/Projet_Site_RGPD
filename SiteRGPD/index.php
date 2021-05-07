<?php include('header.php'); 

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

  $manager = new FormulaireManager($db);



    // On récupère la liste des Formulaire et on met les résultats dans un tableau pour en faire des registres
    $nombre = $manager->count();
    

?>

    <!-- ======= About Section ======= -->
    <section id="a-propos" class="about">
      <div class="container">

        <div class="section-title">
          <h2>A propos</h2>
          <p>Projet appartenant a la Direction des Systèmes d'Information et du Numérique (DSIN). Ce service est structuré en plusieurs cellules, spécialisées chacune dans un domaine des technologies de l’information et de la communication. Ces spécificités permettent une réduction importante des coûts de fonctionnement. Les missions principales du service sont la gestion et la maintenance du parc informatique, des tableaux interactifs des écoles, des <strong>logiciels métiers</strong>, de la vidéo surveillance, des alarmes et du centre de reprographie. Le service élabore également un schéma directeur informatique qui permet de mettre en place et de suivre les différents projets des services. Les formations informatiques des agents municipaux sont aussi gérées par ce service. </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Sur ce site vous pourrez :</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Créer </strong> votre registre RGPD avec le formulaire</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Modifier </strong> votre registre RGPD</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Consulter </strong> votre formulaire RGPD</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Supprimer </strong> votre registre RGPD</li>
                </ul>
              </div>
            </div>
            </br>
            <p>
              En cas de problème, vous pourrez dans la <a href="#contact">section contact</a>, joindre un technicien de maintenance par mail, téléphone ou fax.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="information" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Information</h2>
          <p>Le registre vous permet de connaître l'ensemble des informations qu'une entreprise déclare, dans notre cas en respectant la loi RGPD qui encadre le traitement des données personnelles sur le territoire de l'Union européenne. Ce nouveau règlement européen s'inscrit dans la continuité de la Loi française Informatique et Libertés de 1978 et renforce le contrôle par les citoyens de l'utilisation qui peut être faite des données les concernant. </p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up"> <?php echo $nombre ?> </span>
              <p><strong>Registres </strong> RGPD</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">1</span>
              <p><strong>Developpeur </strong> sur le projet</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Horaire de disponibilité du service : 8h 30 - 17h</p>
          <p>(Astreinte indisponible depuis 2021)</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Adresse :</h4>
                <p>Square Jean-Jaurès, 24000 Périgueux </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Mail:</h4>
                <p>frederic.trolonge@perigueux.fr </p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Tel:</h4>
                <p>05 53 02 82 00 </p>
              </div>

              <div class="phone">
                <i class="icofont-fax"></i>
                <h4>Fax:</h4>
                <p>05 53 02 80 17 </p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Votre Nom</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Mail</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Veuillez saisir un mail valide" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractères de sujet" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Chargement</div>
                <div class="error-message">Erreur</div>
                <div class="sent-message">Votre message a été envoyé. Je vous remercie!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('footer.php'); ?>
