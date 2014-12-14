<h1>Supprimer des personnes enregistr&eacute;es</h1>
<?php
$pdo = new Mypdo ();
$userManager = new UserManager ( $pdo );
$listeUsers = $userManager->getAllUsers();

// var_dump ( $listeUsers );
if ($listeUsers == null) { // Pas de personnes enregistrées
	?>
<p>
	D&eacute;sol&eacute;, aucune personne n'est enregistr&eacute;e. <br />
	<strong><a href='index.php?page=1'>Ajouter une personne ?</a></strong>
<?php
} else { // Des personnes sont enregistrées

	if (empty ( $_POST ['per_num'] )) { //la personne n'est pas selectionnee
		?>

<form action="#" method="POST">
	Personne &agrave; supprimer : <select class='champ' name="per_num"
		id="per_num">
	<?php

		foreach ( $listeUsers as $personne ) {
			?>
		<option value="<?php echo $personne->getUserId(); ?>"><?php echo $personne->getUserNom()." ".$personne->getUserPrenom(); ?></option>
		<?php
		}
		?>
	</select> <input type='submit' value='Supprimer' />
</form>
<?php
	} else {
		$userManager->supprimerUser ( $_POST ['per_num'] );
		if (! empty ( $_SESSION ['personne_connecte'] )) {
			// une personne est connectée.
			if (($_SESSION ["personne_connecte"]->getUserId() == $_POST ['per_num'])) {
				// Alors, la personne supprimée est la personne connectée.
				session_destroy ();
				// on quitte la session.
			}
		}
		?>
<p>
	<img src="image/valid.png" alt='valid' /> Utilisateur supprim&eacute;
</p>
<?php
	}
}
?>
