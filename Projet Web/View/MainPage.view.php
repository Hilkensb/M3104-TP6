<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
	  <meta charset="utf-8">
	  <title>InfoVente</title>
	  <link rel="stylesheet" href="../View/design/styleProtoMainPage.css">
  </head>
  <body>
	  <header>
		 <a  href="?refartc=<?= $articleDeDepart ?>&dispo="" "> <img id="Headerimg1" src="../View/Img/Logo.jpg"/ width="100" height="100"></a>
		  <h1>"Vente de matériel informatique"</h1>
	  </header>
	  <nav>
		 <ul id="Navhaut">

			<li><a href="#">hj</a></li>
			<li><form action="../Controler/pageArticle.ctrl.php" method="GET">
          <input required  id="search"  name="nomArticle" type="text" placeholder="Nom d'un article">
          <input id="submit" type="submit" value="Recherche">
</form></li>
			<li><a href="?dispo=oui&refartc=<?= $articleDeDepart ?>">Disponibilité</a></li>
		 </ul>
	  </nav>

	  <div>
		  <nav>

			 <ul id="NavArticle">
				 <?php for($i = 0;$i<$nbCategorie;$i++){ ?>
				  <li><a  href="?refcat=<?= $categorie[$i]->ref ?>&refartc=<?= $refarticle ?>"> <img src="../View/Img/<?= $categorie[$i]->photo ?>"/ width= "130" height="130"></a> </li>
				  <?php } ?>
			 </ul>
		  </nav>
		</div>
	  <div>
		  <img src="../View/Img/LogoProto0000.jpg"/ width= 100% height="300">
		</div>

	  <div>
		  <nav>
			  <?php for($i = 0;$i<$nbLigneArticlePage;$i++){ ?>
			  <ul id="NavArticle">
				  <?php for($j = 0;$j<$nbColonneArtcilePage;$j++){ ?>

 				  <li> <div id="NavArticleDiv"><a href="../Controler/pageArticle.ctrl.php?refarticle=<?= $article[$j+($i*$nbColonneArtcilePage)]->ref ?> ">
				  <img src="../View/Img/<?= $article[$j+($i*$nbColonneArtcilePage)]->photo ?>"/ width= "130" height="130">
				  <p><?= $article[$j+($i*$nbColonneArtcilePage)]->nom ?></p> <h2><?= $article[$j+($i*$nbColonneArtcilePage)]->prix ?></h2></a></div>
 				  <?php } ?>
 			 </ul>
		 	<?php } ?>

			<?php if ($nbColonneArtcilePageLF !=0): ?>
				<?php for($j = 0;$j<$nbColonneArtcilePage;$j++){ ?>
					<ul id="NavArticle">
						<li> <div id="NavArticleDiv"><a href="../Controler/pageArticle.ctrl.php?refarticle=<?= $article[$j+($i*$nbColonneArtcilePage)]->ref ?> ">
	 				  	<img src="../View/Img/<?= $article[$j+($nbLigneArticlePage*$nbColonneArtcilePage)]->photo ?>"/ width= "130" height="130">
	  			 	</ul>
				<?php } ?>
			<?php endif; ?>


		  </nav>
		</div>

	  <footer>
		  <nav>
			 <ul id="NavBas">
				 <?php echo $pageActuelle; ?>
			   <li><a href="?refartc=<?= $previousPage ?>&refcat=<?= $refcategorie?>&dispo=<?= $dispo ?>"><?php $pageActuelle=$pageActuelle-1 ?><</a></li>
				<li><?=  $pageActuelle;// $pageActuelle= (int)(($_GET(['refartc'])+($nbArticlePage/2))/$nbArticlePage) ?></li>
			   <li><a href="?refartc=<?= $nextPage ?>&refcat=<?= $refcategorie?>&dispo=<?= $dispo ?>"><?php $pageActuelle++ ?>></a></li>
			 </ul>
		  </nav>
	  </footer>

  </body>
</html>
