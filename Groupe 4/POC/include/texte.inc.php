<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Personnes
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/accueil.inc.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page insertion nouvelle personne
	include("pages/Connexion.inc.php");
    break;

case 2:
	// inclure ici la page liste des personnes
	include_once('pages/Creation.inc.php');
    break;

default : 	include_once('pages/accueil.inc.php');
}
	
?>
</div>
