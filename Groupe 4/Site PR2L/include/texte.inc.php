<body>

	<?php
	if (!empty($_GET["page"])){
		$page=$_GET["page"];}
		else
		{$page=0;
		}
	switch ($page) {

	case 0:
		// inclure ici la page d'accueil
		include_once('pages/accueil.inc.php');
		break;
	case 1:
		// page actions en cours
		include("pages/actions.inc.php");
		break;

	case 2:
		// inclure ici la page liste des partenaires
		include_once('pages/listerPartenaires.inc.php');
		break;
	case 3:
		// inclure ici la page documentation
		include("pages/documentation.inc.php");
		break;
	case 4:
		// inclure ici la page documentation
		include("pages/connexion.inc.php");
		break;
	case 5:
		// inclure ici la page documentation
		include("pages/intranet.inc.php");
		break;
	case 666:
		// inclure ici la page de connexion
		include("pages/connecte.inc.php");
		break;

	default : 	include_once('pages/accueil.inc.php');
	}
	?>
	
</body>