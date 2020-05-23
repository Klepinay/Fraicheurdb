<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$date = $_POST['date'];
	$magasin = $_GET['magasin'];
	$article = $_POST['petitetomate'];
	$quantite= $_POST['PT_quantite'];
	$ua = $_POST['unite_PT'];
	
		try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO t_commande(com_date, com_mag, com_article, com_quantite, com_unite)
            VALUES(:date, :magasin, :article, :quantite, :unite)");
        $sth->bindParam(':date',$date);
        $sth->bindParam(':magasin',$magasin);
        $sth->bindParam(':article',$article);
        $sth->bindParam(':quantite',$quantite);
        $sth->bindParam(':unite',$ua);
		
		$sth->execute();
	
	$article = $_POST['mang_americ'];
	$quantite = $_POST['Mameric_quantite'];
	$ua = $_POST['unite_Mameric_k'];
	
		$sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:commande.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	 // try{
       // On se connecte à la BDD
        // $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// On insère les données reçues
        // $sth = $dbco->prepare("
            // INSERT INTO t_commande(com_date, com_mag, com_article, com_quantite)
            // VALUES(:date, '.$magasin.', :select, :quantite)");			
        // $sth->bindParam(':select',$all);
        // $sth->bindParam(':quantite',$allquantite);
        // $sth->bindParam(':date',$date);
        // $sth->execute();

		
		 //On retourne l'utilisateur vers la page 
		// header('Location:commande.php?magasin='.$username'&'.$article'&'.$quantite);
		// exit;
	// }
	    // catch(PDOException $e){
        // echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    // }
	
?>