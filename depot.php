
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="depot.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
	<div id="nav" align="center">
		<nav>
			<ul>
				<li class="active"><a href="commandemag.php">Commandes Magasins</a></li><!--
				--><li><a href="depotfour.php">Livraison Forunisseur</a></li>
			</ul>
		</nav>
	</div>
<form method="POST" action="commande-seach.php">
<table border="1" with="50%" align="center" >
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
<table width="100%" border="1">
<tr>
	<td align="center" width="30%">
		<table border="1" width="80%">
			<?php 
			$magasin = $_GET['magasin'];
			$date = $_GET['date'];
				$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
				$articles = $bdd->query("SELECT com_article, com_quantite, com_unite 
				FROM t_commande
				WHERE com_mag='$magasin' and com_date='$date'");
				foreach ($articles as $article): 
			?>
		<tr align="center">
			<td>
				<?php echo $article['com_article'] ?>
			</td>
			<td>
				<?php echo $article['com_quantite'] ?>
			</td>
			<td>
				<?php echo $article['com_unite'] ?>
			</td>
		</tr>
			<?php endforeach ?>
		</table>
	</td>
	<td align="center">
		<table width="100%" border="1" >
		<tr>
			<th>
				Produit
			</th>
		</tr>
		<tr>
			<td align="center">					
					<form method="POST" id="article" name="form" action="exportcom.php?magasin=<?php echo $_GET['magasin'] ?>&date=<?php echo $_GET['date'] ?>">
						<div class="article">
							<select name="article[]" id="article" form="article">
								<option value="">--Choisissez un article--</option>
								
									<?php 
										$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
										$articles = $bdd->query('select * from t_produit order by prd_id');
										foreach ($articles as $article): 
									?>
								<option><?php echo $article['prd_title'] ?></option>
									<?php endforeach ?>					
							</select>

							<input type="number" name="quantite[]" id="quantite" style="width: 50px">

							<select name="unite[]" id="unite" form="article">
								<option>Kilos</option>
								<option>Tonnes</option>
								<option>Cageot</option>
								<option>Unité</option>
							</select><br />
						</div>


    <div id="ajoutSupprimerArticle">
       <a href="javascript:;" title="Ajouter un article" class="ajoutArticle" rel="article">Cloner</a>
       <a href="javascript:;" title="Supprimer un article" class="supprimerArticle" rel="article">Décloner</a>
    </div>
		<input value="Enregistrer" type="submit">
	</td>
</tr>
	
</table>


</body>
</html>
<script>
$(document).ready(function() {

  $(".supprimerArticle").hide();

  $(".ajoutArticle").click(function() {
    var form = $(this).closest('form');
    var articleList = form.find('.article');
    // Le nombre d'articles déjà présents
    var n = articleList.length;
    // Le premier article que l'on va cloner
    var firstArticle = $(articleList[0]);
    // Le dernier article de la liste
    var lastArticle = $(articleList[n - 1]);
    // Un article cloné
    var clonedArticle = firstArticle.clone();

    // Pour chaque input clonés
    clonedArticle.find(':input').each(function() {
      // On vide la valeur
      $(this)
        .filter(':text').val('').end()
      // On change le nom en ajoutant le numero
      $(this).attr('name', $(this).attr('name') + n)
    })

    // On l'ajoute au dom après les autres
    clonedArticle.insertAfter(lastArticle).hide().fadeIn('slow');

    // On ajoute le le lien de suppression
    $(".supprimerArticle").fadeIn("fast");

  });


  $(".supprimerArticle").click(function() {
    var article = $(".article:last");
    article.remove();

    // S'il y a moins de 2 articles (autrement dit un seul) on cache le bouton supprimer.
    if ($(".article").length < 2) {
      $(".supprimerArticle").fadeOut("fast");
    }

  });


});

</script>



