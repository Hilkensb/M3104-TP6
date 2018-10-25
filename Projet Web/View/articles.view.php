v<
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>RatKistan Produit</title>
		<link rel="stylesheet" href="design/styleProtoArticlePage.css">
	</head>
	<body>
		<header>
			<img id="Headerimg1" src="Img/Logo.jpg"/ width="100" height="100">
		  	<h1>"IL Est Increvable"</h1>
		</header>
		<nav>
		  <ul id="Navhaut">
			 <li><a href="#">Nouveau Articles</a></li>
			 <li><a href="#">Lorem</a></li>
			 <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
		  </ul>
		</nav>

		<div id=mainArticle>
			<div id = Description>
				<div>
		        <img src="../View/Img/<?= $aPhoto?>"/ width= "300" height="300">
	      	</div>
				<div class="">
					<h1><?= $aNom?></h1>
					<p><?= $aDescription?></p>
					<h1 id= prix><?= $aPrix?>€</h1>
				</div>
			</div>
			<div id = FicheTeck>
				<p><?= $aCaracteristique?></p>
			</div>
		</div>

		<div id = Article_Recomander>
			<h3>Article recommander</h3>
			<div class="">
				<nav>
				  <ul id="NavArticle_Recomander">
						<li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
						<li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  </ul>
				</nav>
			</div>
      </div>

		<footer>
			<nav>
			  <ul id="NavBas">
				 <li><a href="#">1</a></li>
				 <li><a href="#">2</a></li>
				 <li><a href="#">3</a></li>
				 <li><a href="#">4</a></li>
				 <li><a href="#">5</a></li>
				 <li><a href="#">6</a></li>
			  </ul>
			</nav>
		</footer>

	</body>
</html>
