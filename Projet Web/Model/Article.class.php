<?php
   class Article{
      private $ref;
      private $nom;
      private $caract;
      private $prix;
      private $photo;
      private $categorie;
      private $marque;
		private $desc;
		private $date;
    }

	function __construct($ref, $nom, $caract, $prix, $photo=NULL,$categorie,$marque,$desc=NULL){
		$this->ref = $ref;
		$this->nom = $nom;
		$this->caract = $caract;
		$this->prix = $prix;
		$this->photo = $photo;
		$this->categorie = $categorie;
		$this->marque = $marque;
		$this->desc = $desc;
   }

   function __get(string $property){
      return $this->$property;
   }
?>
