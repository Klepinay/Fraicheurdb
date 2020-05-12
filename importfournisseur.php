<?php
	// Connect to database
	include("db_connect.php");

	if (isset($_POST["import"])) {
		
		$fileName = $_FILES["file"]["tmp_name"];
		
		if ($_FILES["file"]["size"] > 0) {
			
			$file = fopen($fileName, "r");
			
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sql = "INSERT into t_fournisseur (frn_name,frn_code)
					   values ('" . $column[0] . "','" . $column[1] . "')";
				$result = mysqli_query($conn, $sql);
				
				if (! empty($result)) {
					$type = "success";
					$message = "Les Données sont importées dans la base de données";
				} else {
					$type = "error";
					$message = "Problème lors de l'importation de données CSV";
				}
			}
		}
	}
	//Retourner à la page index.php
	header('Location: Fournisseur.php');
	exit;
?>