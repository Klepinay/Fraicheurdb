
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<table border="1" with="50%" align="left">
	<tr>
		<td width="50%">

			
		</td>
	</tr>
</table>
<table width="60%" border="0" align="right">
  <tbody width="100%">
    <tr>
      <th scope="col" width="90%">
		<p align="center">Produits</p>
	</th>
	</tr>
	<tr>
		<td>
			<div id="NouveauProd">
				<div class="copycat">
				<form id="form1" name="form1" method="post">				
				  <p><select name="select" id="select" >
					<?php 
						$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
						$articles = $bdd->query('select * from t_produit order by prd_id');
						foreach ($articles as $article): 
					?>
					<option><?php echo $article['prd_title'] ?></option>
						<?php endforeach ?>
				  </select>
				<input type="number" id="quantite" name="quantite" style="width:50px;"></p>

		</tr>
				</div>
			</div>
		<tr>
			<td colspan=3 align="center">
				<input type="button" onclick="copycat()" id="button1" value="Nouveau produit"><br /><br />
				<input type="submit" value="Envoyer">
			</td>
		</tr>

		<tr>
			<td colspan=2 align="center">
					
			</td>
		</tr>
				</form>

  </tbody>
</table>

</body>
</html>
	
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/fichierExterne.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

