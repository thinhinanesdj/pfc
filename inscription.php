<!DOCTYPE html>
<html>
<head>
	<title>inscrit toi</title>
	<link rel="stylesheet" type="text/css" href="css/ss.css">
	
</head>
<body>
	<?php 
	include("navbar.php");
	include("header.php");

	 ?>
	    <div class="center" style="margin-top: 5%;">
      
      <form action="inscription/trinscription.php" method="POST">
      	<h1>Inscrit Toi</h1>
        <div class="txt_field">
          <input type="text" name="nome" required>
          <span></span>
          <label>nom</label>
        </div>
        <div class="txt_field">
          <input type="text" name="prenome" required>
          <span></span>
          <label>prenom</label>
        </div>
        <div class="txt_field">
          <input type="text"  name="emaile" required>
          <span></span>
          <label>e-mail</label>
        </div>
        <div class="txt_field">
          
          <input type="password" name="mote" required>
          <span></span>
          <label>mot de passe</label>
        </div>
        
        <input type="submit" value="Signe up">
        
      </form>
    </div>
    <footer style="margin-top: 50%">
      <?php
      include('footer.php'); 

       ?>
    </footer>

</body>
</html>