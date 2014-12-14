<?php
$pdo = new Mypdo ();
$userManager = new UserManager ( $pdo );

$nb1 = rand ( 1, 9 );
$nb2 = rand ( 1, 9 );
// choix aléatoires des deux nombres pour le captcha

if (empty ( $_POST ['reponse'] )) {
	//On rentre les id de connexion
	?>
<h1>Pour vous connecter</h1>

<form action="#" method="post">
	<label for=user_login'>Login : </label>
		<input type="text" name="user_login" id="user_login"> <br /> 
	<label for='user_mdp'>Mot de passe : </label>
		<input type="password" name="user_mdp" id="user_mdp">
	<br />

	<p class="captcha">
		Merci de r&eacute;soudre le calcul suivant pour confirmer que vous
		n'&ecirc;tes pas un robot <br /> <img 
			src="image/nb/<?php echo $nb1 ?>.jpg" alt='numero' /> + <img
			src="image/nb/<?php echo $nb2 ?>.jpg" alt='numero' /> =
	</p>

	<input type="hidden" name="nb1" value="<?php echo $nb1; ?>" /> 
	<input type="hidden" name="nb2" value="<?php echo $nb2; ?>" /> <br /> 
	
	<input type="text" name="reponse" required/> <br /> 
	<input type="submit" value="Connexion" />
</form>
<?php
} else {
	
	$nb1_verif = $_POST ['nb1'];
	$nb2_verif = $_POST ['nb2'];
	$resultat = $nb1_verif + $nb2_verif; // resultat attendu.
	
	$reponse = $_POST ['reponse']; // réponse utilisateur
	
	$login = $_POST ['user_login'];
	$pass = $_POST ['user_mdp'];
	//$passCrypte = sha1 ( sha1 ( $pass ) . SEL ); 
	// détails de la connexion
	
	//var_dump($pass);
	//var_dump($passCrypte);
	
	$connexionOK = $userManager->testConnexion ( $login, $pass );
	//var_dump($connexionOK);
	if ($reponse != $resultat) { // si le captcha est incorrect
		echo "<img src=\"image/erreur.png\" alt='erreur' /> <strong>Le captcha est incorrect</strong><br/>";
		$captcha = false;
		?>
<?php
		if (isset ( $_SESSION ['per_login_connecte'] )) {
			session_destroy ();
			// pour eviter des erreurs.
		}
	} else {
		$captcha = true;
		// le captcha est correct
	}
	
	if ($connexionOK == false) { // mauvais mot de passe/identifiant
		echo "<img src=\"image/erreur.png\" alt='erreur' /> Erreur d'identifiant / mot de passe <br/>\n";
		if (isset ( $_SESSION ['per_login_connecte'] )) {
			session_destroy ();
			// pour eviter des erreurs.
		}
		
		?>
<?php
	}
	
	if (($connexionOK == true) && $captcha == true) { // le captcha est bon et les id/mdp aussi
		$personneConnectee = $userManager->getPersonneParLogin ( $_POST ['user_login'] );
		$_SESSION ["personne_connecte"] = ($personneConnectee);
		
		?>
		<h3> Bienvenue <?php echo $_SESSION ["personne_connecte"]->getUserPrenom(); ?> ! Vous allez &ecirc;tre redirig&eacute;...</h3>
		<META HTTP-EQUIV="Refresh" CONTENT="2;URL=index.php"> <!-- Redirection vers la page d'accueil. -->
		<?php
		/*
		 * Au final, on dispose de 4 variables de sessions : 1 pour les conditions si on est connecte :
		 * user_login_connecte
		 * et deux autres, qui contiennent le numero et le prenom de la personne connnecte, et la derniere  <br/> 
		 * Une variable de session est conservée jusqu'à fermeture du navigateur.
		 */
	}
}
?>