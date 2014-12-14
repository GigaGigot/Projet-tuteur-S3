<?php
class MenuManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
        $db->exec("SET CHARACTER SET utf8");
	}
    
	public function add($menu){
		$req = $this->db->prepare(
		'INSERT INTO Menu (libelle, idMenuParent, lien, representation, emplacement) 
		VALUES (:libelle, :idMenuParent, :lien, :representation, :emplacement)');
		$req->bindValue(':libelle', $menu->getLibelle());
		$req->bindValue(':idMenuParent', $menu->getIdMenuParent());
		$req->bindValue(':lien', $menu->getLien());
		$req->bindValue(':representation', $menu->getRepresentation());
		$req->bindValue(':emplacement', $menu->getEmplacement());
		
		$retour = $req->execute();
		
		return $retour;
	}
    
	public function update($menu){
		$req = $this->db->prepare(
		'UPDATE Menu 
		SET libelle = :libelle, idMenuParent = :idMenuParent, lien = :lien, representation = :representation, emplacement = :emplacement
		WHERE idMenu = :idMenu');
		$req->bindValue(':libelle', $menu->getLibelle());
		$req->bindValue(':idMenuParent', $menu->getIdMenuParent());
		$req->bindValue(':lien', $menu->getLien());
		$req->bindValue(':representation', $menu->getRepresentation());
		$req->bindValue(':emplacement', $menu->getEmplacement());
		
		$retour = $req->execute();
		
		return $retour;
	}
    
	public function delMenuByID($numMenu){
		$req = $this->db->prepare(
		'DELETE FROM Menu
		WHERE idMenu = :idMenu');
		$req->bindValue(':idMenu', $numMenu);
		$retour = $req->execute();
		
		return $retour;
	}
	
	public function getAllMenusParents(){
		$listeMenus = array();
		$sql = 'SELECT libelle, idMenu, idMenuParent, lien, representation, emplacement
		FROM Menu
        WHERE idMenuParent is null';
		$req = $this->db->prepare($sql);
		$req->execute();
		
		while($menu = $req->fetch(PDO::FETCH_OBJ)){
			$listeMenus[] = new Menu($menu);
		}
		$req->closeCursor();
		
		return $listeMenus;
		
	}
    
    public function getAllMenusByParent($numMenuP){
		$listeMenus = array();
		$sql = 'SELECT libelle, idMenu, idMenuParent, lien, representation, emplacement
		FROM Menu
        WHERE idMenuParent = :numMenuP';
		$req = $this->db->prepare($sql);
        $req->bindValue(':numMenuP', $numMenuP);
		$req->execute();
		
		while($menu = $req->fetch(PDO::FETCH_OBJ)){
			$listeMenus[] = new Menu($menu);
		}
		$req->closeCursor();
		
		return $listeMenus;
		
	}
	
	public function getMenuByID($numMenu){
		$req = $this->db->prepare('SELECT * 
		FROM Menu WHERE idMenu = :idMenu');
		$req->bindValue(':idMenu', $numMenu);
		$nom = $req->execute();
		
		while($menu = $req->fetch(PDO::FETCH_OBJ)){
			$leMenu = new Menu($menu);
		}
		$req->closeCursor();
			
		return $leMenu;
	}
    
}