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
				<li class="active"><a href="Produit.php">Produits</a></li><!--
				--><li><a href="Users.php">Utilisateurs</a></li><!--
				--><li><a href="Fournisseur.php">Fournisseur</a></li>
			</ul>
		</nav>
	</div>
	

		<div id="container">
			<button value="Ajouter un produit" id="ajout" style="margin-top: 25px; margin-left: 200px" >+ Ajouter un Produit</button><br /><br />
			<div id="form">
			<h1>Ajouter un produit</h1>
				<form method="post" action="add\Ajout.php">
					<p><label for="produit">Nom du produit : </label> <input type="text" name="produit" id="produit"> </p>
					<p><label for="quantite">Quantité : </label> <input type="Number" style="width: 200px;" name="quantite"> Kg</p>
					<p><label for="code">Code Article</label> <input type="text" name="code_article" id="code_article"> </p>
					<p><input type="submit" value="Ajouter"></p>
				</form>

				<form enctype="multipart/form-data" action="add\import.php" method="post">
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
					<td width="80%">
						<p>Article</p>
					</td>
					<td></td>
				</tr>

		<?php 
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$articles = $bdd->query('select * from t_produit order by prd_id');
			foreach ($articles as $article): 
		?>

				<tr align="center">

					<td>					
						<?php echo $article['prd_title']; ?>
					</td>								
					<td>
						<a href="update/modifarticle.php?id=<?php echo $article['prd_id'] ?>"><button value="modifier" id="modifier" alt='Modifier'>Modifier</button>
						<a href="delete/delete.php?id=<?php echo $article['prd_id']; ?>"  title="Supprimer"><button value="Supprimer" id="delete" alt='Supprimer'>X</button></a>
					</td>
				</tr>

		<?php endforeach ?>
			</table>
	</div>
		
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
<script type="text/javascript">
	document.querySelector("#modifier").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#formodif')).display=='block'){
			document.querySelector("#formodif").style.display="none";
		} else {
			document.querySelector("#formodif").style.display="block";
		}
	}
</script>
	

