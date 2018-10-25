<?php
  class Categorie {
    private $ref;
    private $nom;
	 private $photo;

	 function __get(string $property){
		 return $this->$property;
	 }
  }
?>
