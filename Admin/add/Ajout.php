<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$produit = $_POST["produit"];
	$quantite = $_POST["quantite"];
	$code = $_POST['code_article'];
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO t_produit(prd_title, prd_content, Code)
            VALUES(:produit, :quantite, :code)");
        $sth->bindParam(':produit',$produit);
        $sth->bindParam(':quantite',$quantite);
        $sth->bindParam(':code',$code);

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:\order_fdb2.0\Admin\Produit.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>