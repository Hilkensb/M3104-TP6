
<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../Model/DAO.class.php");



	if (!empty($_GET['refcat'])){
     $categorie = $dao->getNCateg($_GET['refcat'],5);
  }else {
	  $categorie = $dao->getNCateg(01,5);
  }
if(!empty($_GET['refartc'])){
  $article = $dao->getNArticle($_GET['refartc'],15);
}else {
  $article = $dao->getNArticle(01,15);
}

    // Charge la vue
    include("../View/MainPage.view.php")
    ?>
