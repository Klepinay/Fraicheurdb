<?php
 $magasin = $_GET['magasin'];
 $id = 0;
?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Document sans titre</title>
</head>
<form id='form1' name='form1' method='post' action='Bondecoms.php?magasin=<?php echo $magasin ?>'>
<body><table width='100%' border='0'>
  <tbody width='100%'>
    <tr>
      <th scope='col'>COMMANDE</th>
      <th scope='col'>
		<label for='date'>DATE</label>
		<input type='date' id='date' name='date'>
	  </th>
      <th scope='col'>MAGASINS<br />
		<?php $name = $_GET['magasin'];
			echo $name;
		?>
	  </th>
	</tr>
  </tbody>
</table>

<table border='0' width='100%'>
	<tr>
		<td align='center'>		
			<div id='NouveauProd'>
				<div class='copycat'>
				  <select name="article" id="article">				  
					<option>Choix du produit</option>
					<option>Ail</option>
					<option>Ananas</option>
					<option>Avocat</option>
					<option>Betterave</option>
					<option>Bibasse</option>
					<option>Br/sail</option>
					<option>Br/singapor</option>
					<option>Brede-paquet</option>
					<option>Bringel</option>
					<option>Brocoli</option>
					<option>Calbasse</option>
					<option>Cambar</option>
					<option>Carotte</option>
					<option>Carotte pays</option>
					<option>Charbon</option>
					<option>Choux fleur</option>
					<option>Choux vert</option>
					<option>Choux-rouge</option>
					<option>Citron Pays</option>
					<option>Coco sec</option>
					<option>Combavas</option>
					<option>Concombre</option>
					<option>Courgette</option>
					<option>Courgette</option>
					<option>Echalotte</option>
					<option>Endives</option>
					<option>Fleur oignon</option>
					<option>Fraise</option>
					<option>Fruit-passion</option>
					<option>Gingembre</option>
					<option>Ging-mangue</option>
					<option>Gros-citrouille</option>
					<option>Gros-piment</option>
					<option>Gros-Pois</option>
					<option>Grosse-tomate</option>
					<option>Haricot-jaune</option>
					<option>Haricot-vert</option>
					<option>Lent-cilaos</option>
					<option>Mais vert</option>
					<option>Mandarine</option>
					<option>Mang-améric</option>
					<option>Mange-tout</option>
					<option>Mangue-Jose</option>
					<option>Manioc</option>
					<option>Margoze</option>
					<option>Miel Bocal</option>
					<option>Miel Bout</option>
					<option>Mini concombre</option>
					<option>Navet</option>
					<option>Oig-blanc</option>
					<option>Oignon</option>
					<option>Oignon fillet</option>
					<option>Oingon vert</option>
					<option>Papaye</option>
					<option>Pasteque</option>
					<option>Patate</option>
					<option>Patate-Chouchou</option>
					<option>Patate-rose</option>
					<option>PDT Blanc</option>
					<option>PDT Rose</option>
					<option>Persil</option>
					<option>Persil frisé</option>
					<option>Petite -Tomate</option>
					<option>Piment-Cabri</option>
					<option>Piment-vert</option>
					<option>Pist-sec</option>
					<option>Pist-vert</option>
					<option>Pitaya</option>
					<option>Poireau</option>
					<option>Poiv-couleur</option>
					<option>Poivron-vert</option>
					<option>Radis</option>
					<option>Salades</option>
					<option>Songe grise</option>
					<option>Songe Maurice</option>
					<option>Tangor</option>
					<option>Thym</option>
					<option>Ti-citrouille</option>
					<option>Ti-melon</option>
					<option>Ti-poiron</option>
					<option>Tomate cerise</option>
					<option>Vin-cilaos</option>
					<option>Zate</option>
				  </select>
				<input type="number" id="quantite" name="quantite" style="width:50px">
				 <select name="article" id="article" >	
					<option value="0">Choix du produit</option>
					<option>Ail</option>
					<option>Ananas</option>
					<option>Avocat</option>
					<option>Betterave</option>
					<option>Bibasse</option>
					<option>Br/sail</option>
					<option>Br/singapor</option>
					<option>Brede-paquet</option>
					<option>Bringel</option>
					<option>Brocoli</option>
					<option>Calbasse</option>
					<option>Cambar</option>
					<option>Carotte</option>
					<option>Carotte pays</option>
					<option>Charbon</option>
					<option>Choux fleur</option>
					<option>Choux vert</option>
					<option>Choux-rouge</option>
					<option>Citron Pays</option>
					<option>Coco sec</option>
					<option>Combavas</option>
					<option>Concombre</option>
					<option>Courgette</option>
					<option>Courgette</option>
					<option>Echalotte</option>
					<option>Endives</option>
					<option>Fleur oignon</option>
					<option>Fraise</option>
					<option>Fruit-passion</option>
					<option>Gingembre</option>
					<option>Ging-mangue</option>
					<option>Gros-citrouille</option>
					<option>Gros-piment</option>
					<option>Gros-Pois</option>
					<option>Grosse-tomate</option>
					<option>Haricot-jaune</option>
					<option>Haricot-vert</option>
					<option>Lent-cilaos</option>
					<option>Mais vert</option>
					<option>Mandarine</option>
					<option>Mang-améric</option>
					<option>Mange-tout</option>
					<option>Mangue-Jose</option>
					<option>Manioc</option>
					<option>Margoze</option>
					<option>Miel Bocal</option>
					<option>Miel Bout</option>
					<option>Mini concombre</option>
					<option>Navet</option>
					<option>Oig-blanc</option>
					<option>Oignon</option>
					<option>Oignon fillet</option>
					<option>Oingon vert</option>
					<option>Papaye</option>
					<option>Pasteque</option>
					<option>Patate</option>
					<option>Patate-Chouchou</option>
					<option>Patate-rose</option>
					<option>PDT Blanc</option>
					<option>PDT Rose</option>
					<option>Persil</option>
					<option>Persil frisé</option>
					<option>Petite -Tomate</option>
					<option>Piment-Cabri</option>
					<option>Piment-vert</option>
					<option>Pist-sec</option>
					<option>Pist-vert</option>
					<option>Pitaya</option>
					<option>Poireau</option>
					<option>Poiv-couleur</option>
					<option>Poivron-vert</option>
					<option>Radis</option>
					<option>Salades</option>
					<option>Songe grise</option>
					<option>Songe Maurice</option>
					<option>Tangor</option>
					<option>Thym</option>
					<option>Ti-citrouille</option>
					<option>Ti-melon</option>
					<option>Ti-poiron</option>
					<option>Tomate cerise</option>
					<option>Vin-cilaos</option>
					<option>Zate</option>
				  </select>
				<input type='number' id="quantite" name="quantite" style='width:50px;'></p>
				</div>
			</div>
		</td>
	</tr>

	<tr>
		<td colspan=4 align='center'>
		<input onclick='copycat()' id='button1' value='Nouveau produit' type='button'><br> 
		</td>
	</tr>
	<tr>
		<td colspan=4 align='center'>
			<input type='submit' id='submit' name='submit' value='Commander'>

		</td>
	</tr>
	</form>
</table>

</body>
</html>

	
<script type='text/javascript'  src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/fichierExterne.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

