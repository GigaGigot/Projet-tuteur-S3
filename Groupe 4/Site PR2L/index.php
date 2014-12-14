<?php
     session_start();
function __autoload($className){
	$repClasses = 'classes/';
	require $repClasses.$className.'.class.php';
}
require_once("include/config.inc.php");
require_once("include/header.inc.php"); 
 
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" ng-app="CMS">
	
	<head>
		<?php require_once("include/head.inc.php"); ?>
	</head>
	
	<header>
		<?php require_once("include/header.inc.php"); ?>
	</header>
	
	<aside>
		<?php require_once("include/contact.inc.php"); ?>
	</aside>
	
	<nav>
		<?php require_once("include/menu.inc.php"); ?>
	</nav>
	
	<body class="cadre" ng-controller="CMSController">
			<?php require_once("include/texte.inc.php"); ?>
	</body>
	
	<footer>
			<?php require_once("include/footer.inc.php"); ?>
	</footer>
		
</html>