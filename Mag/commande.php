<?php
 $magasin = $_GET['magasin'];
 $code = $_GET['code'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nouvelle commande magasin</title>
<link href="commande.css" rel="stylesheet">
</head>
<form id="form1" name="form1" method="post" action="Bondecom.php?magasin=<?php echo $magasin ?>&code=<?php echo $code ?>">
<body align="center">
<image src="\order_fdb2.0\images\logo Fraicheur de Bourbon.png" >
<table width="70%" border="0" align="center">
  <tbody width="70%">
    <tr>
      <th scope="col"><h1>COMMANDE</h1></th>
      <th scope="col" valign="top">
		<label for="date"><h1>DATE</h1></label>
		<input type="date" id="date" name="date" required>
	  </th>
      <th scope="col" valign="top"><h1>MAGASINS</h1>
		<?php $name = $_GET['magasin'];
			echo $name;
		?><br/>
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
	  </th>
	</tr>
  </tbody>
</table>

<table border="0" width="70%" style="border-collapse: collapse" align="center" name="aticle" id="article">
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
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			50
		</td>
		<td align="center"> 
			<input type="text" name="mang_americ" id="mang_americ" value="Mang-americ">
		</td>
		<td align="center">	
			<input type="number" name="Mameric_quantite" id="Mameric_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_Mameric_k" id="unitePT_Mameric_k">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			2
		</td>
		<td align="center">	
			<input type="text" name="oignon" id="oignon" value="Oignon">
		</td>
		<td align="center">
			<input type="number" name="oig_quantite" id="oig_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_oig" id="unite_PT">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			51
		</td>
		<td align="center"> 
			<input type="text" name="pasteque" id="pasteque" value="Pasteque">
		</td>
		<td align="center">	
			<input type="number" name="pasteque_quantite" id="pasteque_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_pasteque" id="unite_pasteque">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			3
		</td>
		<td align="center">	
			<input type="text" name="oignon_fillet" id="oignon_fillet" value="Oignon fillet">
		</td>
		<td align="center">
			<input type="number" name="oignon_fillet_quantite" id="oignon_fillet_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_oignon_fillet" id="unite_oignon_fillet">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			52
		</td>
		<td align="center"> 
			<input type="text" name="ti_melon" id="ti_melon" value="Ti_melon">
		</td>
		<td align="center">	
			<input type="number" name="ti_melon_quantite" id="ti_melon_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_ti_melon" id="unite_ti_melon">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			4
		</td>
		<td align="center">	
			<input type="text" name="ail" id="ail" value="Ail">
		</td>
		<td align="center">
			<input type="number" name="ail_quantite" id="ail_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_ail" id="unite_ail">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			53
		</td>
		<td align="center"> 
			<input type="text" name="fraise" id="fraise" value="Fraise">
		</td>
		<td align="center">	
			<input type="number" name="fraise_quantite" id="fraise_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_fraise" id="unite_fraise">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			5
		</td>
		<td align="center">	
			<input type="text" name="choux_vert" id="choux_vert" value="Choux vert">
		</td>
		<td align="center">
			<input type="number" name="choux_vert_quantite" id="choux_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_choux_vert" id="unite_choux_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			54
		</td>
		<td align="center"> 
			<input type="text" name="papaye" id="papaye" value="Papaye">
		</td>
		<td align="center">	
			<input type="number" name="papaye_quantite" id="papaye_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_papaye" id="unite_papaye">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			6
		</td>
		<td align="center">	
			<input type="text" name="choux_fleur" id="choux_fleur" value="Choux fleur">
		</td>
		<td align="center">
			<input type="number" name="choux_fleur_quantite" id="choux_fleur_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_choux_fleur" id="unite_choux_fleur">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			55
		</td>
		<td align="center"> 
			<input type="text" name="combavas" id="combavas" value="Combavas">
		</td>
		<td align="center">	
			<input type="number" name="combavas_quantite" id="combavas_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_combavas" id="unite_combavas">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			7
		</td>
		<td align="center">	
			<input type="text" name="pdt_blanc" id="pdt_blanc" value="Pomme de terre - Blanc">
		</td>
		<td align="center">
			<input type="number" name="pdt_blanc_quantite" id="pdt_blanc_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_pdt_blanc" id="unite_pdt_blanc">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			56
		</td>
		<td align="center"> 
			<input type="text" name="citrons_pays" id="citrons_pays" value="Citrons pays">
		</td>
		<td align="center">	
			<input type="number" name="citrons_pays_quantite" id="citrons_pays_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_citrons_pays" id="unite_citrons_pays">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			8
		</td>
		<td align="center">	
			<input type="text" name="pdt_rose" id="pdt_rose" value="Pomme de terre - Rose">
		</td>
		<td align="center">
			<input type="number" name="pdt_rose_quantite" id="pdt_rose_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_pdt_rose" id="unite_pdt_rose">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			58
		</td>
		<td align="center"> 
			<input type="text" name="avocat" id="avocat" value="Avocat">
		</td>
		<td align="center">	
			<input type="number" name="avocat_quantite" id="avocat_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_avocat" id="unite_avocat">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			9
		</td>
		<td align="center">	
			<input type="text" name="gingembre" id="gingembre" value="Gingembre">
		</td>
		<td align="center">
			<input type="number" name="gingembre_quantite" id="gingembre_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_gingembre" id="unite_gingembre">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			59
		</td>
		<td align="center"> 
			<input type="text" name="ananas" id="ananas" value="Ananas">
		</td>
		<td align="center">	
			<input type="number" name="ananas_quantite" id="ananas_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_ananas" id="unite_ananas">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			10
		</td>
		<td align="center">	
			<input type="text" name="ging-mangue" id="ging-mangue" value="Ging-mangue">
		</td>
		<td align="center">
			<input type="number" name="ging-mangue_quantite" id="ging-mangue_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_ging-mangue" id="unite_ging-mangue">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			60
		</td>
		<td align="center"> 
			<input type="text" name="fruit_passion" id="fruit_passion" value="Fruit Passion">
		</td>
		<td align="center">	
			<input type="number" name="fruit_passion_quantite" id="fruit_passion_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_fruit_passion" id="unite_fruit_passion">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			11
		</td>
		<td align="center">	
			<input type="text" name="thym" id="thym" value="Thym">
		</td>
		<td align="center">
			<input type="number" name="thym_quantite" id="thym_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_thym" id="unite_thym">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			61
		</td>
		<td align="center"> 
			<input type="text" name="miel_bout" id="miel_bout" value="Miel Bouteille">
		</td>
		<td align="center">	
			<input type="number" name="miel_bout_quantite" id="miel_bout_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_miel_bout" id="unite_miel_bout">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			12
		</td>
		<td align="center">	
			<input type="text" name="persil" id="persil" value="Persil">
		</td>
		<td align="center">
			<input type="number" name="persil_quantite" id="persil_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_persil" id="unite_persil">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			62
		</td>
		<td align="center"> 
			<input type="text" name="miel_bocal" id="miel_bocal" value="Miel bocal">
		</td>
		<td align="center">	
			<input type="number" name="miel_bocal_quantite" id="miel_bocal_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_miel_bocal" id="unite_miel_bocal">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			13
		</td>
		<td align="center">	
			<input type="text" name="oignon_vert" id="oignon_vert" value="Oignon vert">
		</td>
		<td align="center">
			<input type="number" name="oignon_vert_quantite" id="oignon_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_oignon_vert" id="unite_oignon_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			63
		</td>
		<td align="center"> 
			<input type="text" name="oig_blanc" id="oig_blanc" value="Oignon Blanc">
		</td>
		<td align="center">	
			<input type="number" name="oig_blanc_quantite" id="oig_blanc_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_oig_blanc" id="unite_oig_blanc">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			14
		</td>
		<td align="center">	
			<input type="text" name="courgette" id="courgette" value="Courgette">
		</td>
		<td align="center">
			<input type="number" name="courgette_quantite" id="courgette_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_courgette" id="unite_courgette">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			64
		</td>
		<td align="center"> 
			<input type="text" name="echalotte" id="echalotte" value="Echalotte">
		</td>
		<td align="center">	
			<input type="number" name="echalotte_quantite" id="echalotte_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_echalotte" id="unite_echalotte">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			15
		</td>
		<td align="center">	
			<input type="text" name="grosse_tomate" id="grosse_tomate" value="Grosse Tomate">
		</td>
		<td align="center">
			<input type="number" name="grosse_tomate_quantite" id="grosse_tomate_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_grosse_tomate" id="unite_grosse_tomate">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			65
		</td>
		<td align="center"> 
			<input type="text" name="gros_citrouille" id="gros_citrouille" value="Gros Citrouille">
		</td>
		<td align="center">	
			<input type="number" name="gros_citrouille_quantite" id="gros_citrouille_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_gros_citrouille" id="unite_gros_citrouille">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			16
		</td>
		<td align="center">	
			<input type="text" name="bringel" id="bringel" value="Bringel">
		</td>
		<td align="center">
			<input type="number" name="bringel_quantite" id="bringel_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_bringel" id="unite_bringel">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			67
		</td>
		<td align="center"> 
			<input type="text" name="charbon" id="charbon" value="Charbon">
		</td>
		<td align="center">	
			<input type="number" name="charbon_quantite" id="charbon_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_charbon" id="unite_charbon">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			17
		</td>
		<td align="center">	
			<input type="text" name="navet" id="navet" value="Navet">
		</td>
		<td align="center">
			<input type="number" name="navet_quantite" id="navet_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_navet" id="unite_navet">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			69
		</td>
		<td align="center"> 
			<input type="text" name="salades" id="salades" value="Salades">
		</td>
		<td align="center">	
			<input type="number" name="salades_quantite" id="salades_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_salades" id="unite_salades">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			18
		</td>
		<td align="center">	
			<input type="text" name="betterave" id="betterave" value="Betterave">
		</td>
		<td align="center">
			<input type="number" name="betterave_quantite" id="betterave_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_betterave" id="unite_betterave">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			70
		</td>
		<td align="center"> 
			<input type="text" name="br_singapor" id="br_singapor" value="Br/singapor">
		</td>
		<td align="center">	
			<input type="number" name="br_singapor_quantite" id="br_singapor_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_br_singapor" id="unite_br_singapor">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			19
		</td>
		<td align="center">	
			<input type="text" name="poireau" id="poireau" value="Poireau">
		</td>
		<td align="center">
			<input type="number" name="poireau_quantite" id="poireau_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_poireau" id="unite_poireau">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			71
		</td>
		<td align="center"> 
			<input type="text" name="pitaya" id="pitaya" value="Pitaya">
		</td>
		<td align="center">	
			<input type="number" name="pitaya_quantite" id="pitaya_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_pitaya" id="unite_pitaya">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			20
		</td>
		<td align="center">	
			<input type="text" name="carotte" id="carotte" value="Carotte">
		</td>
		<td align="center">
			<input type="number" name="carotte_quantite" id="carotte_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_carotte" id="unite_carotte">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			72
		</td>
		<td align="center"> 
			<input type="text" name="tangor" id="tangor" value="Tangor">
		</td>
		<td align="center">	
			<input type="number" name="tangor_quantite" id="tangor_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_tangor" id="unite_tangor">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			73
		</td>
		<td align="center">	
			<input type="text" name="concombre" id="concombre" value="Concombre">
		</td>
		<td align="center">
			<input type="number" name="concombre_quantite" id="concombre_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_concombre" id="unite_concombre">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			74
		</td>
		<td align="center"> 
			<input type="text" name="bredre_paquet" id="bredre_paquet" value="Bredre paquet">
		</td>
		<td align="center">	
			<input type="number" name="bredre_paquet_quantite" id="bredre_paquet_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_bredre_paquet" id="unite_bredre_paquet">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			22
		</td>
		<td align="center">	
			<input type="text" name="ti_citrouille" id="ti_citrouille" value="Ti citrouille">
		</td>
		<td align="center">
			<input type="number" name="ti_citrouille_quantite" id="ti_citrouille_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_ti_citrouille" id="unite_ti_citrouille">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			75
		</td>
		<td align="center"> 
			<input type="text" name="zate" id="zate" value="Zate">
		</td>
		<td align="center">	
			<input type="number" name="zate_quantite" id="zate_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_zate" id="unite_zate">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			23
		</td>
		<td align="center">	
			<input type="text" name="mange_tout" id="mange_tout" value="Mange-tout">
		</td>
		<td align="center">
			<input type="number" name="mange_tout_quantite" id="mange_tout_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_mange_tout" id="unite_mange_tout">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			76
		</td>
		<td align="center"> 
			<input type="text" name="coco_sec" id="coco_sec" value="Coco sec">
		</td>
		<td align="center">	
			<input type="number" name="coco_sec_quantite" id="coco_sec_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_coco_sec" id="unite_coco_sec">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			24
		</td>
		<td align="center">	
			<input type="text" name="haricot_vert" id="haricot_vert" value="Haricot vert">
		</td>
		<td align="center">
			<input type="number" name="haricot_vert_quantite" id="haricot_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_haricot_vert" id="unite_haricot_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			77
		</td>
		<td align="center"> 
			<input type="text" name="endives" id="endives" value="Endives">
		</td>
		<td align="center">	
			<input type="number" name="endives_quantite" id="endives_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_endives" id="unite_endives">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			25
		</td>
		<td align="center">	
			<input type="text" name="gros_piment" id="gros_piment" value="Gros Piment">
		</td>
		<td align="center">
			<input type="number" name="gros_piment_quantite" id="gros_piment_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_gros_piment" id="unite_gros_piment">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			78
		</td>
		<td align="center"> 
			<input type="text" name="mais_vert" id="mais_vert" value="Mais Vert">
		</td>
		<td align="center">	
			<input type="number" name="mais_vert_quantite" id="mais_vert_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_mais_vert" id="unite_mais_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			26
		</td>
		<td align="center">	
			<input type="text" name="poivron_vert" id="poivron_vert" value="Poivron vert">
		</td>
		<td align="center">
			<input type="number" name="poivron_vert_quantite" id="poivron_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_poivron_vert" id="unite_poivron_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			79
		</td>
		<td align="center"> 
			<input type="text" name="patate_chouchou" id="patate_chouchou" value="Patate chouchou">
		</td>
		<td align="center">	
			<input type="number" name="patate_chouchou_quantite" id="patate_chouchou_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_patate_chouchou" id="unite_patate_chouchou">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			27
		</td>
		<td align="center">	
			<input type="text" name="margoze" id="margoze" value="Margoze">
		</td>
		<td align="center">
			<input type="number" name="margoze_quantite" id="margoze_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_margoze" id="unite_margoze">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			80
		</td>
		<td align="center"> 
			<input type="text" name="mandarine" id="mandarine" value="Mandarine">
		</td>
		<td align="center">	
			<input type="number" name="mandarine_quantite" id="mandarine_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_mandarine" id="unite_mandarine">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			28
		</td>
		<td align="center">	
			<input type="text" name="haricot_jaune" id="haricot_jaune" value="Haricot Jaune">
		</td>
		<td align="center">
			<input type="number" name="haricot_jaune_quantite" id="haricot_jaune_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_haricot_jaune" id="unite_haricot_jaune">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			85
		</td>
		<td align="center"> 
			<input type="text" name="poiv_couleur" id="poiv_couleur" value="Poiv-couleur">
		</td>
		<td align="center">	
			<input type="number" name="poiv_couleur_quantite" id="poiv_couleur_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_poiv_couleur" id="unite_poiv_couleur">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			29
		</td>
		<td align="center">	
			<input type="text" name="gros_pois" id="gros_pois" value="Gros pois">
		</td>
		<td align="center">
			<input type="number" name="gros_pois_quantite" id="gros_pois_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_gros_pois" id="unite_gros_pois">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			86
		</td>
		<td align="center"> 
			<input type="text" name="cambar" id="cambar" value="Cambar">
		</td>
		<td align="center">	
			<input type="number" name="cambar_quantite" id="cambar_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_cambar" id="unite_cambar">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			30
		</td>
		<td align="center">	
			<input type="text" name="ti_poiron" id="ti_poiron" value="Petit pois rond">
		</td>
		<td align="center">
			<input type="number" name="ti_poiron_quantite" id="ti_poiron_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_ti_poiron" id="unite_ti_poiron">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			99
		</td>
		<td align="center"> 
			<input type="text" name="tomate_cerise" id="tomate_cerise" value="Tomate cerise">
		</td>
		<td align="center">	
			<input type="number" name="tomate_cerise_quantite" id="tomate_cerise_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_tomate_cerise" id="unite_tomate_cerise">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			31
		</td>
		<td align="center">	
			<input type="text" name="brocoli" id="brocoli" value="Brocoli">
		</td>
		<td align="center">
			<input type="number" name="brocoli_quantite" id="brocoli_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_brocoli" id="unite_brocoli">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			100
		</td>
		<td align="center"> 
			<input type="text" name="mini_concombre" id="mini_concombre" value="Mini concombre">
		</td>
		<td align="center">	
			<input type="number" name="mini_concombre_quantite" id="mini_concombre_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_mini_concombre" id="unite_mini_concombre">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			32
		</td>
		<td align="center">	
			<input type="text" name="piment_vert" id="piment_vert" value="Piment Vert">
		</td>
		<td align="center">
			<input type="number" name="piment_vert_quantite" id="piment_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_piment_vert" id="unite_piment_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			132
		</td>
		<td align="center"> 
			<input type="text" name="lent_cilaos" id="lent_cilaos" value="Lentille Cilaos">
		</td>
		<td align="center">	
			<input type="number" name="lent_cilaos_quantite" id="lent_cilaos_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_lent_cilaos" id="unite_lent_cilaos">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			33
		</td>
		<td align="center">	
			<input type="text" name="chou_rouge" id="chou_rouge" value="Chou Rouge">
		</td>
		<td align="center">
			<input type="number" name="chou_rouge_quantite" id="chou_rouge_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_chou_rouge" id="unite_chou_rouge">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			272
		</td>
		<td align="center"> 
			<input type="text" name="vin_cilaos" id="vin_cilaos" value="Vin Cilaos">
		</td>
		<td align="center">	
			<input type="number" name="vin_cilaos_quantite" id="vin_cilaos_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_vin_cilaos" id="unite_vin_cilaos">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			34
		</td>
		<td align="center">	
			<input type="text" name="radis" id="radis" value="Radis">
		</td>
		<td align="center">
			<input type="number" name="radis_quantite" id="radis_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_radis" id="unite_radis">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			281
		</td>
		<td align="center"> 
			<input type="text" name="persil_frise" id="persil_frise" value="Persil frise">
		</td>
		<td align="center">	
			<input type="number" name="persil_frise_quantite" id="persil_frise_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_persil_frise" id="unite_persil_frise">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			39
		</td>
		<td align="center">	
			<input type="text" name="fleur_oignon" id="fleur_oignon" value="Fleur oignon">
		</td>
		<td align="center">
			<input type="number" name="fleur_oignon_quantite" id="fleur_oignon_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_fleur_oignon" id="unite_fleur_oignon">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			112
		</td>
		<td align="center"> 
			<input type="text" name="carotte_pays" id="carotte_pays" value="carotte_pays">
		</td>
		<td align="center">	
			<input type="number" name="carotte_pays_quantite" id="carotte_pays_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_carotte_pays" id="unite_carotte_pays">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			40
		</td>
		<td align="center">	
			<input type="text" name="br_sail" id="br_sail" value="Br/sail">
		</td>
		<td align="center">
			<input type="number" name="br_sail_quantite" id="br_sail_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_br_sail" id="unite_br_sail">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			905
		</td>
		<td align="center"> 
			<input type="text" name="patate_rose" id="patate_rose" value="Patate rose">
		</td>
		<td align="center">	
			<input type="number" name="patate_rose_quantite" id="patate_rose_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_patate_rose" id="unite_patate_rose">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			41
		</td>
		<td align="center">	
			<input type="text" name="bibasse" id="bibasse" value="Bibasse">
		</td>
		<td align="center">
			<input type="number" name="bibasse_quantite" id="bibassel_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_bibasse" id="unite_bibasse">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			1001
		</td>
		<td align="center"> 
			<input type="text" name="courge" id="courge" value="Courge">
		</td>
		<td align="center">	
			<input type="number" name="courge_quantite" id="courge_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_courge" id="unite_courge">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			42
		</td>
		<td align="center">	
			<input type="text" name="songe_grise" id="songe_grise" value="Songe Grise">
		</td>
		<td align="center">
			<input type="number" name="songe_grise_quantite" id="songe_grise_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_songe_grise" id="unite_songe_grise">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			134
		</td>
		<td align="center"> 
			<input type="text" name="piment_cabri" id="piment_cabri" value="Piment cabri">
		</td>
		<td align="center">	
			<input type="number" name="piment_cabri_quantite" id="piment_cabri_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_piment_cabri" id="unite_piment_cabri">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			43
		</td>
		<td align="center">	
			<input type="text" name="songe_maurice" id="songe_maurice" value="Songe Maurice">
		</td>
		<td align="center">
			<input type="number" name="songe_maurice_quantite" id="songe_maurice_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_songe_maurice" id="unite_songe_maurice">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
			110
		</td>
		<td align="center"> 
			<input type="text" name="calbasse" id="calbasse" value="Calbasse">
		</td>
		<td align="center">	
			<input type="number" name="calbasse_quantite" id="calbasse_quantite" style="width:50px">
		</td>
		<td align="center">	
			<select name="unite_calbasse" id="unite_calbasse">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center">	
			44
		</td>
		<td align="center">	
			<input type="text" name="patate" id="patate" value="Patate">
		</td>
		<td align="center">
			<input type="number" name="patate_quantite" id="patate_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_patate" id="unite_patate">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
		</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">	
			45
		</td>
		<td align="center">	
			<input type="text" name="manioc" id="manioc" value="Manioc">
		</td>
		<td align="center">
			<input type="number" name="manioc_quantite" id="manioc_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_manioc" id="unite_manioc">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
		</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">	
			46
		</td>
		<td align="center">	
			<input type="text" name="pist_vert" id="pist_vert" value="Pist vert">
		</td>
		<td align="center">
			<input type="number" name="pist_vert_quantite" id="pist_vert_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_pist_vert" id="unite_pist_vert">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
		</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">	
			47
		</td>
		<td align="center">	
			<input type="text" name="pist_sec" id="pist_sec" value="Pist sec">
		</td>
		<td align="center">
			<input type="number" name="pist_sec_quantite" id="pist_sec_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_pist_sec" id="unite_pist_sec">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
		</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
	</tr>
	<tr>
		<td align="center">	
			49
		</td>
		<td align="center">	
			<input type="text" name="mangue_jose" id="mangue_jose" value="Mangue jose">
		</td>
		<td align="center">
			<input type="number" name="mangue_jose_quantite" id="mangue_jose_quantite" style="width:50px">
		</td>
		<td align="center">
			<select name="unite_mangue_jose" id="unite_mangue_jose">
				<option>Kilos</option>
				<option>Tonnes</option>
				<option>Cageot</option>
				<option>Unité</option>
			</select>
		</td>
		<td align="center">
		</td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
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

