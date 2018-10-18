<html>
<head>
  <title>Bricomachin</title>
  <meta charset="UTF-8"/>
  <meta http-equiv="content-type" content="text/html;" />
  <meta name="author" content="Jean-Pierre Chevallet" />
  <link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
  <header>
    <h1>Bricomachin, le bricolage malin </h1>
    <p><img src="../view/design/pub.png"/></p>
  </header>
  <?php


  ///////////////////////////////////////////////////////
  //   A COMPLETER
  ///////////////////////////////////////////////
  // Si une categorie est définie
	if (empty($categorie)){
		$categorie = $articles[0]->categorie;
    }
	$dao->getCat($categorie)->getpath();
  ?>

  <nav>
    <!-- Bouton de retour au début de la liste -->
    <a href="?"><img src="../view/design/home.png"/></a>
    <!-- Bouton de retour à la page précédente -->
    <a href="?ref=<?= end($prev)->ref .'&categorie='.$categorie?>">&lt;  </a>
    <!-- Bouton pour passer à la page suivante -->
    <a href="?ref=<?= $nextRef.'&categorie='.$categorie?>">></a>
  </nav>

  <?php
  ///////////////////////////////////////////////////////
  //  A COMPLETER
  ///////////////////////////////////////////////

  // Affichage des articles
  ?>
  <?php for($i =0;$i<12;$i++){ ?>
    <article> <h2> <?= $articles[$i]->libelle ?></h2> <img src="http://www-info.iut2.upmf-grenoble.fr/intranet/enseignements/ProgWeb/data/bricomachin/img/<?= $articles[$i]->image ?>" /><?=$articles[$i]->prix ?> </article>
  <?php }  ?>
  <footer>
  </p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
