<?php


    // Inclusion du modèle
    include_once("../Model/DAO.class.php");

	 // Partie principale
	 $nbLigneArticlePage = 4;
	 $nbColonneArtcilePage = 5;

	 $nbArticlePage = $nbColonneArtcilePage*$nbLigneArticlePage;
	 $articleDeDepart = 01;
	 $nbCategorie = 05;
	 $nextPage = $articleDeDepart+$nbArticlePage;


	if (!empty($_GET['refcat'])){
		$categorie = $dao->getNCateg($_GET['refcat'],$nbCategorie);
	}else {
		$categorie = $dao->getNCateg(01,$nbCategorie);
	}
	if(!empty($_GET['refartc'])){
	  $article = $dao->getNArticle($_GET['refartc'],$nbArticlePage);
	}else {
	  $article = $dao->getNArticle($articleDeDepart,$nbArticlePage);
	}
	echo gettype($categorie);
    // Charge la vue
    include("../View/MainPage.view.php");
    ?>
