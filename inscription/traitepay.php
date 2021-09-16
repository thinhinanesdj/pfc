<?php 
 require('conec.php');
 try {
 	$productdb->exec("INSERT INTO comande (nom,prenom,email,adress,payement ) VALUES('".$_POST['nome']."','".$_POST['prenome']."','".$_POST['emaile']."','".$_POST['adress']."','".$_POST['payemente']."')");
 	
 	
 	
 } catch (Exception $e) {
 	die("Erreur d'insertion".$e->getMessage());
 }
 ?>
 