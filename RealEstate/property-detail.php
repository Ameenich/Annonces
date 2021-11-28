<?php
include_once "connection.php";

if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}

$query = "select * from properties, agent where properties.property_id = '$pageid' and properties.agent_id = agent.agent_id";
$result = mysqli_query($con, $query);

if(!$result){
	echo "Error Found!!!";
}

while($property_result = mysqli_fetch_assoc($result)){
			$property_title = $property_result['property_title'];
			$property_details = $property_result['property_details'];
			$delivery_type = $property_result['delivery_type'];
			$availablility = $property_result['availablility'];
			$price = $property_result['price'];
			$property_address = $property_result['property_address'];
			$property_img = $property_result['property_img'];
			$bed_room = $property_result['bed_room'];
			$liv_room = $property_result['liv_room'];
			$parking = $property_result['parking'];
			$kitchen = $property_result['kitchen'];
			$utility = $property_result['utility'];
			$property_type = $property_result['property_type'];
			$floor_space = $property_result['floor_space'];

			$agent_name = $property_result['agent_name'];
			$agent_address = $property_result['agent_address'];
			$agent_contact = $property_result['agent_contact'];
			$agent_email = $property_result['agent_email'];
}
?>

<?php
$imgquery = "select * from property_image where property_id = '$pageid'";
$imgresult = mysqli_query($con, $imgquery);

if(!$imgresult){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Details de l'annonce - Real Estate Management System</title>
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
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->

<!-- #Header Starts -->
</div><!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Details de l'annonce</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">


<div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/leLObtEqZ3YEHN47Bm" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
<div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/880HmjvmI6YhEBOCcK" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
<div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/BKME3SVwhpjiz00KeK" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
<div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/e8ik35i8LaO3BqRwY6" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
<div style="width:100%;height:0;padding-bottom:56%;position:relative;"><iframe src="https://giphy.com/embed/H0OK0o53J0NARAJOQj" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
</div>

<div class="col-lg-9 col-sm-8 ">

<h2><?php echo $property_title; ?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <div class="carousel-inner">
      	<!-- Item 0 -->
        <div class="item active">
          <img src="images/properties/1.jpg" class="properties" alt="properties" />
        </div>
        <!-- #Item 0 -->

        <!-- Item 1 -->
        <?php
			while($imageresult = mysqli_fetch_assoc($imgresult)){
				$image = $imageresult['property_images'];

		?>
        <div class="item">
          <img src="<?php echo $image; ?>" class="properties" alt="properties" />
        </div>
        <?php } ?>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>




  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Details et Informations</h4>
  <p><?php echo $property_details; ?></p>

  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Adresse</h4>
<div class="well"><?php echo $property_address; ?></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<div class="well">
<b> Détails de Propriètaire:</b> <br>
<span class="glyphicon glyphicon-user"></span> <?php echo $agent_name ?><br>
<span class="glyphicon glyphicon-map-marker"></span> <?php echo $agent_address; ?><br>
<span class="glyphicon glyphicon-phone-alt"></span> <?php echo $agent_contact; ?><br>
<span class="glyphicon glyphicon-envelope"></span> <?php echo $agent_email; ?><br>
</div>

<div class="well"><p class="price"> $ <?php echo $price; ?></p></div>

  <p class="area"><div class="well"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $property_address; ?> </div></p>

</div>

    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Disponibilité - <?php if($availablility == 0){echo "Disponible";} else {echo "Non Disponible";} ?></b></div>
    <div class="well"><span class="glyphicon glyphicon-home"></span> &nbsp; <b>Type de Propriété - <?php echo $property_type; ?></b></div>

    <div class="listing-detail">
    <div class="well">
    <b>Chambres: &nbsp;</b>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $bed_room; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $liv_room; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $parking; ?></span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $kitchen; ?></span>
    </div>
    </div>

    <div class="well"><span class="glyphicon glyphicon-check"></span> &nbsp; <b>Surface - <?php echo $floor_space; ?></b></div>

</div>
<div class="col-lg-12 col-sm-6 ">

</div>
  </div>
</div>
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
    


</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:26 GMT -->
</html>
