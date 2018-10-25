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
 echo $diff;
 echo pow($diff,2);
	 echo "bruh".sqrt(pow($diff,2)) ." fgd";
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

	  var_dump($article);
  }else if(!empty($_GET['refartc'])&& !empty($_GET['refcat'])&& empty($_GET['dispo'])){
	  $article =$dao->getArticleCate($_GET['refcat']);
	  var_dump($article);
	  $refarticle=$_GET['refartc'];

  }else if (!empty($_GET['dispo'])) {
  		$article =$dao-
} else{
$article = $dao->getNArticle($articleDeDepart,$nbArticlePage);
	  $refarticle=$articleDeDepart;
	}


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
