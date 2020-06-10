<?php
	$serveur ="localhost";
	$dbname = "fraicheurdb";
	$user = "root";
	$pass = "";
	
	$date = $_POST['date'];
	$magasin = $_GET['magasin'];
	$code = $_GET['code'];
	$article = $_POST['petitetomate'];
	$quantite= $_POST['PT_quantite'];
	$ua = $_POST['unite_PT'];
	
		try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO t_commande(com_date, com_mag, com_mag_id, com_article, com_quantite, com_unite)
            VALUES(:date, :magasin, :com_mag_id, :article, :quantite, :unite)");
        $sth->bindParam(':date',$date);
        $sth->bindParam(':magasin',$magasin);
        $sth->bindParam(':com_mag_id',$code);
        $sth->bindParam(':article',$article);
        $sth->bindParam(':quantite',$quantite);
        $sth->bindParam(':unite',$ua);
		
		if ($quantite !== "")
		{
			$sth->execute();
		}
			$article = $_POST['mang_americ'];
			$quantite = $_POST['Mameric_quantite'];
			$ua = $_POST['unite_Mameric_k'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['oignon'];
			$quantite = $_POST['oig_quantite'];
			$ua = $_POST['unite_oig'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			

			$article = $_POST['pasteque'];
			$quantite = $_POST['pasteque_quantite'];
			$ua = $_POST['unite_pasteque'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['oignon_fillet'];
			$quantite = $_POST['oignon_fillet_quantite'];
			$ua = $_POST['unite_oignon_fillet'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['ti_melon'];
			$quantite = $_POST['ti_melon_quantite'];
			$ua = $_POST['unite_ti_melon'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['ail'];
			$quantite = $_POST['ail_quantite'];
			$ua = $_POST['unite_ail'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['fraise'];
			$quantite = $_POST['fraise_quantite'];
			$ua = $_POST['unite_fraise'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['choux_vert'];
			$quantite = $_POST['choux_vert_quantite'];
			$ua = $_POST['unite_choux_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['papaye'];
			$quantite = $_POST['papaye_quantite'];
			$ua = $_POST['unite_papaye'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['choux_fleur'];
			$quantite = $_POST['choux_fleur_quantite'];
			$ua = $_POST['unite_choux_fleur'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['combavas'];
			$quantite = $_POST['combavas_quantite'];
			$ua = $_POST['unite_combavas'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['pdt_blanc'];
			$quantite = $_POST['pdt_blanc_quantite'];
			$ua = $_POST['unite_pdt_blanc'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['citrons_pays'];
			$quantite = $_POST['citrons_pays_quantite'];
			$ua = $_POST['unite_citrons_pays'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['pdt_rose'];
			$quantite = $_POST['pdt_rose_quantite'];
			$ua = $_POST['unite_pdt_rose'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['avocat'];
			$quantite = $_POST['avocat_quantite'];
			$ua = $_POST['unite_avocat'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['gingembre'];
			$quantite = $_POST['gingembre_quantite'];
			$ua = $_POST['unite_gingembre'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['ananas'];
			$quantite = $_POST['ananas_quantite'];
			$ua = $_POST['unite_ananas'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['ging-mangue'];
			$quantite = $_POST['ging-mangue_quantite'];
			$ua = $_POST['unite_ging-mangue'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['fruit_passion'];
			$quantite = $_POST['fruit_passion_quantite'];
			$ua = $_POST['unite_fruit_passion'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['thym'];
			$quantite = $_POST['thym_quantite'];
			$ua = $_POST['unite_thym'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['miel_bout'];
			$quantite = $_POST['miel_bout_quantite'];
			$ua = $_POST['unite_miel_bout'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['persil'];
			$quantite = $_POST['persil_quantite'];
			$ua = $_POST['unite_persil'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['miel_bocal'];
			$quantite = $_POST['miel_bocal_quantite'];
			$ua = $_POST['unite_miel_bocal'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['oignon_vert'];
			$quantite = $_POST['oignon_vert_quantite'];
			$ua = $_POST['unite_oignon_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['oig_blanc'];
			$quantite = $_POST['oig_blanc_quantite'];
			$ua = $_POST['unite_oig_blanc'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['courgette'];
			$quantite = $_POST['courgette_quantite'];
			$ua = $_POST['unite_courgette'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['echalotte'];
			$quantite = $_POST['echalotte_quantite'];
			$ua = $_POST['unite_echalotte'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['grosse_tomate'];
			$quantite = $_POST['grosse_tomate_quantite'];
			$ua = $_POST['unite_grosse_tomate'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['gros_citrouille'];
			$quantite = $_POST['gros_citrouille_quantite'];
			$ua = $_POST['unite_gros_citrouille'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['bringel'];
			$quantite = $_POST['bringel_quantite'];
			$ua = $_POST['unite_bringel'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['charbon'];
			$quantite = $_POST['charbon_quantite'];
			$ua = $_POST['unite_charbon'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['navet'];
			$quantite = $_POST['navet_quantite'];
			$ua = $_POST['unite_navet'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['salades'];
			$quantite = $_POST['salades_quantite'];
			$ua = $_POST['unite_salades'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['betterave'];
			$quantite = $_POST['betterave_quantite'];
			$ua = $_POST['unite_betterave'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['br_singapor'];
			$quantite = $_POST['br_singapor_quantite'];
			$ua = $_POST['unite_br_singapor'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['poireau'];
			$quantite = $_POST['poireau_quantite'];
			$ua = $_POST['unite_poireau'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['pitaya'];
			$quantite = $_POST['pitaya_quantite'];
			$ua = $_POST['unite_pitaya'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['carotte'];
			$quantite = $_POST['carotte_quantite'];
			$ua = $_POST['unite_carotte'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['tangor'];
			$quantite = $_POST['tangor_quantite'];
			$ua = $_POST['unite_tangor'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['concombre'];
			$quantite = $_POST['concombre_quantite'];
			$ua = $_POST['unite_concombre'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['bredre_paquet'];
			$quantite = $_POST['bredre_paquet_quantite'];
			$ua = $_POST['unite_bredre_paquet'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['ti_citrouille'];
			$quantite = $_POST['ti_citrouille_quantite'];
			$ua = $_POST['unite_ti_citrouille'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['zate'];
			$quantite = $_POST['zate_quantite'];
			$ua = $_POST['unite_zate'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['mange_tout'];
			$quantite = $_POST['mange_tout_quantite'];
			$ua = $_POST['unite_mange_tout'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['coco_sec'];
			$quantite = $_POST['coco_sec_quantite'];
			$ua = $_POST['unite_coco_sec'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
			$article = $_POST['haricot_vert'];
			$quantite = $_POST['haricot_vert_quantite'];
			$ua = $_POST['unite_haricot_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['endives'];
			$quantite = $_POST['endives_quantite'];
			$ua = $_POST['unite_endives'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['gros_piment'];
			$quantite = $_POST['gros_piment_quantite'];
			$ua = $_POST['unite_gros_piment'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['mais_vert'];
			$quantite = $_POST['mais_vert_quantite'];
			$ua = $_POST['unite_mais_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['poivron_vert'];
			$quantite = $_POST['poivron_vert_quantite'];
			$ua = $_POST['unite_poivron_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['patate_chouchou'];
			$quantite = $_POST['patate_chouchou_quantite'];
			$ua = $_POST['unite_patate_chouchou'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['margoze'];
			$quantite = $_POST['margoze_quantite'];
			$ua = $_POST['unite_margoze'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['mandarine'];
			$quantite = $_POST['mandarine_quantite'];
			$ua = $_POST['unite_mandarine'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['haricot_jaune'];
			$quantite = $_POST['haricot_jaune_quantite'];
			$ua = $_POST['unite_haricot_jaune'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['poiv_couleur'];
			$quantite = $_POST['poiv_couleur_quantite'];
			$ua = $_POST['unite_poiv_couleur'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['gros_pois'];
			$quantite = $_POST['gros_pois_quantite'];
			$ua = $_POST['unite_gros_pois'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['cambar'];
			$quantite = $_POST['cambar_quantite'];
			$ua = $_POST['unite_cambar'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['ti_poiron'];
			$quantite = $_POST['ti_poiron_quantite'];
			$ua = $_POST['unite_ti_poiron'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['tomate_cerise'];
			$quantite = $_POST['tomate_cerise_quantite'];
			$ua = $_POST['unite_tomate_cerise'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['brocoli'];
			$quantite = $_POST['brocoli_quantite'];
			$ua = $_POST['unite_brocoli'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['mini_concombre'];
			$quantite = $_POST['mini_concombre_quantite'];
			$ua = $_POST['unite_mini_concombre'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
			
		
			$article = $_POST['piment_vert'];
			$quantite = $_POST['piment_vert_quantite'];
			$ua = $_POST['unite_piment_vert'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
			
		
			$article = $_POST['lent_cilaos'];
			$quantite = $_POST['lent_cilaos_quantite'];
			$ua = $_POST['unite_lent_cilaos'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
			
		
			$article = $_POST['chou_rouge'];
			$quantite = $_POST['chou_rouge_quantite'];
			$ua = $_POST['unite_chou_rouge'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
			
		
			$article = $_POST['vin_cilaos'];
			$quantite = $_POST['vin_cilaos_quantite'];
			$ua = $_POST['unite_vin_cilaos'];
		if ($quantite !== "")
		{
			$sth->execute();
		}		
			
		
			$article = $_POST['radis'];
			$quantite = $_POST['radis_quantite'];
			$ua = $_POST['unite_radis'];
		if ($quantite !== "")
		{
			$sth->execute();
		}		
			
		
			$article = $_POST['persil_frise'];
			$quantite = $_POST['persil_frise_quantite'];
			$ua = $_POST['unite_persil_frise'];
		if ($quantite !== "")
		{
			$sth->execute();
		}	
			
		
			$article = $_POST['fleur_oignon'];
			$quantite = $_POST['fleur_oignon_quantite'];
			$ua = $_POST['unite_fleur_oignon'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['carotte_pays'];
			$quantite = $_POST['carotte_pays_quantite'];
			$ua = $_POST['unite_carotte_pays'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['br_sail'];
			$quantite = $_POST['br_sail_quantite'];
			$ua = $_POST['unite_br_sail'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['patate_rose'];
			$quantite = $_POST['patate_rose_quantite'];
			$ua = $_POST['unite_patate_rose'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['bibasse'];
			$quantite = $_POST['bibasse_quantite'];
			$ua = $_POST['unite_bibasse'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['courge'];
			$quantite = $_POST['courge_quantite'];
			$ua = $_POST['unite_courge'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['songe_grise'];
			$quantite = $_POST['songe_grise_quantite'];
			$ua = $_POST['unite_songe_grise'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['piment_cabri'];
			$quantite = $_POST['piment_cabri_quantite'];
			$ua = $_POST['unite_piment_cabri'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['songe_maurice'];
			$quantite = $_POST['songe_maurice_quantite'];
			$ua = $_POST['unite_songe_maurice'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['calbasse'];
			$quantite = $_POST['calbasse_quantite'];
			$ua = $_POST['unite_calbasse'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['patate'];
			$quantite = $_POST['patate_quantite'];
			$ua = $_POST['unite_patate'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['manioc'];
			$quantite = $_POST['manioc_quantite'];
			$ua = $_POST['unite_manioc'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['pist_sec'];
			$quantite = $_POST['pist_sec_quantite'];
			$ua = $_POST['unite_pist_sec'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
			
		
			$article = $_POST['mangue_jose'];
			$quantite = $_POST['mangue_jose_quantite'];
			$ua = $_POST['unite_mangue_jose'];
		if ($quantite !== "")
		{
			$sth->execute();
		}
		
		
		
		
		
		// On retourne l'utilisateur vers la page 
		echo "<p align='center'>Commande Validée</p> <br />";
		echo '<a href="commande.php?magasin='.$magasin.'&code='.$code.'" ><button >Retour à la page Commande</button></a>';
		exit;
	}
	    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
	 // try{
       // On se connecte à la BDD
        // $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        // $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// On insère les données reçues
        // $sth = $dbco->prepare("
            // INSERT INTO t_commande(com_date, com_mag, com_article, com_quantite)
            // VALUES(:date, '.$magasin.', :select, :quantite)");			
        // $sth->bindParam(':select',$all);
        // $sth->bindParam(':quantite',$allquantite);
        // $sth->bindParam(':date',$date);
        // $sth->execute();

		
		 //On retourne l'utilisateur vers la page 
		// header('Location:commande.php?magasin='.$username'&'.$article'&'.$quantite);
		// exit;
	// }
	    // catch(PDOException $e){
        // echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    // }
	
?>