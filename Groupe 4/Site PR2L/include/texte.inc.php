<body>

	<?php
	if (!empty($_GET["page"])){
		$page=$_GET["page"];}
		else
		{$page=0;
		}
	switch ($page) {
// partie accueil
	case 1:
		// inclure ici la page d'accueil
		include_once('pages/accueil.inc.php');
		break;
	case 101:
		// inclure ici la page d'accueil
		include_once('pages/missions.inc.php');
		break;
	case 102:
		// inclure ici la page d'accueil
		include_once('pages/membres.inc.php');
		break;
		
// partie actualités		
	case 2:
		// page actions en cours
		include("pages/actualites.inc.php");
		break;
	case 201:
		// inclure ici la page d'accueil
		include_once('pages/evenements.inc.php');
		break;
	case 202:
		// inclure ici la page d'accueil
		include_once('pages/actions.inc.php');
		break;
	case 203:
		// inclure ici la page d'accueil
		include_once('pages/news.inc.php');
		break;

// partie partenaires
	case 3:
		// inclure ici la page liste des partenaires
		include_once('pages/listerPartenaires.inc.php');
		break;
		
// partie documentation
	case 4:
		// inclure ici la page documentation
		include("pages/documentation.inc.php");
		break;
	case 401:
		// inclure ici la page d'accueil
		include_once('pages/bibliographie.inc.php');
		break;
	case 402:
		// inclure ici la page d'accueil
		include_once('pages/media.inc.php');
		break;
	case 403:
		// inclure ici la page d'accueil
		include_once('pages/archives.inc.php');
		break;
		
// partie intranet
	case 5:
		break;

	default : 	include_once('pages/accueil.inc.php');
	}
	?>
	
</body>