<?php
			$article = ($_POST['produit']);
			$quantite = ($_POST['quantite']);
			$unite = ($_POST['unite']);
			$count = count($_POST['produit']);
		for($i = 0; $i < $count; $i++) {
			$lign = array($article[$i],$quantite[$i],$unite[$i],$_GET['date'], $_GET['magasin'], $_GET['code']);
			$fp = fopen("exportcom.csv",'a+');
			fputcsv($fp,$lign,',');
			fclose($fp);
			
		}
		echo ('Export reussis ! <br />');
		echo ('<a href="Back-office.php"><button>Retour au Back-office</button></a>');
		exit;		
?>