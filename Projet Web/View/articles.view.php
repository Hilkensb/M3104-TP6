
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>RatKistan Produit</title>
		<link rel="stylesheet" href="../View/design/styleProtoArticlePage.css">
	</head>
	<body>
		<header>
   <a  href="../Controler/afficherArticles.ctrl.php?refartc=<?= $articleDeDepart ?>&dispo="" "> <img id="Headerimg1" src="../View/Img/Logo.jpg"/ width="100" height="100"></a>

		  	<h1>"IL Est Increvable"</h1>
		</header>
		<nav>
		  <ul id="Navhaut">
			 <li></li>

		  </ul>
		</nav>

		<div id="mainArticle">
			<div id = "Description">
				<div>
		        <img src="../View/Img/<?= $article->photo ?>"/ width= "300" height="300">
	      	</div>
				<div class="">
					<h1>Nom du produit : <?= $article->nom?></h1>
					<p>Description du produit : <?= $article->description?></p>
					<h1 id= prix>Prix : <?= $article->prix?>€</h1>
				</div>
         <p> Disponible dans nos magasin : <?= $article->disponibilite ?> </p>
			</div>
			<div id = FicheTeck>
				<p>Information technique : <br> <?= $article->caracteristique?></p>
			</div>
		</div>

		<div id = Article_Recomander>
			<h3>Article recommander</h3>
			<div class="">
				<nav>
				  <ul id="NavArticle_Recomander">
						<li> <img src="../View/Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="../View/Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="../View/Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="../View/Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="../View/Img/LogoProto0000.jpg"/ width= "130" height="130">
				  </ul>
				</nav>
			</div>
      </div>



	</body>
</html>
