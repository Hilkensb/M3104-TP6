<?php
include_once("../Controler/variable.ctrl.php");

    // Inclusion du modèle
    include_once("../Model/DAO.class.php");

	 // Partie principale

	 $nbArtc = $dao->nbArticle();
	 $nbCat = $dao->nbCategorie();
	 $artcileDispo = $dao->getArticleDispo();
	// echo !empty($_GET['refartc']);
	echo $nbCat;
	echo $nbCategorie;
 $diff =$nbCat-$nbCategorie;

	if (!empty($_GET['refcat'])){
		$categorie = $dao->getNCateg(01/*$_GET['refcat']*/,$nbCategorie);
		$refcategorie=$_GET['refcat'];
	}else {
		$categorie = $dao->getNCateg(01,$nbCategorie);
		var_dump($categorie);
		$refcategorie= "";
	}
	if(!empty($_GET['refartc'])&& empty($_GET['refcat'])&& empty($_GET['dispo']) ){
	  $article = $dao->getNArticle($_GET['refartc'],$nbArticlePage);
	  $refarticle=$_GET['refartc'];
	  $dispo = "";

	  var_dump($article);
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
	var_dump($article);
	echo "count".count($article)."couf";
	if (count($article)<$nbArticlePage){
		$nbLigneArticlePage = floor(count($article)/5);
		$nbColonneArtcilePageLF = (count($article)%5);
	}else {
		$nbLigneArticlePage = 4;
		$nbColonneArtcilePage = 5;
	}
	echo $nbArtc."nbArtc \n";
	echo $nbArticlePage."nbArticlePage \n";
	echo $nbLigneArticlePage."ligne \n";
	echo $nbColonneArtcilePage."colonne \n";
	var_dump($article);
	$nbColonneArtcilePage = 5;
	echo "count".count($article)."couf";
	$nbLigneArticlePage = floor(count($article)/5);
	$nbColonneArtcilePageLF = (count($article)%5);

	echo $nbLigneArticlePage."ligne";
	echo $nbColonneArtcilePageLF."colonne sur ligne finale";


//Page suivante
		$nextPage = $articleDeDepart+$nbArticlePage;
		$articleDeDepart = $nextPage;
		echo($nextPage);


//Page précédente
	 if($previousPage-$nbArticlePage > 0){
			$previousPage= $articleDeDepart-$nbArticlePage;
			$pageActuelle=$pageActuelle--;
		}else {
			$previousPage=  $articleDeDepart;
			$articleDeDepart = $previousPage;
		}
		// function nextPageFunct($pageActuelle){
		// 	return $pageActuelle++;
		// }
		// function previousPageFunct($pageActuelle){
		// 	if($previousPage-$nbArticlePage > 0){
		// 	return $pageActuelle--;
		// 	}
		// 	else {
		// 		return $pageActuelle;
		// 	}
		// }

   // Charge la vue
   include("../View/MainPage.view.php");
   ?>
nbColonneArtcilePage
nbColonneArtcilePage
