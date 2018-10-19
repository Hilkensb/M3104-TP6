<?php
   class Article{
      private $ref;
      private $nom;
      private $caracteristique;
      private $prix;
      private $photo;
      private $categorie;
      private $marque;
		private $description;
		private $date;
    }

	function __construct(int $ref,string $nom,string $caract,float $prix,string $photo=NULL,int $categorie,string $marque,string $desc=NULL){
		$this->ref = $ref;
		$this->nom = $nom;
		$this->caracteristique = $caract;
		$this->prix = $prix;
		$this->photo = $photo;
		$this->categorie = $categorie;
		$this->marque = $marque;
		$this->description = $desc;
   }

   function __get(string $property){
      return $this->$property;
   }
?>
