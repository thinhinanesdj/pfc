<?php 
try {
	$productdb=new PDO("mysql:host=localhost;dbname=productdb","root","");
	// echo "connexion a la bdd faite avec succés";
	
} catch (Exception $e) {
	die("echec de connexion".$e->getMessage());
}



 ?>
