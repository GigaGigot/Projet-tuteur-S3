<?php
class UtilisateurManager{
	private $db;
	
	public function __construct($db){
		$this->db = $db;
	}
	
	public function add($utilisateur){
		$requete = $this->db->prepare('insert into Utilisateur (login,password,nom,prenom) values (:login,:password,:nom,:prenom);');
		$requete->bindValue(':login', $utilisateur->getLogin());
		$requete->bindValue(':password', $utilisateur->getPassword());
        $requete->bindValue(':nom', $utilisateur->getNom());
		$requete->bindValue(':prenom', $utilisateur->getPrenom());
		
		$retour=$requete->execute();
		return $retour;
	}
	
	public function getAllUtilisateur(){
		$listeUtilisateur = array();
		$sql = 'select * from Utilisateur';
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