<?php
class Menu{
	private $libelle;
	private $idMenu;
	private $idMenuParent;
	private $lien;
	private $representation;
	private $emplacement;
	
	public function __construct($valeurs = array()){
		if(!empty($valeurs)){
			$this->affecte($valeurs);
		}
	}
	
	public function affecte($donnees){
		foreach($donnees as $attribut => $valeur){
			switch($attribut){
				case 'libelle' : $this->setLibelle($valeur); break;
				case 'idMenu' : $this->setIdMenu($valeur); break;
				case 'idMenuParent' : $this->setIdMenuParent($valeur); break;
				case 'lien' : $this->setLien($valeur); break;
				case 'representation' : $this->setRepresentation($valeur); break;
				case 'emplacement' : $this->setEmplacement($valeur); break;
			}
		}
	}
	
	// Setters
	public function setLibelle($libel){
		$this->libelle = $libel;
	}
	public function setIdMenu($numM){
		$this->idMenu = $numM;
	}
	public function setIdMenuParent($numMP){
		$this->idMenuParent = $numMP;
	}
	public function setLien($lien){
		$this->lien = $lien;
	}
	public function setRepresentation($rep){
		$this->representation = $rep;
	}
	public function setEmplacement($empl){
		$this->emplacement = $empl;
	}
	
	// Getters
	public function getLibelle(){
		return $this->libelle;
	}
	public function getIdMenu(){
		return $this->idMenu;
	}
	public function getIdMenuParent(){
		return $this->idMenuParent;
	}
	public function getLien(){
		return $this->lien;
	}
	public function getRepresentation(){
		return $this->representation;
	}
	public function getEmplacement(){
		return $this->emplacement;
	}
}