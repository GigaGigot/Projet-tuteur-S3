<section>
<?php
    session_start();
if(!(isset($_SESSION["userCourant"]))){$_SESSION["userCourant"]=NULL;}
	if (!empty($_GET["page"])){
		$page=$_GET["page"];}
		else
		{$page=1;
		}
	switch ($page) {
// partie accueil
	case 1:
		// inclure ici la page d'accueil
		include_once('pages/accueil.inc.php');
		break;
	case 101:
		// inclure ici le projet de l'asso
		include_once('pages/projet.inc.php');
		break;
	case 102:
		// inclure ici la page des fondateurs
		include_once('pages/fondateurs.inc.php');
		break;
	case 103:
		// inclure ici la page de revue de presse
		include_once('pages/revuePresse.inc.php');
		break;
	case 104:
		// inclure ici la page d'adhésion
		include_once('pages/adherer.inc.php');
		break;
	case 105:
		// inclure ici la page de la vie de l'asso
		include_once('pages/vieAsso.inc.php');
		break;
		
// partie actualités		
	case 2:
		// page actions d'actualités
		include("pages/actualites.inc.php");
		break;
	case 201:
		// inclure ici la page des actions et évènements
		include_once('pages/ActionsEvenements.inc.php');
		break;
	case 202:
		// inclure ici la page "quoi de neuf"
		include_once('pages/QuoiDeNeuf.inc.php');
		break;
	case 203:
		// inclure ici la page autour de nous
		include_once('pages/AutourDeNous.inc.php');
		break;

// partie partenaires
	case 3:
		// inclure ici la page liste des partenaires
		include_once('pages/listerPartenaires.inc.php');
		break;
	case 301:
		// inclure ici la page de gestion des partenaires
		include_once('pages/GererPartenaires.inc.php');
		break;
		
// partie documentation
	case 4:
		// inclure ici la page Ressources
		include("pages/Ressources.inc.php");
		break;
	case 401:
		// inclure ici le Catalogue d'archives
		include_once('pages/CatalogueArchives.inc.php');
		break;
	case 402:
		// inclure ici la Bibliothèque
		include_once('pages/Biliothèque.inc.php');
		break;
	case 403:
		// inclure ici les Travaux de recherche
		include_once('pages/TravauxRecherche.inc.php');
		break;
	case 404:
		// inclure ici les publications
		include_once('pages/publications.inc.php');
		break;
	case 404:
		// inclure ici les liens utiles
		include_once('pages/LiensUtiles.inc.php');
		break;
		
// partie chantier
	case 5:
		// inclure ici la page chantiers
		include("pages/Chantiers.inc.php");
		break;
	case 501:
		// inclure ici le Recencement pour la mutualité
		include_once('pages/RecencementMutualite.inc.php');
		break;
	case 402:
		// inclure ici l'Inventaire de la coopération en Limousin
		include_once('pages/InventaireCooperation.inc.php');
		break;
		
// partie intranet
	case 6:
		include_once('pages/connexion.inc.php');
		break;
	case 601:
		include_once('pages/connexion.inc.php');
		break;
	case 602:
		include_once('pages/Creation.inc.php');
		break;
	case 603:
		include_once('pages/GestionAdmin.inc.php');
		break;
	case 604:
		include_once('pages/Modification.inc.php');
		break;
	case 605:
		include_once('pages/Deconnexion.inc.php');
		break;

	default : 	include_once('pages/accueil.inc.php');
	}
	?>
</section>