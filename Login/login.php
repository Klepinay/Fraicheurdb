<!Doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Connexion - Fraicheur de Bourbon</title>
		<link rel="stylesheet" href="style.css" media="screen" type="text/css">
	</head>

	<body>
		<div id="container">
		
			<!-- Zone de connexion -->
			<form action="verif/verification.php" method="POST" align="center">
			<image src="\order_fdb2.0\images\logo Fraicheur de Bourbon.png" style="margin-bottom: 50px">
				<h1>Connexion</h1>
				
				<label><b>Nom d'utilisateur</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
				
				<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="password" required>
				
				<input type="submit" id="submit" value="LOGIN">
				<?php
				if(isset($_GET['erreur'])) {
					$err = $_GET['erreur'];
					if($err==1 || $err==2)
						echo"<p style='color:red'>Utilisateur ou mot de passe incorrrect</p>";
				}
				?>
		</div>
	</body>
</html>