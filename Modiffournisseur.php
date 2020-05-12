<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="Menu.css" rel="stylesheet">
	<title>Fraicheur de Bourbon - Modification d'un Fournisseur</title>
</head>
		<?php 
			$id = $_GET["id"];
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$fournisseurs = $bdd->query("SELECT `frn_id`,`frn_name`,`frn_code` FROM `t_fournisseur` WHERE `frn_id`='$id'");
			foreach ($fournisseurs as $fournisseur):
		?>
<body>
	<form action="updatefournisseur.php?id=<?php echo $fournisseur['frn_id'] ?>" method="POST">
		<label for="name">Nom du fournisseur</label>
		<input type="text" id="name" name="name" value="<?php echo $fournisseur['frn_name'] ?>"/>
		
		<label for="code">Code Fournisseur</label>
		<input type="text" id="code" name="code" value="<?php echo $fournisseur['frn_code'] ?>"/>
		
		<input type="submit" value="Enregistrer" />
	</form>
	
	<?php endforeach ?>
</body>
</html>