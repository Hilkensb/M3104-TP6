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

echo end($article)->ref;
	$nextRef = $dao->next(end($article)->ref);

	 $prev = $dao->prevN($article[0]->ref,20);


	$nextPage=  $articleDeDepart+$nbArticlePage;


	 if($articleDeDepart-$nbArticlePage > 0){
			$previousPage=  $articleDeDepart-$nbArticlePage;
			$pageActuelle=$pageActuelle-1;
		}else {
			$previousPage=  $articleDeDepart;
			$pageActuelle =1;
		}


   // Charge la vue
   include("../View/MainPage.view.php");
   ?>
