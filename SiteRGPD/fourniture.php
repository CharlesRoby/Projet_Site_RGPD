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
		  

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- Fin Header -->

  <main id="main">





  <div class="container">
   <br />
   <h3 align="center">Vente de fournitures de la mairie de Périgueux</h3>
   <br />
   <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Menu</span>
      <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>
     </div>
     <div id="navbar-cart" class="navbar">
      <ul class="nav navbar-nav">
       <li>
        <a id="cart-popover" class="btn" data-placement="bottom" title="Panier ">
         <span class="glyphicon glyphicon-shopping-cart"></span>
         <span class="badge"></span>
         <span class="total_price">€ 0.00</span>
        </a>
       </li>
      </ul>
     </div>
    </div>
   </nav>
   
   <div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right">
     <a href="Payement.php" class="btn btn-primary" id="check_out_cart">
      <span class="glyphicon glyphicon-shopping-cart"></span> Acheter
     </a>
     <a href="#" class="btn btn-default" id="clear_cart">
      <span class="glyphicon glyphicon-trash"></span> Tout Supprimer
     </a>
    </div>
   </div>

   <div id="display_item" class="row">

   </div>

    
    <br />
    <br />
   </div>
  </div>
  </main><!-- Fin #main -->
 </body>
</html>

<script>  
$(document).ready(function(){

 load_product();

 load_cart_data();

 function load_product()
 {
  $.ajax({
   url:"lesFournitures.php",
   method:"POST",
   success:function(data)
   {
    $('#display_item').html(data);
   }
  })
 }

 function load_cart_data()
 {
  $.ajax({
   url:"commande.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    $('#cart_details').html(data.cart_details);
    $('.total_price').text(data.total_price);
    $('.badge').text(data.total_item);
   }
  })
 }

 $('#cart-popover').popover({
  html : true,
  container : 'body',
  content:function(){
   return $('#popover_content_wrapper').html();
  }
 });

 $(document).on('click', '.add_to_cart', function(){
  var product_id = $(this).attr('id');
  var product_name = $('#name'+product_id+'').val();
  var product_price = $('#price'+product_id+'').val();
  var product_quantity = $('#quantity'+product_id).val();
  var action = 'add';
  if(product_quantity > 0)
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
    success:function(data)
    {
     load_cart_data();
     alert("L'article a été ajouté au panier");
    }
   })
  }
  else
  {
   alert("Veuillez entrer le nombre de quantité");
  }
 });

 $(document).on('click', '.delete', function(){
  var product_id = $(this).attr('id');
  var action = 'remove';
  if(confirm("Voulez-vous vraiment supprimer ce produit?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{product_id:product_id, action:action},
    success:function(data)
    {
     load_cart_data();
     $('#cart-popover').popover('hide');
     alert("L'article a été retiré du panier");
    }
   })
  }
  else
  {
   return false;
  }
 });

 $(document).on('click', '#clear_cart', function(){
  var action = 'empty';
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function()
   {
    load_cart_data();
    $('#cart-popover').popover('hide');
    alert("Votre panier a été vidé");
   }
  })
 });
    
});

</script>

















