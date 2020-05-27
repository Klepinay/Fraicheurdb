<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$name = $_POST["name"];
	$code = $_POST["code"];
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO t_fournisseur(frn_name, frn_code)
            VALUES(:name, :code)");
        $sth->bindParam(':name',$name);
        $sth->bindParam(':code',$code);

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:/order_fdb2.0/Admin/Fournisseur.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>