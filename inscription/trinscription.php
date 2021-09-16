<?php 
 require('conec.php');
 try {
 	$productdb->exec("INSERT INTO inscription (nom,prenom,email,mot) VALUES('".$_POST['nome']."','".$_POST['prenome']."','".$_POST['emaile']."','".$_POST['mote']."')");
 	echo "Insertion faite avec succée";
 	
 } catch (Exception $e) {
 	die("Erreur d'insertion".$e->getMessage());
 }
 ?>
  