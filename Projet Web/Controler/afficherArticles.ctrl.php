<?php


    // Inclusion du modèle et des variable
    include_once("../Controler/variable.ctrl.php");
    include_once("../Model/DAO.class.php");

	 // Partie principale

	 $nbArtc = $dao->nbArticle();
	 $nbCat = $dao->nbCategorie();
	 $artcileDispo = $dao->getArticleDispo();

	if (!empty($_GET['refcat'])){
		$categorie = $dao->getNCateg(01,$nbCategorie);
		$refcategorie=$_GET['refcat'];
	}else {
		$categorie = $dao->getNCateg(01,$nbCategorie);
		$refcategorie= "";
	}

	if(!empty($_GET['refartc'])&& empty($_GET['refcat'])&& empty($_GET['dispo']) ){
	  $article = $dao->getNArticle($_GET['refartc'],$nbArticlePage);
	  $refarticle=$_GET['refartc'];
	  $dispo = "";
	}else if(!empty($_GET['refartc'])&& !empty($_GET['refcat'])&& empty($_GET['dispo'])){
	  $article =$dao->getArticleCate($_GET['refcat']);
	  $refarticle=$_GET['refartc'];
	  $dispo = "";

	}else if (!empty($_GET['dispo'])&&empty($_GET['refartc'])) {
  		$article =$dao->getArticleDispo();
		$dispo = "oui";
        $refarticle=$_GET['refartc'];

	}else if (!empty($_GET['dispo'])&&!empty($_GET['refartc'])) {
  		$article =$dao->getArticleDispoRefArticle($_GET['refartc']);
		$dispo = "oui";
        $refarticle=$_GET['refartc'];

	}  else{
	  $article = $dao->getNArticle($articleDeDepart,$nbArticlePage);
	  $refarticle=$articleDeDepart;
	  $dispo = "";
	}


	if (count($article)<$nbArticlePage){
		$nbLigneArticlePage = floor(count($article)/5);
		$nbColonneArtcilePageLF = (count($article)%5); //LF = ligne finale
	}else {
		$nbLigneArticlePage = 4;
		$nbColonneArtcilePage = 5;
	}
	$nbColonneArtcilePage = 5;
	$nbLigneArticlePage = floor(count($article)/5);
	$nbColonneArtcilePageLF = (count($article)%5);

//Page suivante
		$nextPage = $articleDeDepart+$nbArticlePage;

//Page précédente
	 if($previousPage-$nbArticlePage > 0){
			$previousPage= $articleDeDepart-$nbArticlePage;
			$pageActuelle=$pageActuelle--;
		}else {
			$previousPage=  $articleDeDepart;
			$articleDeDepart = $previousPage;
		}

   // Charge la vue de la page principal
   include("../View/MainPage.view.php");
   ?>
