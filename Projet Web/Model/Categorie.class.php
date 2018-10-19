<?php
  class Categorie {
    private $id;
    private $nom;

	 function __construct(int $id, string $nom){
		 $this->id = $id;
		 $this->nom = $nom;
	 }

	 function __get(string $property){
		 return $this->$property;
	 }
  }
?>
