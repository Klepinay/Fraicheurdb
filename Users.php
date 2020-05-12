<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="Menu.css" rel="stylesheet">
	<title>Fraicheur de Bourbon - Back Office Administrateur</title>
</head>
<body>

	<div id="nav" align="center">
		<nav>
			<ul>
				<li><a href="Produit.php">Produits</a></li><!--
				--><li class="active"><a href="Users.php">Utilisateurs</a></li><!--
				--><li><a href="Fournisseur.php">Fournisseur</a></li>
			</ul>
		</nav>
	</div>
	
			<div id="container">
				<button value="Ajouter un utilisateur" id="ajout" style="margin-top: 25px; margin-left: 200px" >+ Ajouter un Utilisateur</button><br /><br />
				<div id="form">
				<h1>Ajouter un Utilisateur</h1>
					<form method="post" action="Ajoutuser.php">
						<p><label for="user">Nom de l'utilisateur : </label> <input type="text" name="user" id="user"> </p>
						<p><label for="identifiant">Identifiant : </label> <input type="text" name="identifiant" id="identifiant"></p>
						<p><label for="password">Mot de Passe : </label> <input type="text" style="width: 200px;" name="password" id="password"></p>
						<p><label for="role">Role</label> <input type="text" name="role" id="role"> </p>
						<p><input type="submit" value="Ajouter"></p>
			</div>
			
			<table width="50%" border="1" style="border-collapse:collapse" align="center">
				<tr align="center">
					<td>
						<p>Nom de L'utilisateur</p>
					</td>
					<td>
						<p>Identifiant</p>
					</td>
					<td>
						<p>Role</p>
					</td>
				</tr>
		<?php 
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$users = $bdd->query('select * from t_user order by usr_id');
			foreach ($users as $user): 
		?>
				<tr align="center">
					<td>
						<?php echo $user["usr_name"] ?>
					</td>
					<td>
						<?php echo $user["usr_identifiant"] ?>
					</td>
					<td>
						<?php echo $user["usr_role"] ?>
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