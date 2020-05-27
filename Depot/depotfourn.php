<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="depot.css">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<header>
	<div id="nav" align="center">
	<image src="\order_fdb2.0\images\logo Fraicheur de Bourbon.png" >
		<nav>
			<ul>
				<li class="active"><a href="Back-office.php">Commandes Magasins</a></li><!--
				--><li><a href="depotfourn.php">Livraison Fournisseur</a></li>
			</ul>
		</nav><br/>
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
	</div>
</header>
<body>
	<form style="margin-top: 50px;" align="center" method="POST" action="Livraison.php">
		<label class="fournisseur">Fournisseurs : </label>
		<select name="fournisseurs[]" id="fournisseurs">
			<option value="">--Choisissez un Fournisseur--</option>
					<?php 
						$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
						$articles = $bdd->query("SELECT * FROM `t_fournisseur` order by frn_id");
						foreach ($articles as $article): 
					?>
			<option><?php echo $article['frn_name']?></option>
					<?php endforeach ?>
		</select>
		<label class="date">Date : </label>
		<input type="date" name="date[]" id="date" style="margin-bottom:25px;"><br/>
				<label for="produit" id="labelproduit">Produit</label>
				<label for="quantite" id="labelquantite">Quantite</label>
				<label for="achat" id="labelachat">Unité d'achat</label>
				<label for="vente" id="labelvente">Unité de vente</label>
				<label for="vente" id="labelprix">Prix de vente</label><br />
				<div class="article" align="center" id="container">
					<select name="article[]" id="article">
						<option value="" >--Choisissez un Produit</option>
						<?php 
							$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
							$articles = $bdd->query("SELECT * FROM t_produit order by prd_id");
							foreach ($articles as $article): 
						?>
						<option><?php echo $article['prd_title'] ?></option>
						<?php endforeach ?>
					</select>

					<input type="Number" style="width:50px" name="quantite[]" id="quantite">					

					<select name="achat[]" id="achat" >
						<option>Kilos</option>
						<option>Tonnes</option>
						<option>Cageot</option>
						<option>Unité</option>
					</select>

					<select name="vente[]" id="vente" >
						<option>Kilos</option>
						<option>Tonnes</option>
						<option>Cageot</option>
						<option>Unité</option>
					</select>

					<input type="Number" style="width:50px" name="prix[]" id="prix">
				</div>
	
				<div id="ajoutSupprimerArticle" style="margin-bottom:10px" align="center">
				   <a href="javascript:;" title="Ajouter un article" class="ajoutArticle" rel="article"><input type="button" id="nouveau" name="nouveau" value="+ Ajouter Produit"></a>
				   <a href="javascript:;" title="Supprimer un article" class="supprimerArticle" rel="article" ><input type="button" id="nouveau" value="Supprimer le dernier produit"></a>
				</div>
					<input value="Enregistrer" type="submit">
	</form>
</body>
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