<?php
  class Categorie {
    private $id;
    private $nom;
	 private $photo;

	 function __construct(int $id, string $nom, string $photo){
		 $this->id = $id;
		 $this->nom = $nom;
		 $this->photo = $photo;
	 }

	 function __get(string $property){
		 return $this->$property;
	 }
  }
?>
