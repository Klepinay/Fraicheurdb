<?php
 $magasin = $_GET['magasin'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>
<form id="form1" name="form1" method="post" action="Bondecom.php?magasin=<?php echo $magasin ?>">
<body><table width="100%" border="0">
  <tbody width="100%">
    <tr>
      <th scope="col">COMMANDE</th>
      <th scope="col">
		<label for="date">DATE</label>
		<input type="date" id="date" name="date">
	  </th>
      <th scope="col">MAGASINS<br />
		<?php $name = $_GET['magasin'];
			echo $name;
		?>
	  </th>
	</tr>
  </tbody>
</table>

<table border="1" width="100%">
	<tr>
		<td align="center">	
			1
		</td>
		<td align="center">	
			<input type="text" name="petitetomate" id="petitetomate" value="Petite-tomate">
		</td>
		<td align="center">
			<input type="number" name="PT_quantite" id="PT_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_PT" id="unite_PT">
				<option>COUCOU</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			50
		</td>
		<td> 
			<input type="text" name="mang_americ" value="Mang-americ">
		</td>
		<td align="center">	
			<input type="number" name="Mameric_quantite" id="Mameric_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_Mameric_k" id="unitePT_Mameric_k">
				<option>KG</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
			
				  
				 
	<tr>
		<td colspan=8 align="center">
			<input type="submit" id="submit" name="submit" value="Commander">

		</td>
	</tr>
	</form>
</table>

</body>
</html>
	
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/fichierExterne.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

