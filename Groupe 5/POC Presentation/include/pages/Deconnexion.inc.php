<?php
if (isset($_SESSION['personne_connecte'])) {
	session_destroy ();
	?>
	<p>
		<strong>Vous avez &eacute;t&eacute; d&eacute;connect&eacute;.</strong> <br />
		Redirection vers la page d'accueil...
	</p>
	<META HTTP-EQUIV="Refresh" CONTENT="2;URL=index.php">	
<?php } else {
?>
<p> Vous n'&ecirc;tes pas connect&eacute; </p>
<?php 
}
?>
