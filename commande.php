
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
		<form id="form1" name="form1" method="post">
          <select name="select" id="select">
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
				$articles = $bdd->query('select * from t_produit order by prd_id');
				foreach ($articles as $article): 
			?>
			<option><?php echo $article['prd_title'] ?></option>
				<?php endforeach ?>
          </select>
      	
	  </td>
      <td align="center">
			<input type="number" id="quantite" name="quantite">
	  </td>
    </tr>
	<tr>
		<td colspan=2 align="center">
			<input type="submit" value="Commander">
		</td>
	</tr>
	</form>
  </tbody>
</table>

</body>
</html>

