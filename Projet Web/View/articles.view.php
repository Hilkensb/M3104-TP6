v<<?php
		if (!empty($_GET["refartc"])){
			$articleID = $_GET["refartc"];
		}else {
			$articleID = 1;
		}
?>
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
		        <img src="../View/Img/<?= $article[$articleID]->photo ?>"/ width= "300" height="300">
	      	</div>
				<div class="">
					<h1>Carte Graphique GTXRagondIncrevable[P]</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<h1 id= prix>649.99€</h1>
				</div>
			</div>
			<div id = FicheTeck>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
