<?php
	// Connect to database
	include("db/db_connect.php");

	if (isset($_POST["import"])) {
		
		$fileName = $_FILES["file"]["tmp_name"];
		
		if ($_FILES["file"]["size"] > 0) {
			
			$file = fopen($fileName, "r");
			
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sql = "INSERT into t_produit (Code,prd_title,prd_content)
					   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "')";
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
	header('Location: \order_fdb2.0\Admin\Produit.php');
	exit;
?>