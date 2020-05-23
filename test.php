 
<script type="text/javascript">
<!--
/*
Script téléchargé du Coin Web de QuentinC

Nom du script : Bon de commande

Catégorie : Formulaires
Date de dernière modification : Lundi 23 janvier 2006 15:30

© 2002-2006, QuentinC
Vous pouvez utiliser, modifier et redistribuer ce script, à condition de laisser les présents commentaires intacts, et de ne pas l'utiliser à des fins commerciales.
*/
var port = 5.6;
var tva = 0.196;

function calculerPrix
(champQte) {
var champPrix = champQte.form.elements[champQte.name + "prix"];
var champPrixUnite = champQte.form.elements[champQte.name + "unite"];

var
prixUnite = parseFloat(champPrixUnite.value);
var qte = champQte.value;
if (qte == "") qte = 0;
else if (isNaN(qte)) qte = 0;
else qte = Math.floor(qte);
if
(qte < 0) qte = 0;

var prix = prixUnite * qte;

champPrix.value  = formatPrix(prix);

calculerTotal(champQte.form);
}
function
calculerTotal (form) {

var champTva = form.elements['tva'];
var champPort = form.elements['port'];
var champTotal = form.elements['total'];
champPort.value
= formatPrix(port);

var total = 0;
for (var i in form.elements) {
if (
//form.elements[i].name
i.toLowerCase().indexOf("prix") != -1)
total += parseFloat(form.elements[i].value);
}
total += port;
var tvaCalc = tva * total;
tvaCalc = Math.round(tvaCalc*100)/100.0;

champTva.value
= formatPrix(tvaCalc);
total += tvaCalc;

champTotal.value = formatPrix(total);
}
function formatPrix (n) {
n = Math.round(n*100)/100.0;
var
str = ""+n+"";

var i = str.indexOf(".");
if (i == -1) str += ".00";
else if (i == str.length-2) str += "0";
return str;
}

// -->
</script>




<form name="f1">
<table width="606"><tr><td width="124"></td><td width="233">
   <p align="center"><b>Article</b></p>
  </td><td width="53">Quantité</td><td width="99">Prix par unité</td><td width="65">Prix selon
quantité</td></tr>
<tr><td width="124"></td>

<td width="233">Article 1 de base</td><td width="53"> <input type="text" size="3" name="c1" onchange="calculerPrix(this);" /></td><td width="99"> <input type="text"
size="6" name="c1unite" value="300" /></td><td width="65"> <input type="text" name="c1prix" size="6" value="0.00" /></td></tr>
<tr><td width="124"></td>

<td width="233">Article 2 de luxe</td><td width="53">
<input type="text" size="3" name="c2" onchange="calculerPrix(this);"  /></td><td width="99"> <input type="text" size="6" name="c2unite" value="15" /></td><td width="65">
<input type="text" name="c2prix" size="6" value="0.00" /></td></tr>
<tr><td width="124"></td>

<td width="233"></td><td width="53"> </td><td width="233" align="right"><b>Frais
de port  </b></td><td width="65"> <input type="text" name="port" value="5,6" size="6" /> </td></tr>
<tr><td width="124"></td><td width="233"></td><td width="53"> </td><td width="233" align="right"><b>TVA  </b></td><td width="65">
<input type="text" name="tva" value="0" size="6" /> </td></tr>
<tr><td width="124"></td><td width="233"></td><td width="53"> </td><td width="233" align="right"><b>TOTAL
  TTC 
  </b></td><td width="65"> <input type="text" name="total"
value="0.00" size="6" /> </td></tr>
</table>
</form>