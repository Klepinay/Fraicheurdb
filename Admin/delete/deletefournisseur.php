<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$id = $_GET["id"];
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$del = $dbco->prepare("
			DELETE FROM t_fournisseur WHERE frn_id=".$id);
		$del->execute();
		
		header('Location:/order_fdb2.0/Admin/Fournisseur.php');
	}
	catch(PDOException $e) {
		echo 'Une erreur est arrivées. Erreur : '.$e->getMessage();
	}
