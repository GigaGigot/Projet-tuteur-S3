<?php
/**
 * 
 * @author Sylvain
 * Classe qui definit un utilisateur selon plusieurs paramètres 
 * - son id (auto-incrément)
 * - son login
 * - son mot de passe (crypté dans la base de données)
 * - son nom
 * - son prénom
 * - son numéro de téléphone
 * - son email
 * - son statut en tant qu'adhérent ou non (o/n)
 * - son type de compte, c-a-d le fait de savoir si c'est un contributeur, modérateur, ...
 * - son role dans "la société" : directeur, secrétaire, ...
 * - sa date de dernière connexion 
 */
class User {
	private $user_id;
	// en auto increment
	private $user_login;
	private $user_mdp;
	// on cryptera le mot de passe avec un grain de sel
	private $user_nom;
	private $user_prenom;
	private $user_tel;
	private $user_email;
	private $user_adherent;
	// si oui, alors, la personne à accès au champs cachés
	// si non, c'est un visiteur qui n'a pas accès au champ cachés
	private $user_typeCompte;
	// adhérent - contributeur - moderateur - ...
	private $user_roles;
	// listes des rôles : sécrétaire, directeur, ...
	private $user_derniereConnexion;
	// Date et heure de dernière connexion
	private $user_droit;
	//contient les droit de l'utilisateur pour l'affichage des pages. 
	public function __construct($valeurs = array()) {
		if (! empty ( $valeurs )) {
			$this->affecte ( $valeurs );
		}
	}
	public function affecte($donnees) {
		foreach ( $donnees as $attribut => $valeurs ) {
			switch ($attribut) {
				case 'user_id' :
					$this->setUserId ( $valeurs );
					break;
				case 'user_login' :
					$this->setUserLogin ( $valeurs );
					break;
				case 'user_mdp' :
					$this->setUserMdp ( $valeurs );
					break;
				case 'user_nom' :
					$this->setUserNom ( $valeurs );
					break;
				case 'user_prenom' :
					$this->setUserPrenom ( $valeurs );
					break;
				case 'user_tel' :
					$this->setUserTel ( $valeurs );
					break;
				case 'user_email' :
					$this->setUserEmail ( $valeurs );
					break;
				case 'user_adherent' :
					$this->setUserAdherent ( $valeurs );
					break;
				case 'user_typeCompte' :
					$this->setUserTypeCompte ( $valeurs );
					break;
				case 'user_roles' :
					$this->setUserRoles ( $valeurs );
					break;
				case 'user_derniereConnexion' :
					$this->setUserDerniereConnexion ( $valeurs );
					break;
				case 'user_droit' :
					$this->setUserDroit($valeurs);
					break;
			}
		}
	}
	public function getUserId() {
		return $this->user_id;
	}
	public function setUserId($user_id) {
		$this->user_id = $user_id;
	}
	public function getUserLogin() {
		return $this->user_login;
	}
	public function setUserLogin($user_login) {
		$this->user_login = $user_login;
	}
	public function getUserMdp() {
		return $this->user_mdp;
	}
	public function setUserMdp($user_mdp) {
		$this->user_mdp = $user_mdp;
	}
	public function getUserNom() {
		return $this->user_nom;
	}
	public function setUserNom($user_nom) {
		$this->user_nom = $user_nom;
	}
	public function getUserPrenom() {
		return $this->user_prenom;
	}
	public function setUserPrenom($user_prenom) {
		$this->user_prenom = $user_prenom;
	}
	public function getUserTel() {
		return $this->user_tel;
	}
	public function setUserTel($user_tel) {
		$this->user_tel = $user_tel;
	}
	public function getUserEmail() {
		return $this->user_email;
	}
	public function setUserEmail($user_email) {
		$this->user_email = $user_email;
	}
	public function getUserAdherent() {
		return $this->user_adherent;
	}
	public function setUserAdherent($user_adherent) {
		$this->user_adherent = $user_adherent;
	}
	public function getUserTypeCompte() {
		return $this->user_typeCompte;
	}
	public function setUserTypeCompte($user_typeCompte) {
		$this->user_typeCompte = $user_typeCompte;
	}
	public function getUserRoles() {
		return $this->user_roles;
	}
	public function setUserRoles($user_roles) {
		$this->user_roles = $user_roles;
	}
	public function getUserDerniereConnexion() {
		return $this->user_derniereConnexion;
	}
	public function setUserDerniereConnexion($user_derniereConnexion) {
		$this->user_derniereConnexion = $user_derniereConnexion;
	}
	public function getUserDroit() {
		return $this->user_droit;
	}
	public function setUserDroit($user_droit) {
		$this->user_droit = $user_droit;
	}
}
?>
