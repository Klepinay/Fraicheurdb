<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$nom = $_POST["user"];
	$identifiant = $_POST["identifiant"];
	$password = $_POST['password'];
	$role = $_POST['role'];
	
	try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO t_user(usr_name, usr_identifiant, usr_password, usr_role)
            VALUES(:user, :identifiant, :password, :role)");
        $sth->bindParam(':user',$nom);
        $sth->bindParam(':identifiant',$identifiant);
        $sth->bindParam(':password',$password);
        $sth->bindParam(':role',$role);

        $sth->execute();
		
		// On retourne l'utilisateur vers la page 
		header('Location:\order_fdb2.0\Admin\Users.php');
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	
?>