<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
	  <meta charset="utf-8">
	  <title>RatKistan</title>
	  <link rel="stylesheet" href="../View/design/styleProtoMainPage.css">
  </head>
  <body>
	  <header>
		  <img id="Headerimg1" src="../View/Img/Logo.jpg"/ width="100" height="100">
		  <h1>"IL Ne Meur Jamais"</h1>
	  </header>
	  <nav>
		 <ul id="Navhaut">
			<li><a href="#">Nouveau Articles</a></li>
			<li><a href="#">Lorem</a></li>
			<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
		 </ul>
	  </nav>

	  <div>
		  <nav>

			 <ul id="NavArticle">
				 <?php for($i = 0;$i<$nbCategorie;$i++){ ?>
				  <li> <img src="../View/Img/<?= $categorie[$i]->photo ?>"/ width= "130" height="130">
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

 				  <li> <div id="NavArticleDiv"><img src="../View/Img/<?= $article[$j+($i*$nbColonneArtcilePage)]->photo ?>"/ width= "130" height="130"> <p><?= $article[$j+($i*$nbColonneArtcilePage)]->nom ?></p> <h2><?= $article[$j+($i*$nbColonneArtcilePage)]->prix ?></h2></div>
 				  <?php } ?>
 			 </ul>
		 	<?php } ?>

		  </nav>
		</div>

	  <footer>
		  <nav>
			 <ul id="NavBas">

			   <li><a href="?refartc=<?= $previousPage ?>"><?php $pageActuelle=$pageActuelle-1; ?><</a></li>
			   <li><?= $pageActuelle  ?></li>
			   <li><a href="?refartc=<?= $nextPage ?>"><?php $pageActuelle=$pageActuelle+1; ?>></a></li>
			 </ul>
		  </nav>
	  </footer>

  </body>
</html>
