<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
	  <meta charset="utf-8">
	  <title>RatKistan</title>
	  <link rel="stylesheet" href="../styleProtoMainPage.css">
  </head>
  <body>
	  <header>
		  <img id="Headerimg1" src="Img/Logo.jpg"/ width="100" height="100">
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
				 <?php for($i = 0;$i<5;$i++){ ?>
				  <li> <img src="Img/<?= $categorie[$i]->id ?>"/ width= "130" height="130">
				  <?php } ?>
			 </ul>
		  </nav>
		</div>
	  <div>
		  <img src="Img/LogoProto0000.jpg"/ width= 100% height="300">
		</div>

	  <div>
		  <nav>
			 <ul id="NavArticle">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
			 </ul>
			 <ul id="NavArticle">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
			 </ul>
			 <ul id="NavArticle">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
			 </ul>
			 <ul id="NavArticle">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
				  <li> <img src="Img/LogoProto0000.jpg"/ width= "130" height="130">
			 </ul>
		  </nav>
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