<?php
    include_once("../Controler/variable.ctrl.php");
    include_once("../Model/DAO.class.php");

    $bool = TRUE;
		if (!empty($_GET["refarticle"]) && empty($_GET["nomArticle"])){
			$article = $dao->readRefArticle($_GET["refarticle"]);
		}


    if (empty($_GET["refarticle"]) && !empty($_GET["nomArticle"])){
      try{
        $article = $dao->readNomArticle($_GET["nomArticle"]);
      }catch(Exception  $e){
        include_once("../View/notFound.view.php");
        $bool = FALSE;
      }
    }
    if ($bool){
        include_once("../View/articles.view.php");
    }else{
        $bool = TRUE;
    }

?>
