<?php


    // Inclusion du modèle
    include_once("../Model/DAO.class.php");

	 // Partie principale
	 $nbLigneArticlePage = 4;
	 $nbColonneArtcilePage = 5;

	 $nbArticlePage = $nbColonneArtcilePage*$nbLigneArticlePage;
	 $articleDeDepart = 1;
	 $nbCategorie = 5;


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

	function next(){
		$nP = $articleDeDepart+$nbArticlePage;
		return $nP;
	}
	function previous(){
		if($articleDeDepart-$nbArticlePage > 0){
			$pP = $articleDeDepart-$nbArticlePage;
			return $pP;
		}else {
			return $articleDeDepart;
		}
	}

    // Charge la vue
    include("../View/MainPage.view.php");
    ?>
