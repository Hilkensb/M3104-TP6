
<?php
    // Partie principale
	 $nbArticlePage = 15;
	 $articleDeDepart = 1;
	 $nbCategorie = 5;
	 $nextPage = $articleDeDepart+$nbArticlePage;

    // Inclusion du modèle
    include_once("../Model/DAO.class.php");



	if (!empty($_GET['refcat'])){
		$categorie = $dao->getNCateg($_GET['refcat'],$nbCategorie);
	}else {
		$categorie = $dao->getNCateg(1,$nbCategorie);
	}
	if(!empty($_GET['refartc'])){
	  $article = $dao->getNArticle($_GET['refartc'],$nbArticlePage);
	}else {
	  $article = $dao->getNArticle($articleDeDepart,$nbArticlePage);
	}

    // Charge la vue
    include("../View/MainPage.view.php")
    ?>
