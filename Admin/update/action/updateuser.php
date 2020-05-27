<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$name = $_POST['name'];
	$identifiant = $_POST['identifiant'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$id = $_GET["id"];
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
			UPDATE `t_user` SET `usr_name`='$name',`usr_identifiant`='$identifiant',`usr_password`='$password', `usr_role`='$role' WHERE `usr_id`='$id'");

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:\order_fdb2.0\Admin\Users.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>