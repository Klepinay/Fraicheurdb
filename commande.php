<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initila-scale=1">
		<link href="css/mag.css" rel="stylesheet">
		<title>Fraicheur de bourbon - Commande Magasin</title>
	</head>
	
	<body>
		<?php 
		$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
		$articles = $bdd->query('select * from t_produit order by prd_id');
		foreach ($articles as $article): ?>
		<table width="100%" border="1">
			<tr align="center" >
				<td>
					<p>ID</p>
				</td>
				<td>
					<p>Nom de l'article</p>
				</td>
			</tr>
			<tr align="center">
				<td>
					<p><?php echo $article['prd_id'] ?></p>
				</td>
				<td>
					<p><?php echo $article['prd_title'] ?></p>
				</td>
		</table>
		<?php endforeach ?>
	</body>
</html>