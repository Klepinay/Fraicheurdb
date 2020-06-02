
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
		</nav><br />
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
<form method="POST" action="commande-seach.php">
<table border="0" with="50%" align="center" style="margin-top:50px; margin-bottom:50px">
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
<table width="100%" border="0" style="margin-left:50px;">
<tr>
	<td align="center" width="30%">
		<table border="0" width="100%" style="border-collapse: collapse">
		<tr>
			<th><h2>Magasin : <?php echo $_GET['magasin'] ?></h2></th>
			<th><h2>Date : <?php echo $_GET['date'] ?></h2></th>
		</tr>
		<tr style="border: solid 2px white; background: #9E9E9E ">
			<th>
				<p>Produit</p>
			</th >
			<th >
				<p>Quantité</p>
			</th>
			<th >
				<p>Unité</p>
			</th>
		</tr>
			<?php 
			$magasin = $_GET['magasin'];
			$date = $_GET['date'];
				$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
				$articles = $bdd->query("SELECT com_article, com_quantite, com_unite 
				FROM t_commande
				WHERE com_mag='$magasin' and com_date='$date'");
				foreach ($articles as $article): 
			?>
		<tr align="center" style="border: solid 2px white;">
			<td >
				<p><?php echo $article['com_article'] ?></p>
			</td>
			<td >
				<p><?php echo $article['com_quantite'] ?></p>
			</td>
			<td >
				<p><?php echo $article['com_unite'] ?></p>
			</td>
		</tr>
			<?php endforeach ?>
		</table>
	</td>
	<td align="center" valign="top">
		<table width="100%" border="0" >
		<tr>
			<th>
				<h1>Préparation de la commande</h1>
			</th>
		</tr>
		<tr>
			<td align="center">					
					<form method="POST" name="form" action="exportcom.php?magasin=<?php echo $_GET['magasin'] ?>&date=<?php echo $_GET['date'] ?>">
						<div class="article">
							<select name="produit[]" id="article2">
								<option value="">--Choisissez un article--</option>
								
									<?php 
										$bdd = new PDO('mysql:host=localhost;dbname=fraicheurdb;charset=utf8', 'root', '');
										$articles = $bdd->query('select * from t_produit order by prd_id');
										foreach ($articles as $article): 
									?>
								<option><?php echo $article['prd_title'] ?></option>
									<?php endforeach ?>					
							</select>

							<input type="number" name="quantite[]" id="quantite2" style="width: 50px">

							<select name="unite[]" id="unite2">
								<option>Kilos</option>
								<option>Tonnes</option>
								<option>Cageot</option>
								<option>Unité</option>
							</select><br />
						</div>


    <div id="ajoutSupprimerArticle" style="margin-bottom:10px">
       <a href="javascript:;" title="Ajouter un article" class="ajoutArticle" rel="article"><input type="button" id="nouveau" name="nouveau" value="+ Ajouter Produit"></a>
       <a href="javascript:;" title="Supprimer un article" class="supprimerArticle" rel="article" ><input type="button" id="nouveau" value="Supprimer le dernier produit"></a>
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



