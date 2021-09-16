<?php 
session_start();
  require("conec.php");
  $tabinscription=$productdb->query("SELECT email,mot FROM inscription");
  
   $trouv=false;
   while ($tuple=$tabinscription->fetch()) {
   	if ($_POST['mail']==$tuple['email'] && $_POST['mote']==$tuple['mot']) {
   		$trouv=true;
   		break;
   		
   	} 
   	
   	
   }
   if ($trouv==true) {
   	$_SESSION['connected']=true;
   	$_SESSION['mail']=$_POST['mail'];
   	header("Location:../pageacceuille.php");
   } else{
   	$_SESSION['connected']=false;
   	header("Location:login.php");
   	echo " <script>
 	alert('email ou mot de passe incorect');
 </script>
 ";
   }

 ?>