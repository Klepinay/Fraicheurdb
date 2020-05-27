<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="style.css" rel="stylesheet">
	<title>Fraicheur de Bourbon - Modification d'un Article</title>
</head>
		<?php 
			$id = $_GET["id"];
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$articles = $bdd->query("SELECT `prd_id`,`prd_title`, `prd_content`, `Code` FROM `t_produit` WHERE `prd_id`='$id'");
			foreach ($articles as $article): 
		?>
<body>
	<form action="action/updatearticle.php?id=<?php echo $article['prd_id'] ?>" method="POST">
		<label for="libelle">Nom de produit</label>
		<input type="text" id="libelle" name="libelle" value="<?php echo $article['prd_title'] ?>"/>
		
		<label for="quantite">Quantite</label>
		<input type="number" id="quantite" name="quantite" value="<?php echo $article['prd_content'] ?>"/>
		
		<label for="Codearticle">Code Article</label>
		<input type="text" id="Codearticle" name="Codearticle" value="<?php echo $article['Code'] ?>"/>
		
		<input type="submit" value="Enregistrer" />
	</form>
	
	<?php endforeach ?>
</body>
</html>