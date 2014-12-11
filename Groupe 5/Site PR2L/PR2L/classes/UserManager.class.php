<?php
class UserManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}
	
	/**
	 * Ajoute un utilisateur.
	 *
	 * @param User $user        	
	 * @return code retour de la requete
	 */
	public function add($user) {
		// var_dump ( $user );
		$requete = $this->db->prepare ( 'INSERT INTO user 
		(user_login, user_mdp, user_nom, user_prenom, user_tel, user_email, user_adherent, user_typeCompte, user_roles, user_derniereConnexion, user_droit) 
		VALUES 
		(:user_login, :user_mdp, :user_nom, :user_prenom, :user_tel, :user_email, :user_adherent, :user_typeCompte, :user_roles, now(), :droit);' );
		$requete->bindValue ( ':user_login', $user->getUserLogin () );
		$requete->bindValue ( ':user_mdp', $user->getUserMdp () );
		$requete->bindValue ( ':user_nom', $user->getUserNom () );
		$requete->bindValue ( ':user_prenom', $user->getUserPrenom () );
		$requete->bindValue ( ':user_tel', $user->getUserTel () );
		$requete->bindValue ( ':user_email', $user->getUserEmail () );
		$requete->bindValue ( ':user_adherent', $user->getUserAdherent () );
		$requete->bindValue ( ':user_typeCompte', $user->getUserTypeCompte () );
		$requete->bindValue ( ':user_roles', $user->getUserRoles () );
		$requete->bindValue (':droit', $user->getUserDroit());
		
		// var_dump($requete);
		$retour = $requete->execute ();
		return $retour;
	}
	
	/**
	 * Retourne une liste d'objets contenant tous les utilisateurs.
	 *
	 * @return multitype:User
	 */
	public function getAllUsers() {
		$listeUsers = array ();
		
		$sql = 'SELECT * FROM user';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $user = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeUsers [] = new User ( $user );
		}
		$requete->closeCursor ();
		return $listeUsers;
	}
	
	/**
	 * Update de la dernière date de connexion
	 *
	 * @param unknown $user_id        	
	 * @return unknown
	 */
	public function modifDerniereCo($user_id) {
		$sql = 'update user set user_derniereConnexion = now() where user_id =' . $user_id;
		$requete = $this->db->prepare ( $sql );
		$retour = $requete->execute ();
		return $retour;
	}
	
	/**
	 * Permet de vérifier que deux utilisateurs n'ont pas le même login.
	 * <br/>
	 * Si on retourne un résultat, le login existe déjà, il ne faut pas ajouter la personne. <br/>
	 * Si on retourne null, le login n'existe pas, et on peut donc ajouter une personne. <br/>
	 *
	 * @param unknown $user_login        	
	 * @return User|NULL
	 */
	public function VerifLogin($user_login) {
		// var_dump ( $user_login );
		$sql = "SELECT * FROM user WHERE user_login=:user_login";
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ":user_login", $user_login );
		
		$requete->execute ();
		
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
		
		if ($resultat != null) // Le login existe déjà
{
			return new User ( $resultat );
			// Il s'agit d'un objet User
		} else {
			return null;
			// Le login n'a pas été trouvé, il n'existe donc pas
		}
	}
	
	/**
	 * Permet de tester si des logins sont valides ou non.
	 * <br/>
	 * Prise en compte du cryptage du mot de passe. <br/>
	 *
	 * @param char $login        	
	 * @param char $mdp
	 * 		Mot de passe en clair !
	 * @return boolean
	 */
	public function testConnexion($login, $mdp) {
		$sql = "SELECT user_login FROM user WHERE user_login=:login AND user_mdp=:mdp";
		
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':login', $login );
		$requete->bindValue ( ':mdp', (sha1 ( sha1 ( $mdp ) . SEL )) );
		//var_dump($login);var_dump($mdp);var_dump($requete);var_dump(sha1 ( sha1 ( $mdp ) . SEL ));
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
		
		if ($resultat != NULL) {
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Permet de supprimer une personne de la BD.
	 * <br/>
	 * Actuellement, on ne le delete que d'une table, mais il faudra penser à peut-être MAJ la fonction plus tard <br/>
	 * $user contient le user_id de l'utilisateur à supprimer <br/>
	 *
	 * @param int $user        	
	 */
	public function supprimerUser($user) {
		$sql = "DELETE FROM user WHERE user_id=:user_id";
		
		$requete = $this->db->prepare ( $sql );
		
		$requete->bindValue ( ':user_id', $user );
		
		$requete->execute ();
	}
	
	/**
	 * A remplacer par un count() dans la page ou on veut l'appeler, plus pratique que cette fonction
	 */
	public function getNbUser() {
		$sql = 'select * from user';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $user = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$sql = $sql + 1;
		}
		$requete->closeCursor ();
		return $sql;
	}
	
	/**
	 * Permet de modifier un utilisateur, en modifiant tous ses champs sauf son id et sa date de dernière connexion.
	 * $user ne doit contenir aucun champ vide.
	 *
	 * @param User $user        	
	 * @return code retour de la requete
	 */
	public function modifierUser($user) {
		$requete = $this->db->prepare ( "UPDATE user SET user_prenom=:prenom, user_nom=:nom,
		user_tel=:tel, user_email=:mail,
		user_mdp=:pwd, user_login=:login, user_adherent=:adherent, user_typeCompte=:typeCompte, user_roles=:roles
		WHERE user_id = :user_id" );
		
		$requete->bindValue ( ':nom', $user->getUserNom () );
		$requete->bindValue ( ':prenom', $user->getUserPrenom () );
		$requete->bindValue ( ':tel', $user->getUserTel () );
		$requete->bindValue ( ':mail', $user->getUserEmail() );
		$requete->bindValue ( ':login', $user->getUserLogin () );
		$requete->bindValue ( ':pwd', $user->getUserMdp () );
		$requete->bindValue ( ':adherent', $user->getUserAdherent () );
		$requete->bindValue ( ':typeCompte', $user->getUserTypeCompte () );
		$requete->bindValue ( 'roles', $user->getUserRoles () );
		
		$requete->bindValue ( ':user_id', $user->getUserId () ); // permet de modifier la bonne personne
		
		$requete->execute ();
		return $requete;
	}
	
	/**
	 * Permet de récupérer les détails d'une personne à l'aide de son login <br />
	 * Retoure un objet User si l'utilisateur est trouvé, sinon null <br />
	 *
	 * @param char $login        	
	 * @return User|NULL
	 */
	public function getPersonneParLogin($login) {
		$sql = "SELECT * FROM user WHERE user_login=:login";
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':login', $login );
		
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
		
		if ($resultat != null) {
			return new User ( $resultat );
			// On retourne un objet Personne
		} else {
			return null;
		}
	}
	
	/**
	 * Retoure une personne selon son user_id
	 * 
	 * @param int $idPersonne        	
	 * @return Personne|NULL
	 */
	public function getPersonneParId($idPersonne) {
		$sql = "SELECT * FROM user WHERE user_id=:user_id";
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':user_id', $idPersonne );
		
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
		
		if ($resultat != null) {
			return new User( $resultat );
			// On retourne un objet Personne
		} else {
			return null;
		}
		$requete->closeCursor ();
	}
	
// 	// TODO
// 	// /!\
// 	// Fonctions de Sebastien à reprendre/commenter pour pouvoir les utiliser correctement.
// 	// /!\
// 	public function getUserNom($user_login, $user_mdp) {
// 		$sql = 'select * from user where user_login=' . $user_login . ' and user_mdp = ' . $user_mdp . ')';
// 		$requete = $this->db->prepare ( $sql );
// 		$requete->execute ();
// 		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $resultat;
// 	}
// 	public function getUserIdCorrespondant($user_login, $user_mdp) {
// 		$requete = $this->db->prepare ( "SELECT user_id FROM user WHERE
// 		user_login = :user_login and user_mdp = :user_mdp" );
// 		$requete->bindValue ( ':user_login', $user_login );
// 		$requete->bindValue ( ':user_mdp', $user_mdp );
// 		$retour = $requete->execute ();
// 		$retour = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $retour;
// 	}
// 	public function getUserCorrespondant($user_id) {
// 		$requete = $this->db->prepare ( "SELECT * FROM user WHERE
// 		user_id = :user_id" );
// 		$requete->bindValue ( ':user_id', $user_id );
// 		$requete->execute ();
// 		$retour = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $retour;
// 	}
// 	public function getUserCorrespondantNb($user_id) {
// 		$sql = "SELECT count(*) FROM user WHERE user_id = '" . $user_id;
// 		$requete = $this->db->prepare ( $sql );
// 		$requete->execute ();
// 		$count = 0;
// 		while ( $user = $requete->fetch ( PDO::FETCH_OBJ ) ) {
// 			$count = $count + 1;
// 		}
// 		$requete->closeCursor ();
// 		return $count;
// 	}
}
?>