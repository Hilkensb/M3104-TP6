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

	}else if (!empty($_GET['dispo'])) {
  		$article =$dao->getArticleDispo();
		$dispo = "oui";
        $refarticle=$_GET['refartc'];

	}else if (!empty($_GET['dispo'])&&!empty($_GET['refartc'])) {
  		$article =$dao->getArticleDispo();
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
		if ((count($article)-1)%4==0){
			$nbLigneArticlePage = $nbLigneArticlePage;
		}else {
		$nbLigneArticlePage =(count($article)%4);//round($nbArticlePage/($nbArticlePage-count($article)));
		}
		if ((count($article)-1)%5==0){
			$nbColonneArtcilePage = $nbColonneArtcilePage;
		}else {
			$nbColonneArtcilePage =(count($article)%5);
		}
	//	 =round($nbArticlePage/$nbLigneArticlePage);
	}else {
		$nbLigneArticlePage = 4;
		$nbColonneArtcilePage = 5;
	}	
	echo $nbLigneArticlePage."ligne";
		echo $nbColonneArtcilePage."colonne";


//Page suivante
	if($nextPage+$nbArticlePage> $nbArtc){
		$nextPage =$nbArtc -($nbArticlePage-1);

	}else{
		$nextPage=  $articleDeDepart+$nbArticlePage;
		$articleDeDepart = $nextpage;	}
	echo($nextPage);

//Page précédente
	 if($previousPage-$nbArticlePage > 0){
			$previousPage=  $articleDeDepart-$nbArticlePage;
			$pageActuelle=$pageActuelle--;
		}else {
			$previousPage=  $articleDeDepart;
			$articleDeDepart = $previousPage;
		}

   // Charge la vue
   include("../View/MainPage.view.php");
   ?>
nbColonneArtcilePage
nbColonneArtcilePage