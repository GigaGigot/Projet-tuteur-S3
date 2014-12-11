<?php
$pdo = new Mypdo (); //
$userManager = new UserManager ( $pdo );
?>
<?php 
if (isset($_SESSION['personne_connecte'])) {
?>
	
	<h1>Modifier mes informations</h1>
	
	<?php $user = $userManager->getPersonneParLogin($_SESSION['personne_connecte']->getUserLogin()); ?>
	<?php 
	if (empty ( $_POST ['per_tel'] )) { //formulaire non rempli
				?>
	<form action="#" method="POST">
		<label for='per_nom'>Nom :</label> <input name='per_nom' id='per_nom'
			type='text' value="<?php echo $user->getUserNom();?>" required />
		<label for='per_prenom'>Prenom : </label> 
			<input name='per_prenom' id='per_prenom' type='text' value='<?php echo $user->getUserPrenom(); ?>' required /> <br /> 
		<label for='per_tel'>T&eacute;l&eacute;phone : </label> 
			<input name='per_tel' id='per_tel' type='text' value='<?php echo $user->getUserTel(); ?>' required /> 
		<label for='per_mail'> Mail :</label> 
			<input name='per_mail' id='per_mail' type='text' value='<?php echo $user->getUserEmail(); ?>' required /> <br />
		<label for='per_login'>Login :</label> 
			<input name='per_login' id='per_login' type='text' value='<?php echo $user->getUserLogin(); ?>' required /> 
		<label for='roles'> Fonction de l'utilisateur :</label> 
			<select name='roles' id='roles'>
				<option value='secretaire'>Secr&eacute;taire</option>
				<option value='directeur'>Directeur</option>
			</select> 
		<label for='isAdherent'>Adh&eacute;rent :</label> 
			<input type='radio' name='isAdherent' value='o' checked='checked' />Oui 
			<input type='radio' name='isAdherent' value='n' />Non <br/>
		<hr/>
		<label for='user_mdp'>Si vous voulez changer votre mot de passe, merci de tapez votre mot de passe actuel :</label> 
			<input name='user_mdp' id='user_mdp' type='password' value='' /> <br />
		<!-- On saisie deux fois afin d'être sur que la user saississe le bon mdp-->
		<label for='per_nouveau'>Nouveau mot de passe : </label> 
			<input name='per_nouveau' id='per_nouveau' type='password' value='' /> 
		<label for='per_confirmation'>Retaper le mot de passe :</label> 
			<input name='per_confirmation' id='per_confirmation' type='password' value='' />
		
		<br /> <input type='submit' value='Modifier' />
	</form>
	<?php
	} else {
		// formulaire de modification rempli
		$PersonneModifie = new User ( array (
				'user_nom' => $_POST ['per_nom'],
				'user_prenom' => $_POST ['per_prenom'],
				'user_tel' => $_POST ['per_tel'],
				'user_email' => $_POST ['per_mail'],
				'user_login' => $_POST ['per_login'],
				'user_roles' => $_POST ['roles'],
				'user_adherent' => $_POST ['isAdherent']
		) );
		// permet de recuperer tout les champs
		$PersonneModifie->setUserId ( $_SESSION ['personne_connecte']->getUserId() );
		$PersonneModifie->setUserMdp ( $user->getUserMdp () ); //on met son vrai mot de passe
		$PersonneModifie->setUserTypeCompte($user->getUserTypeCompte()); //etant donne que non propose lors de la saisie
		$PersonneModifie->setUserDerniereConnexion($user->getUserDerniereConnexion()); //car non renseigne dans le formulaire
		
		//var_dump($PersonneModifie);
		if (! empty ( $_POST ['user_mdp'] )) {
			// Il a voulu changer de mdp
			$mdp = $_POST ['user_mdp'];
			$nouveau_pass_1 = $_POST ['per_nouveau'];
			$nouveau_pass_2 = $_POST ['per_confirmation'];
		if (sha1 ( sha1 ( $mdp ) . SEL ) == $PersonneModifie->getUserMdp ()) {
				// On s'assure que le mot de passe saisi est egal au mot de passe dans la BD
				if ($nouveau_pass_1 == $nouveau_pass_2) {
					// Alors tout est bon
					$nouvMdp = sha1 ( sha1 ( $nouveau_pass_1 ) . SEL );
					$PersonneModifie->setUserMdp ( $nouvMdp );
					$userManager->modifierUser ( $PersonneModifie );
					echo " <img src=\"image/valid.png\" alt='erreur' /> Personne mise à jour";
				} else {
					echo "<img src=\"image/erreur.png\" alt='erreur' /> Les mots de passe saisis ne correspondent pas";
				}
			} else {
				echo "<img src=\"image/erreur.png\" alt='erreur' /> Mot de passe incorrect.";
			}
		} else { //il a pas voulu changer de mot de passe
			$userManager->modifierUser ( $PersonneModifie );
			echo " <img src=\"image/valid.png\" alt='erreur' /> Personne mise à jour";
		}
	} //fin update user
} else {
	?> 
	<p> Vous devez &ecirc;tre connect&eacute; pour modifier vos informations.
	<?php 
}
?>