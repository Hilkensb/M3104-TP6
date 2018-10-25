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

   function __get(string $property){
      return $this->$property;
   }
}
?>
