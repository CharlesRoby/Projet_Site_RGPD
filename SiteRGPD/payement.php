<?php

session_start();

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th>Nom du produit</th>  
            <th>Quantité</th>  
            <th>Prix</th>  
            <th>Total</th>  
        </tr>
';

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr>
   <td>'.$values["product_name"].'</td>
   <td>'.$values["product_quantity"].'</td>
   <td align="right">€ '.$values["product_price"].'</td>
   <td align="right">€ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
  </tr>
  ';
  $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

  $item_details .= $values["product_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
 $order_details .= '
 <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">€ '.number_format($total_price, 2).'</td>
    </tr>
 ';
}
$order_details .= '</table>';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Site RGPD</title>

  <!-- CSS  -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Fourniture -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .popover
  {
      width: 100%;
      max-width: 800px;
  }
  </style>
 </head>

</head>

<body>
  
  <!-- ======= Bouton pour version mobile ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Formulaire RGPD</a></h1>
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
  </header><!-- Fin Header -->

  <main id="main">

  <div class="container">
   <br />
   <h3 align="center">Paiement de votre commande </h3>
   <br />
   <span id="message"></span>
   <div class="panel panel-default">
    <div class="panel-heading">fiche de paiement</div>
    <div class="panel-body">
     <form method="post" id="order_process_form" action="payment.php">
      <div class="row">
       <div class="col-md-8" style="border-right:1px solid #ddd;">
        <h4 align="center">Détails du client</h4>
        <div class="form-group">
         <label><b>Nom du titulaire <span class="text-danger">*</span></b></label>
               <input type="text" name="customer_nom" id="customer_nom" class="form-control" value="" />
               <span id="error_customer_nom" class="text-danger"></span>
           </div>
           <div class="form-group">
            <label><b>Adresse mail <span class="text-danger">*</span></b></label>
            <input type="text" name="email_address" id="email_address" class="form-control" value="" />
            <span id="error_email_address" class="text-danger"></span>
           </div>
           <div class="form-group">
            <label><b>Addresse <span class="text-danger">*</span></b></label>
            <textarea name="customer_address" id="customer_address" class="form-control"></textarea>
            <span id="error_customer_address" class="text-danger"></span>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>Ville <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_ville" id="customer_ville" class="form-control" />
              <span id="error_customer_ville" class="text-danger"></span>
             </div>
            </div>
           </div>
           <div class="row">
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>Pays <span class="text-danger">*</span></b></label>
              <input type="text" name="customer_Pays" id="customer_Pays" class="form-control" />
              <span id="error_customer_Pays" class="text-danger"></span>
             </div>
            </div>
            <div class="col-sm-6">
             <div class="form-group">
              <label><b>Région </b></label>
              <input type="text" name="customer_reg" id="customer_reg" class="form-control" value="" />
             </div>
            </div>
           </div>
           <hr />
           <h4 align="center">détails du paiement </h4>
           <div class="form-group">
                  <label>Numéro de carte <span class="text-danger">*</span></label>
                  <input type="text" name="card_holder_number" id="card_holder_number" class="form-control" placeholder="1234 5678 9012 3456" maxlength="20" onkeypress="" />
                  <span id="error_card_number" class="text-danger"></span>
              </div>
              <div class="form-group">
                 <div class="row">
                  <div class="col-md-4">
                   <label>Mois d'expiration</label>
                   <input type="text" name="card_expiry_mois" id="card_expiry_mois" class="form-control" placeholder="MM" maxlength="2" onkeypress="return only_number(event);" />
                   <span id="error_card_expiry_mois" class="text-danger"></span>
                  </div>
                  <div class="col-md-4">
                   <label>Année d'expiration</label>
                   <input type="text" name="card_expiry_year" id="card_expiry_year" class="form-control" placeholder="YYYY" maxlength="4" onkeypress="return only_number(event);" />
                   <span id="error_card_expiry_year" class="text-danger"></span>
                  </div>
                  <div class="col-md-4">
                   <label>CVC</label>
                   <input type="text" name="card_cvc" id="card_cvc" class="form-control" placeholder="123" maxlength="4" onkeypress="return only_number(event);" />
                   <span id="error_card_cvc" class="text-danger"></span>
                  </div>
                 </div>
              </div>
              <br />
        <div align="center">
         <input type="hidden" name="total_amount" value="<?php echo $total_price; ?>" />
         <input type="hidden" name="currency_code" value="EUR" />
         <input type="hidden" name="item_details" value="<?php echo $item_details; ?>" />
         <input type="button" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Payer" />
        </div>
        <br />
       </div>
       <div class="col-md-4">
        <h4 align="center">Details de la Commande</h4>
        <?php
        echo $order_details;
        ?>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>

</main><!-- Fin #main -->


<?php include('footer.php'); ?>