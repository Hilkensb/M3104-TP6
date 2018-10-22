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
			$resul = $res-fetchall(PDO::FETCH_CLASS,'article');
			return $resul;
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
		function getNArticle(int $ref,int $n) : array {

			 $req = "SELECT * FROM article WHERE ref>=$ref  LIMIT $n  ";

			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
			 return $resul;


		}

}
 ?>
