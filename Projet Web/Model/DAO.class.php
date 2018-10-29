 <?php
     require_once("../Model/Article.class.php");
 require_once("../Model/Categorie.class.php");

 // Creation de l'unique objet DAO
 $dao = new DAO();

 // Le Data Access Object
 // Il représente la base de donnée
 class DAO {
     // L'objet local PDO de la base de donnée
     private $db;
     // Le type, le chemin et le nom de la base de donnée
     private $database = 'sqlite:../Data/db/data.db';

     // Constructeur chargé d'ouvrir la BD
     function __construct() {
		  try {
           $this->db = new PDO($this->database);
         }
         catch (PDOException $e){
           die("erreur de connexion:".$e->getMessage());
         }
       }

		function readRefArticle(int $ref) : Article{
			$req = "SELECT * FROM article WHERE ref=$ref";
			$res = $this->db->query($req);
			$resul = $res->fetchall(PDO::FETCH_CLASS,'article');
			return $resul[0];
		}

    function readNomArticle(int $nom) : Article{
			$req = "SELECT * FROM article WHERE nom=$nom COLLATE NOCASE";
			$res = $this->db->query($req);
			$resul = $res->fetchall(PDO::FETCH_CLASS,'article');
			return $resul[0];
		}

		function readRefCategorie(int $ref) : Categorie{
			$req = "SELECT * FROM categorie WHERE ref=$ref";
			$res = $this->db->query($req);
			$resul = $res-fetchall(PDO::FETCH_CLASS,'categorie');
			return $resul;
		}
		function getNCateg(int $ref,int $n) : array {

			 $req = "SELECT * FROM categorie WHERE  ref>=$ref  LIMIT $n  ";

			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'categorie');
			 return $resul;


		}
		function getArticleCate(int $categChoisit) : array {

			 $req = "SELECT * FROM article WHERE categorie=$categChoisit ";

			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
			 return $resul;


		}
		function getNArticle(int $ref,int $n) : array {

			 $req = "SELECT * FROM article WHERE ref>=$ref  LIMIT $n  ";

			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
			 return $resul;


		}

		// Acces à la référence qui suit la référence $ref dans l'ordre des références
        function next(int $ref) : int {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM article WHERE ref>=$ref ORDER BY ref ASC LIMIT 1 ";

      			$res =$this->db->query($req);
            $resul =$res->fetchall(PDO::FETCH_CLASS,'article');
				return $resul[0]->ref;
        }

        // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
        function prevN(int $ref,int $n): array {
            ///////////////////////////////////////////////////////
            //  A COMPLETER
            ///////////////////////////////////////////////
            $req = "SELECT * FROM article WHERE ref<$ref ORDER BY ref DESC LIMIT $n ";

      			$res =$this->db->query($req);
            $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
            return array_reverse($resul);
        }
		  function nbArticle(): int {
			   ///////////////////////////////////////////////////////
			   //  A COMPLETER
			   ///////////////////////////////////////////////
			   $req = "SELECT count(ref) as nbarticle FROM article";

				  $res =$this->db->query($req);
			   $resul =$res ->fetchall(PDO::FETCH_ASSOC)[0];
			   return (int) $resul['nbarticle'];
		  }
		  function nbCategorie(): int {
			   ///////////////////////////////////////////////////////
			   //  A COMPLETER
			   ///////////////////////////////////////////////
			   $req = "SELECT count(ref) as nbcategorie FROM categorie";

				  $res =$this->db->query($req);
			   $resul =$res ->fetchall(PDO::FETCH_ASSOC)[0];
			   return (int) $resul['nbcategorie'];
		  }
		  function getArticleDispo() : array {

  			 $req = "SELECT * FROM article WHERE disponibilite='Oui' ";

  			 $res =$this->db->query($req);
  			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
  			 return $resul;


  		}
		function getArticleDispoRefArticle(int $ref) : array {

  			 $req = "SELECT * FROM article WHERE disponibilite='Oui' and ref>=$ref  ";

  			 $res =$this->db->query($req);
  			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
  			 return $resul;


  		}
}
 ?>
