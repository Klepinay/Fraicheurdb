<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$magasin = $_POST['magasin'];
	$date = $_POST['date'];
	
	$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
	$codes = $bdd->query("SELECT * FROM `t_commande` WHERE com_mag = '".$magasin."'");
	foreach ($codes as $code):
	
	$code = $code['com_mag_id'];

	endforeach;
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            SELECT com_article, com_quantite, com_unite FROM t_commande
			WHERE com_mag='$magasin' and com_date='$date'");
		$sth->execute();
		
		header("Location:depot.php?magasin=$magasin&date=$date&code=$code");
	}
	catch(PDOException $e) {
		echo 'une erreur est arrivées. Erreur: '.$e->getMessage();
	}