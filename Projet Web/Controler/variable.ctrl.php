  <?php
  //variable utiliser par la suite , simplifie l'étape de debug et ainsi évite de chercher les variable dans tous le code
	 $nbLigneArticlePage = 4;
	 $nbColonneArtcilePage = 5;

	 $nbArticlePage = $nbColonneArtcilePage*$nbLigneArticlePage;
	 $articleDeDepart = 1;
    $premierArticleDeLaMainPage =$articleDeDepart;
	 $nbCategorie = 5;
	 $pageActuelle=1;
	 $nextPage = $articleDeDepart+$nbArticlePage;
	 $previousPage = $articleDeDepart-$nbArticlePage;

?>
