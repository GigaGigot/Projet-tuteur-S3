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
    include_once('pages/Deconnexion.inc.php');
    break;

default : 	include_once('pages/accueil.inc.php');
}
	
?>
</div>
