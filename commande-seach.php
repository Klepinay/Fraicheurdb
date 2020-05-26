<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$magasin = $_POST['magasin'];
	$date = $_POST['date'];
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            SELECT com_article, com_quantite, com_unite FROM t_commande
			WHERE com_mag='$magasin' and com_date='$date'");
		$sth->execute();
		
		header("Location:depot.php?magasin=$magasin&date=$date");
	}
	catch(PDOException $e) {
		echo 'une erreur est arrivées. Erreur: '.$e->getMessage();
	}