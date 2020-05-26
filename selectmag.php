<tr>
		<?php 		
		$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
		$commandes = $bdd->query("select * from t_commande WHERE com_mag='.$magasin.'");
		foreach ($commandes as $commande): ?>
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