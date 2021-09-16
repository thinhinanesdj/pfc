<!DOCTYPE html>
<html>
<head>
  <title>nav</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #CBA4CB;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.<?php  ?>">Emac</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lescart.php">Maquillage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lescart.php">Corps et Bain</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cheveux
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        <li class="nav-item">
         
        </li>
      </ul>
      <form class="d-flex">


         
        <a href="signin.php" class="btn" style="background-color: #EED6EE;  width: 120px;
     padding: 5px; border-radius: 25px;"  >Se connecter</a>
        <a href="inscription.php" class="btn" style="background-color: #EED6EE; width: 111px;
     padding: 4px; margin-left: 2%; border-radius: 25px;" >S'inscrire</a>
         
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>