<?php

function __autoload($className){
	$repClasses = 'classes/';
	require $repClasses.$className.'.class.php';
}
require_once("include/config.inc.php");
require_once("include/header.inc.php"); 
 
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<?php	
		require_once("include/head.inc.php");
		require_once("include/header.inc.php");
	?>
	<body>
		<?php
			require_once("include/moduleNews.inc.php"); 
			require_once("include/menu.inc.php"); 
			require_once("include/texte.inc.php");
			require_once("include/footer.inc.php");
		?>
	</body>
</html>