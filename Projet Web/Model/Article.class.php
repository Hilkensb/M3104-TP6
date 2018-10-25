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
		private $pointdevente;
		private $disponibilité;

   function __get(string $property){
      return $this->$property;
   }
}
?>
