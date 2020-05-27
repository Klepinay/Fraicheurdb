
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="depot.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<header>
	<div id="nav" align="center">
	<image src="\order_fdb2.0\images\logo Fraicheur de Bourbon.png" >
		<nav>
			<ul>
				<li class="active"><a href="Back-office.php">Commandes Magasins</a></li><!--
				--><li><a href="depotfourn.php">Livraison Fournisseur</a></li>
			</ul>
		</nav><br />
		<a href='\order_fdb2.0\Login\verif\verificationmag.php?deconnexion=true'><input type="button" name="déconnexion" id="déconnection" Value="Déconnexion" style="margin-bottom:25px;"></a>
            
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                }
            ?>
	</div>
</header>
<body>
	<form method="POST" action="commande-seach.php">
	<table border="0" with="50%" align="center" style="margin-top:50px; margin-bottom:50px">
		<tr>
			<td width="50%">
				<select name="magasin" id="magasin" >
					<option value="">--Choisissez un Magasin--</option>
					<?php 
						$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
						$articles = $bdd->query("SELECT * FROM `t_user` WHERE `usr_role`='Magasin'");
						foreach ($articles as $article): 
					?>
					
					<option><?php echo $article['usr_identifiant'] ?></option>
					<?php endforeach ?>
				</select>			
			</td>
			<td>
				<input type="date" name="date" id="date">
			</td>
			<td>
				<input type="submit" value="Voir la commande">
			</td>
		</tr>

		</table>
	</form>

</body>
</html>
