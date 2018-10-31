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
       }catch (PDOException $e){
          die("erreur de connexion:".$e->getMessage());
       }
    }
    //Renvoie l'article correspondent à la référence d'article $ref
		function readRefArticle(int $ref) : Article{
			$req = "SELECT * FROM article WHERE ref=$ref";
			$res = $this->db->query($req);
			$resul = $res->fetchall(PDO::FETCH_CLASS,'article');
			return $resul[0];
		}
    //Renvoie l'article correspondent au nom de l'article $nom
    function readNomArticle(string $nom) : Article{
			$req = "SELECT * FROM article WHERE nom='$nom' COLLATE NOCASE ";
			$res = $this->db->query($req);
			$resul = $res->fetchall(PDO::FETCH_CLASS,'article');
      if (empty($resul) ){
        throw new Exception();
      }
			return $resul[0];
		}
    //retourne la catégorie correspondent à la référence de catégorie $ref
		function readRefCategorie(int $ref) : Categorie{
			$req = "SELECT * FROM categorie WHERE ref=$ref";
			$res = $this->db->query($req);
			$resul = $res-fetchall(PDO::FETCH_CLASS,'categorie');
			return $resul;
		}
    //renvoie les $n catégorie suivant la catégorie de référence $ref
		function getNCateg(int $ref,int $n) : array {
			 $req = "SELECT * FROM categorie WHERE  ref>=$ref  LIMIT $n  ";
			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'categorie');
			 return $resul;
		}
    //retourne une liste d'article appartenant à une catègorie $categChoisit
		function getArticleCate(int $categChoisit) : array {
			 $req = "SELECT * FROM article WHERE categorie=$categChoisit ";
			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
			 return $resul;
		}
    //renvoie les $n article suivant la article de référence $ref
		function getNArticle(int $ref,int $n) : array {
			 $req = "SELECT * FROM article WHERE ref>=$ref  LIMIT $n  ";
			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_CLASS,'article');
			 return $resul;
		}
    //renvoie le nombre d'article prèsent dans la base de donnée
	  function nbArticle(): int {
			 $req = "SELECT count(ref) as nbarticle FROM article";
			 $res =$this->db->query($req);
			 $resul =$res ->fetchall(PDO::FETCH_ASSOC)[0];
			  return (int) $resul['nbarticle'];
		  }
      //renvoie le nombre de catégorie prèsent dans la base de donnée
		  function nbCategorie(): int {
			   $req = "SELECT count(ref) as nbcategorie FROM categorie";
				 $res =$this->db->query($req);
			   $resul =$res ->fetchall(PDO::FETCH_ASSOC)[0];
			   return (int) $resul['nbcategorie'];
		  }
      //renvoie la liste des articles qui sont disponible
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
