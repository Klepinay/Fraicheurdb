
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body><table width="100%" border="0">
  <tbody width="100%">
    <tr>
      <th scope="col">Produits</th>
      <th scope="col">Quantite</th>
	</tr>
	
	
    <tr>
		<td align="center">
			<div id="NouveauProd">
				<div class="copycat">
				<form id="form1" name="form1" method="post">				
				  <select name="select" id="select">
					<?php 
						$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
						$articles = $bdd->query('select * from t_produit order by prd_id');
						foreach ($articles as $article): 
					?>
					<option><?php echo $article['prd_title'] ?></option>
						<?php endforeach ?>
				  </select><br /><br />					
		</td>
		<td align="center">
			<input type="number" id="quantite" name="quantite">
		</td>
		</tr>
		<tr>
			<td colspan=2 align="center">
				<input type="button" onclick="copycat()" id="button1" value="Nouveau produit">
			</td>
		</tr>
		<tr>
			<td colspan=2 align="center">
					
			</td>
		</tr>
				</form>
				</div>
			</div>
  </tbody>
</table>

</body>
</html>
	
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/fichierExterne.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

