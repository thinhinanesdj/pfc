<!DOCTYPE html>
<html>
<head>
	<title>Emac</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="css/c.css" rel="stylesheet">
  
</head>
<body>
<?php  
include("navbar.php");
include("header.php");

 ?>
 <!-- le header -->
   <header>
    
    
    
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="image/téléchargement (2).jpg">
       
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="image/téléchargement.jpg">

      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="image/images (5).jpg">

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
   </header>
   <!-- la section -->
   <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      
      <div class="card">
        <img src="image/images (4).jpg">
       
        <div class="card-header">
          <h4 class="title">Maquilliage</h4>
          <h4 class="price">199$</h4>
        </div>
        <div class="card-body">
          <p>maquiage pour femme</p>
        </div>
      </div>
      
      <div class="card">
        <img src="image/gel.jpg">
        <div class="card-header">
          <h4 class="title">gel douche</h4>
          <h4 class="price">69$</h4>
        </div>
        <div class="card-body">
          <p>gel douche pour femme</p>
        </div>
      </div>
      
      <div class="card">
        <img src="image/n.jpg">
        <div class="card-header">

          <h4 class="title">shompoing</h4>
          <h4 class="price">39$</h4>
      </div>
        
        <div class="card-body">
          <p>shompoing pour femme</p>
        </div>
        </div>
      </div>
      
     </div>
    <!-- Fin de toutes les cartes -->
    
    <!-- Video de presentation -->
    <div class="video">
      <iframe src="image/video.mp4" allowfullscreen></iframe>
    </div>
    <!-- Fin de la video de presentation -->
  </section>
  <?php 
   include("footer.php");
   ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  
</body>
</html>