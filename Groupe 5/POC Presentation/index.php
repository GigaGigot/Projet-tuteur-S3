<?php
    session_start();

function __autoload($className){
	$repClasses = 'classes/';
	require $repClasses.$className.'.class.php';
}
//pour le chargement auto des classes. 

require_once("include/header.inc.php"); 
require_once("include/config.inc.php");
 
?>
<div id="corps">
<?php
require_once("include/menu.inc.php"); 
require_once("include/texte.inc.php");
?>
</div>

<div id="spacer"></div>
<?php
require_once("include/footer.inc.php"); ?>
