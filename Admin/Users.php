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
				--><li class="active"><a href="Users.php">Utilisateurs</a></li><!--
				--><li><a href="Fournisseur.php">Fournisseur</a></li>
			</ul>
		</nav>
	</div>
	
				<button value="Ajouter un utilisateur" id="ajout" style="margin-top: 25px; margin-left: 200px" >+ Ajouter un Utilisateur</button><br /><br />
				<div id="form">
				<h1>Ajouter un Utilisateur</h1>
					<form method="post" action="add/Ajoutuser.php">
						<p><label for="user">Nom de l'utilisateur : </label> <input type="text" name="user" id="user"> </p>
						<p><label for="identifiant">Identifiant : </label> <input type="text" name="identifiant" id="identifiant"></p>
						<p><label for="password">Mot de Passe : </label> <input type="text" style="width: 200px;" name="password" id="password"></p>
						<p><label for="role">Role</label> 
							<select type="select" name="role" id="role">
								<option>Admin</option>
								<option>Préparateur</option>
								<option>Magasin</option>
								<option>Réceptionniste</option>
							</select>
						</p>
						<p><input type="submit" value="Ajouter" /></p>
					</form>
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
						<?php echo $user['usr_name'] ?>
					</td>
					<td>
						<?php echo $user['usr_identifiant'] ?>
					</td>
					<td>
						<?php echo $user['usr_role'] ?>
					</td>
					<td>
						<a href="update/Modifuser.php?id=<?php echo $user['usr_id'] ?>" title="modifuser"><button Value="Modifier" id="updateuser">Modifier</button></a>
						<a href="delete/deleteuser.php?id=<?php echo $user['usr_id']; ?>"  title="Supprimer"><button value="Supprimer" id="deleteuser">X</button></a>
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