<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {

case 0:
	include_once('pages/accueil.inc.php');
	break;

case 1:
	include("pages/Connexion.inc.php");
    break;

case 2:
	include_once('pages/Creation.inc.php');
    break;
    
case 3:
	include_once('pages/Test.inc.php');
    break;

case 4:
    include_once('pages/GestionAdmin.inc.php');
    break;
    
case 5:
    include_once('pages/Modification.inc.php');
    break;

case 6:
    include_once('pages/Deconnexion.inc.php');
    break;

case 7:
    include_once('pages/Suppression.inc.php');

default : 	include_once('pages/accueil.inc.php');
}
	
?>
</div>
