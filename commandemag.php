<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<table width="95%" border="1" align="center">
		<tr>
			<th colspan=3>
				<p>Commande</p>
			</th>
		</tr>
		
		<tr>
			<td colspan=3>
				<?php 
					$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
					$commandes = $bdd->query('select * from t_commande order by Id');
					foreach ($commandes as $commande): 
				?>
			</td>
		</tr>
		<tr>
			<th colspan=3>
			</th>
		</tr>
		
		
			<tr>
		
				<td>
					<?php echo $commande['com_article'] ?>
				</td>
				<td>
					<?php echo $commande['com_quantite'] ?>
				</td>
				<td>
					<?php echo $commande['com_unite'] ?>
				</td>
			
		<?php endforeach ?>
			</tr>
	</table>
</body>
</html>