<?php
include_once("../Controler/variable.ctrl.php");

    // Inclusion du modèle
    include_once("../Model/DAO.class.php");

	 // Partie principale


	 echo $_GET['refartc'];
	 echo !empty($_GET['refartc']);

	if (!empty($_GET['refcat'])){
		$categorie = $dao->getNCateg($_GET['refcat'],$nbCategorie);
	}else {
		$categorie = $dao->getNCateg(01,$nbCategorie);
	}
	if(!empty($_GET['refartc'])){
	  $article = $dao->getNArticle($_GET['refartc'],$nbArticlePage);
	  var_dump($article);
	}else {
	  $article = $dao->getNArticle($articleDeDepart,$nbArticlePage);
	}

   $nbArtc = $dao->nbArticle();

	if($nextPage+$nbArticlePage> $nbArtc){
		$nextPage =$nbArtc -($nbArticlePage-1);

	}else{
		$nextPage=  $articleDeDepart+$nbArticlePage;
	}
	echo($nextPage);


	 if($previousPage-$nbArticlePage > 0){
			$previousPage=  $articleDeDepart-$nbArticlePage;
			//$pageActuelle=$pageActuelle--;
		}else {
			$previousPage=  $articleDeDepart;
		}

   // Charge la vue
   include("../View/MainPage.view.php");
   ?>
