<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$name = $_POST["name"];
	$code = $_POST["code"];
	$id = $_GET["id"];
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
			UPDATE `t_fournisseur` SET `frn_name`='$name',`frn_code`='$code' WHERE `frn_id`='$id'");

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:Fournisseur.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>