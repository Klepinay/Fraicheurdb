<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="style.css" rel="stylesheet">
	<title>Fraicheur de Bourbon - Modification d'un Utilisateur</title>
</head>
		<?php 
			$id = $_GET["id"];
			$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
			$users = $bdd->query("SELECT `usr_id`,`usr_name`, `usr_identifiant`, `usr_password`, `usr_role` FROM `t_user` WHERE `usr_id`='$id'");
			foreach ($users as $user): 
		?>
<body>
	<form action="action/updateuser.php?id=<?php echo $user['usr_id'] ?>" method="POST">
		<label for="name">Nom de l'utilisateur</label>
		<input type="text" id="name" name="name" value="<?php echo $user['usr_name'] ?>"/>
		
		<label for="identifiant">Identifiant</label>
		<input type="text" id="identifiant" name="identifiant" value="<?php echo $user['usr_identifiant'] ?>"/>
		
		<label for="password">Mot de Passe</label>
		<input type="text" id="password" name="password" value="<?php echo $user['usr_password'] ?>"/>
		
		<label for="role">Role</label> 
			<select type="select" name="role" id="role">
				<option>Admin</option>
				<option>Préparateur</option>
				<option>Magasin</option>
				<option>Réceptionniste</option>
			</select>
		
		<input type="submit" value="Enregistrer" />
	</form>
	
	<?php endforeach ?>
</body>
</html>