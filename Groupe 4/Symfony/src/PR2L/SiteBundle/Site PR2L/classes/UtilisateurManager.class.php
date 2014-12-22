<?php
/*
Cette classe permet de faire les opérations entre la classe utilisateur et la base de données
variables : la base de données.
*/
class UtilisateurManager{
	private $db;
	
    /*
    Cette fonction permet de construire la classe UtilisateurManager en initialisant la variable db
    */
	public function __construct($db){
		$this->db = $db;
	}
	
    /*
    Cette fonction permet d'ajouter un utilisateur dans la base de données
    paramètres : l'instance de la classe utilisateur à ajouter dans la base de données
    */
    
	public function add($utilisateur){
		$requete = $this->db->prepare('insert into utlisateur (login,password,nom,prenom,droits) values (:login,:password,:nom,:prenom,:droits);');
		$requete->bindValue(':login', $utilisateur->getLogin());
		$requete->bindValue(':password', $utilisateur->getPassword());
        $requete->bindValue(':nom', $utilisateur->getNom());
		$requete->bindValue(':prenom', $utilisateur->getPrenom());
        $requete->bindValue(':droits', $utilisateur->getDroits());
		
		$retour=$requete->execute();
		return $retour;
	}
    
    public function update($utilisateur){
        $requete = $this->db->prepare('update utlisateur set login=:login, password=:password, nom=:nom, prenom=:prenom, droits=:droits where idUtilisateur = :id');
        $requete->bindValue(':id', $utilisateur->getId());
        $requete->bindValue(':login', $utilisateur->getLogin());
		$requete->bindValue(':password', $utilisateur->getPassword());
        $requete->bindValue(':nom', $utilisateur->getNom());
		$requete->bindValue(':prenom', $utilisateur->getPrenom());
        $requete->bindValue(':droits', $utilisateur->getDroits());
		
		$retour=$requete->execute();
		return $retour;
    }
    
    /*
    Cette fonction lit dans la base de données et retourn un tableau d'utilisateur contenant tous les utilisateurs
    */
	
	public function getAllUtilisateur(){
		$listeUtilisateur = array();
		$sql = 'select * from utilisateur';
		$requete = $this->db->prepare($sql);
		$requete->execute();
		
		while($utilisateur = $requete->fetch(PDO::FETCH_ASSOC)){
			$listeUtilisateur[] = new Utilisateur($utilisateur);
		}
		$requete->closeCursor();
		
		return $listeUtilisateur;
	}
}

?>