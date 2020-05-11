<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$quantite = $_POST["quantite"];
	$produit = $_POST["produit"];
	$code = $_POST["code_article"];
	$id = $_GET["id"];
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
			UPDATE `t_produit` SET `prd_title`='$produit',`prd_content`='$quantite',`Code`='$code' WHERE `prd_id`='$id'");

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:produit.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>