<?php
    include_once("../Controler/variable.ctrl.php");
    include_once("../Model/DAO.class.php");
		if (!empty($_GET["refarticle"])){
			$article = $dao->readRefArticle($_GET["refarticle"]);
		}else {
			$article =  $dao->readRefArticle(1);
		}
	
    include_once("../View/articles.view.php");
?>