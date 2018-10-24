<?php
  class Categorie {
    private $id;
    private $nom;
	 private $photo;

	 function __get(string $property){
		 return $this->$property;
	 }
  }
?>
