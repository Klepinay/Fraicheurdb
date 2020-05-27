<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<title>Fraicheur de Bourbon - Back Office Administrateur</title>
</head>
<body>

	<div id="nav" align="center">
		<nav>
			<ul>
				<li><a href="Produit.php">Produits</a></li><!--
				--><li><a href="Users.php">Utilisateurs</a></li><!--
				--><li class="active"><a href="Fournisseur.php">Fournisseur</a></li>
			</ul>
		</nav>
	</div>
	
				<button value="Ajouter un Fournisseur" id="ajout" style="margin-top: 25px; margin-left: 200px" >+ Ajouter un Fournisseur</button><br /><br />
				<div id="form">
				<h1>Ajouter un Fournisseur</h1>
					<form method="post" action="add/Ajoutfournisseur.php">
						<p><label for="name">Nom du Fournisseur : </label> <input type="text" name="name" id="name"> </p>
						<p><label for="code">Code Fournisseur : </label> <input type="text" name="code" id="code"> </p> 
						<p><input type="submit" value="Ajouter" /></p>
					</form>
					
					<form enctype="multipart/form-data" action="importfournisseur.php" method="post">
						<div class="input-row">
							<label class="col-md-4 control-label">Choisir un fichier CSV</label>
							<input type="file" name="file" id="file" accept=".csv">
							<button type="submit" id="submit" name="import" class="btn-submit">Import</button>
							<br />
						</div>
					</form>
				</div>
				
				<table width="50%" border="1" style="border-collapse:collapse" align="center">
				<tr align="center">
					<td>
						<p>Nom du Fournisseur</p>
					</td>
					<td>
						<p>Code Fournisseur</p>
					</td>
				</tr>
		<?php 
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$fournisseurs = $bdd->query('select * from t_fournisseur order by frn_id');
			foreach ($fournisseurs as $fournisseur): 
		?>
				<tr align="center">
					<td>
						<?php echo $fournisseur['frn_name'] ?>
					</td>
					<td>
						<?php echo $fournisseur['frn_code'] ?>
					</td>
					<td>
						<a href="update/Modiffournisseur.php?id=<?php echo $fournisseur['frn_id'] ?>" title="modiffournisseur"><button Value="Modifier" id="updatefournisseur">Modifer</button></a> 
						<a href="delete/deletefournisseur.php?id=<?php echo $fournisseur['frn_id'] ?>" title="Supprimer"><button Value="supprimer" id="supprimerfournisseur">X</button></a>
					</td>
				</tr>
		<?php endforeach ?>
				
			</table>
</body>
</html>
<script type="text/javascript">
	document.querySelector("#ajout").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#form')).display=='block'){
			document.querySelector("#form").style.display="none";
		} else {
			document.querySelector("#form").style.display="block";
		}
	}
</script>