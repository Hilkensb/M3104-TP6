 <?php
 // Creation de l'unique objet DAO
 $dao = new DAO();

 // Le Data Access Object
 // Il représente la base de donnée
 class DAO {
     // L'objet local PDO de la base de donnée
     private $db;
     // Le type, le chemin et le nom de la base de donnée
     private $database = 'sqlite:../data/db/bricomachin.db';

     // Constructeur chargé d'ouvrir la BD
     function __construct() {
         ///////////////////////////////////////////////////////
         //  A COMPLETER
         ///////////////////////////////////////////////
         try {
           $this->db = new PDO($this->database);
         }
         catch (PDOException $e){
           die("erreur de connexion:".$e->getMessage());
         }
       }

		function readRefArticle() : Article{

		}

		function readRefCategorie() : Categorie{

		}

}
 ?>
