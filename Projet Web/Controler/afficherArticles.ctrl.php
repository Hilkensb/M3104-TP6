
<?php
    // Partie principale

    // Inclusion du modèle
    include_once("../model/DAO.class.php");



	if (!empty($_GET['ref'])){
     $categorie = $dao->getNCateg($_GET['ref'],5);
  }else {
	  $categorie = $dao->getNCateg(01,5);
  }



    // Charge la vue
    include("../view/MainPage.view.php")
    ?>
