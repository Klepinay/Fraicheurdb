<?php
			$article = ($_POST['article']);
			$quantite = ($_POST['quantite']);
			$unite = ($_POST['unite']);
			$count = count($_POST['article']);
		for($i = 0; $i < $count; $i++) {
			$lign = array($article[$i],$quantite[$i],$unite[$i],$_GET['date'], $_GET['magasin']);
			$fp = fopen("exportcom.csv",'a+');
			fputcsv($fp,$lign,',');
			fclose($fp);
		}
?>