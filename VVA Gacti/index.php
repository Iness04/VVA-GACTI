<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    
    
    <title>Accueil</title>
</head>
<body>
  <?php
    include('session_connexion.php');
   ?>
<!-- Barre avec le bouton connexion/déconnexion -->
          
        <div class="connexion">
             <?php
                if (!isset($_SESSION['pseudo'])) {
                
                ?>
              <button type="button" class="btn">
                 
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <a href="#" onclick="openPopup()">Connexion</a>

              </button>
              <?php 
              }else{ 
                echo "<p class='nomsession'>".$_SESSION['pseudo']."</p>";?>
              <button type="button" class="btn">
                 
                
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                     <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                     <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                 </svg>   
                <a href="deconnexion.php">Déconnexion</a>
              </button>
               <?php }?> 
        </div>
     
<!-- Caroussel vidéos en haut de page -->
    <div id="carouselslide"  class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselslide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselslide" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselslide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <video autoplay muted loop class="d-block w-100" id="autovid">
                <source src="video/carousel_slide1.mp4" type="video/mp4"></video>
            <div class="carousel-caption">
              <h5>GACTI VVA</h5>
              <p>L'application qui facilite l'organisation de vos vacances...</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="8000">
            <video autoplay muted loop class="d-block w-100" id="autovid">
                <source src="video/carousel_slide2.mp4" type="video/mp4"></video>
                <div class="carousel-caption">
              <h5>Les villages vacances</h5>
              <p>Nos villages vacances nichés dans des lieux à couper le souffle</p>
            </div>
          </div>
          <div class="carousel-item">
            <video autoplay muted loop class="d-block w-100" id="autovid">
                <source src="video/carousel_slide3.mp4" type="video/mp4"></video>
                
            <div class="carousel-caption">
              <h5>Un choix varié d'activités</h5>
              <p>Des activités encadrées et pour tous les goûts</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselslide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselslide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
   <?php include("aff_pageprincipale.php");?>
  
</body>
</html>