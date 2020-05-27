<?php
			$fournisseur = (implode($_POST['fournisseurs']));
			$date = (implode($_POST['date']));
			$article = ($_POST['article']);
			$quantite = ($_POST['quantite']);
			$achat = ($_POST['achat']);
			$vente = ($_POST['vente']);
			$prix = ($_POST['prix']);
			$count = count($_POST['article']);
		for($i = 0; $i < $count; $i++) {
			$lign = array($fournisseur,$date,$article[$i],$quantite[$i],$achat[$i],$vente[$i],$prix[$i]);
			$fp = fopen("Livraison-fournisseur.csv",'a+');
			fputcsv($fp,$lign,',');
			fclose($fp);
			
		}
		echo ('Export reussis ! <br />');
		echo ('<a href="Back-office.php"><button>Retour au Back-office</button></a>');
		exit;
		
		
		
?>