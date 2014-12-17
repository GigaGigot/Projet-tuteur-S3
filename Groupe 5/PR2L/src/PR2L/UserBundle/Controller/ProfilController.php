<?php

// src/PR2L/UserBundle/Controller/ProfilController.php

/*
 * Ce controller gère tout ce qui est liés aux utilisateurs, c'est à dire :
 * - Connexion / Déconnexion
 * - Listage des profils
 * - Ajout/Suppression/Modification
 */

/*
 * Cf pdf OC Symfony pour détails sur comment utiliser Response, Request, RedirectResponse & Co.
 * Utile : $session = $request->getSession(); -- Obtenir les détails de la session en cours.
 */

namespace PR2L\UserBundle\Controller;

// use = import en java
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; // Retourner une réponse : 90% des cas -> $this->render();
use Symfony\Component\httpFoundation\Request; // pour les $_POST & Co.
use Symfony\Component\httpFoundation\RedirectResponse;  // pour les redirections.

/**
 * Cette classe contient les méthodes de gestions des utilisateurs <br />
 *
 * @author Sylvain
 *        
 */
class ProfilController extends Controller {
	
	/**
	 * Cette fonction permet d'afficher la page d'accueil concernant ce qui est gestion des utilisateurs
	 * Ca sera un "lien" vers les autres actions possibles.
	 * Route : pr2l_user_main
	 */
	public function indexAction() {
		return new Response('Toto</body>');
	}
	
	/**
	 * Cette fonction retournera le profil d'un utilisateur <br/>
	 * Si id == null, on affichera le profil de l'user connecté.
	 *
	 * @param int $id
	 *        	Route : pr2l_user_view
	 */
	public function viewAction($id) {
		if ($id == null) {
			// id non renseigné, on affiche le profil de l'user par défaut.
		}
	}
	
	/**
	 * Cette fonction permet d'ajouter un utilisateur
	 *
	 * Route : pr2l_user_add
	 */
	public function addAction(Request $request) {
		if ($request->isMethod ( 'POST' )) {
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			
			// message que l'on passera dans le template.
			$request->getSession ()->getFlashBag->add ( 'notification', 'L\'utilisateur à bien été enregistré.' );
			
			// il faudra ensuite rediriger l'user sur son profil juste créé.
		}
		
		// Si on est pas en POST, on affiche le formulaire.
		// TODO formulaire.
		return ($this->render ( 'PR2LUserBundle:Profil:add.html.twig' ));
	}
	
	/**
	 * Permet de supprimer un utilisateur.
	 *
	 * @param int $id
	 *        	Route : pr2l_user_remove
	 */
	public function removeAction($id) {
	}
	
	/**
	 * Permet de modifier un utilisateur.
	 *
	 * @param int $id
	 *        	: id de l'user à modifier. si null, $id==user connecté.
	 *        	Route : pr2l_user_edit
	 */
	public function editAction($id, Request $request) {
		if ($request->isMethod ( 'POST' )) {
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			
			// message que l'on passera dans le template.
			$request->getSession ()->getFlashBag->add ( 'notification', 'L\'utilisateur à bien été modifié.' );
			
			// il faudra ensuite rediriger l'user sur son profil modifié.
		}
		
		// Si on est pas en POST, on affiche le formulaire.
		// TODO formulaire.
		return ($this->render ( 'PR2LUserBundle:Profil:edit.html.twig' ));
	}
	
// 	/**
// 	 * Permet de lister tous les utilisateurs.
// 	 *
// 	 * Route : pr2l_user_list
// 	 */
// 	public function listAction() {
// 	}
}