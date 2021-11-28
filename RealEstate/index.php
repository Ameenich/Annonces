<?php
include_once "connection.php";

$query = "select * from properties";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Real Estate Management System</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='assets/google_analytics_auto.js'></script></head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" style="background-color: #111">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
             <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Accueil</a></li>
               <li><a href="list-properties.php">Annonces Immobilières</a></li>
               <li><a href="Ajout-annonce/index.php">Ajouter une annonce</a></li>
               <li><a href="contact.html">Contactez nous</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>

<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Appartement 2 chambres et 1 salle à manger en vente</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Nice</p>
              <p>Le bien être est notre deuxieme nom ! </p>
              <cite>$20,000,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Appartement 2 chambres et 1 salle à manger en vente</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Marseille</p>
              <p>Trouvez votre paradis sur terre ! </p>
              <cite>$20,000,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Appartement 2 chambres et 1 salle à manger en vente</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Cannes</p>
              <p>Le confort et le bien être nous représentent ! </p>
              <cite>$20,000,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Appartement 2 chambres et 1 salle à manger en vente</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Nantes</p>
              <p>Trouvez votre paradis sur terre ! </p>
              <cite>$20,000,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Appartement 2 chambres et 1 salle à manger en vente</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Paris, la défense</p>
              <p>La joie de vivre et le confort c'est nous ! </p>
              <cite>$20,000,000</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>


<!-- banner
<div class="banner-search">
  <div class="container">
   
    <h3>Acheter, Vendre & Allouer</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
          <input name="search" type="text" class="form-control" placeholder="Checher Propriétés">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="delivery_type" class="form-control">
                <option value="Rent">Allocation</option>
                <option value="Sale">Vente</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
             <select name="search_price" class="form-control">
                <option>Prix</option>
                <option value="1">€5000 - €50,000</option>
                <option value="2">€50,000 - €100,000</option>
                <option value="3">€100,000 - €200,000</option>
                <option value="4">€200,000 - plus</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
           <select name="property_type" class="form-control">
                <option>Type de proprieté</option>
                <option value="Apartment">Apartement</option>
                <option value="Building">Villa</option>
                <option value="Office-Space">Bureau</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Trouvez</button>
              </form>
              </div>
          </div>


        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                  </div>
      </div>
    </div>
  </div>
</div>
banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="pull-right viewall">Voir toutes les annonces</a>
    <h2>Tendances de la semaine ! </h2>
    <div id="owl-example" class="owl-carousel">



      <?php
	  	while($property_result = mysqli_fetch_assoc($result)){
			$id = $property_result['property_id'];
			$property_title = $property_result['property_title'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];

	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_img; ?>" class="img-responsive" alt="properties">
          <?php if($availablility == 0){ ?><div class="status sold">disponible</div> <?php } else { ?>
          <div class="status new">Non disponible</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $id; ?>"><?php echo $property_title;  ?></a></h4>
        <p class="price">Prix: $<?php echo $price; ?></p>
        <p class="price">Type de propiété: <?php echo $delivery_type; ?></p>
        <p class="price">Caractéristiques: <?php echo $utility; ?></p>
        <div class="listing-detail">
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
        </div>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $id; ?>">Voir details</a>
      </div>

      <?php } ?>

    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3>À propos de nous</h3>
        <p>Nous sommes présents dans toute la France. Quel que soit l’endroit où vous recherchez nous avons ce qu’il vous faut. Parcourez la liste des régions et départements et profitez de toutes les annonces de maisons et appartements à vendre que nous vous offrons parmi toutes les villes de ces derniers.
        </p>
      </div>

    </div>
  </div>
</div>


<div style="background-color: #929c9d84">

<div class="container">

<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Accueil</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contactez nous</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Restez notifiés ! </p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Entrez votre adresse mail" class="form-control">
                                <button class="btn btn-success" type="button">Notifiez moi!</button></form>
            </div>

            <div class="col-lg-3 col-sm-3">
                    <h4>Suivez nous</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contactez nous </h4>
                    <p><b>ANNONCES IMMOB</b><br>
<span class="glyphicon glyphicon-map-marker"></span>Paris<br>
<span class="glyphicon glyphicon-envelope"></span>www.annoncesimmob.com<br>
<span class="glyphicon glyphicon-earphone"></span> +33 55 55 55 55 </p>
            </div>
        </div>
<p class="copyright">Copyright 2021. All rights reserved. </p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
</html>
