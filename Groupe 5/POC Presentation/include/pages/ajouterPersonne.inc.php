<?php
$pdo = new Mypdo ();
$PersonneManager = new UserManager ( $pdo );
?>	

<?php
if (isset($_SESSION['personne_connecte'])) { //une personne est connecte
	if ($_SESSION['personne_connecte']->getUserDroit()=='admin') {	//un administrateur est connecte
		if ((empty ( $_POST ['nom'] ))) // formulaire non rempli.
		{
			?>
		<h1>Ajouter une personne</h1>
		
		<div id='user'>
			<form name='ajouter_user' id='ajouter_user' action='#' method='post'>
				<label for='nom'>Nom : </label> <input type='text' placeholder='Ex : Rossard' name='nom' required> 
				<label for='prenom'>Pr&eacute;nom : </label>
					<input type='text' placeholder='Ex : Sarah' name='prenom' required> <br /> 
				<label for='tel'>T&eacute;l&eacute;phone : </label>
					<input type='text' placeholder='0xxxxxxxxx' name='tel' pattern='[0][0-9]{9}' required> 
				<label for='mail'>Mail :</label> 
					<input type='mail' placeholder='sarah.michu@example.fr' name='mail' required /> <br /> 
				<label for='login'>Login :</label> 
					<input type='text' placeholder='Ex : Sarah87' name='login' required> 
				<label for='mdp'>Mot de passe :</label> 
					<input type='password' placeholder='********' name='mdp' required /> <br /> 
				<label for='typeCompte'>Type de compte :</label> 
					<select name='typeCompte' id='typeCompte'>
						<option value='adherent'>Adh&eacute;rent</option>
						<option value='contributeur'>Contributeur</option>
						<option value='moderateur'>Mod&eacute;rateur</option>
						<option value='administrateur'>Administrateur</option>
					</select> 
				<label for='roles'> Fonction de l'utilisateur :</label> 
					<select name='roles' id='roles'>
						<option value='secretaire'>Secr&eacute;taire</option>
						<option value='directeur'>Directeur</option>
					</select> <br />
				<label for='droit'> Droit de l'utilisateur</label>
					<select name='droit' id='droit'>
						<option value='lecture'>Lecture seule</option>
						<option value='lecture/ecriture'>Lecture et &eacute;criture</option>
						<option value='admin'>Droits ultime (admin)</option>
					</select>
				<label for='isAdherent'>Adh&eacute;rent :</label> 
					<input type='radio' name='isAdherent' value='o' checked='checked' />Oui 
					<input type='radio' name='isAdherent' value='n' />Non <br /> 
				<input type='submit' value='Valider'>
			</form>
		</div>
		<?php
		} else {
			// le formulaire est complet, on ajoute la personne dans la BD.
			
			$Personne = new User ( array (
					'user_nom' => $_POST ['nom'],
					'user_prenom' => $_POST ['prenom'],
					'user_tel' => $_POST ['tel'],
					'user_email' => $_POST ['mail'],
					'user_login' => $_POST ['login'],
					'user_mdp' => $_POST ['mdp'],
					'user_typeCompte' => $_POST ['typeCompte'],
					'user_roles' => $_POST ['roles'],
					'user_adherent' => $_POST ['isAdherent'], 
					'user_droit' => $_POST['droit']
			) ); // Details de l'utilisateur stocké dans une variable
			$Personne->setUserMdp ( sha1 ( sha1 ( $Personne->getUserMdp () ) . SEL ) );
			// Grain de sel du mot de passe. 
			// TODO modifier cryptage du mot de passe (sha255?)
		// 	var_dump($Personne);
		// 	var_dump($_POST['droit']);
		
			//$_SESSION ['Personne'] = $Personne;
			
			$idUser = $PersonneManager->VerifLogin ( $Personne->getUserLogin () );
			// on teste si le login de la personne existe dÃ©jÃ 
		
			if ($idUser == null) { // le login n'existe pas dÃ©jÃ 
				$retour = $PersonneManager->add ( $Personne );
			} else {
				// le login existe dÃ©jÃ 
				$retour = null;
				?>
		<p>
			<img src="image/erreur.png" alt='erreur' /> Ce login est d&eacute;j&agrave; utilis&eacute;,
			merci d'en choisir un autre.
		</p>
		<br />
		<?php
			}
			
			if ($retour != null) {
				// OK
				?>
		<p>
			<img src="image/valid.png" alt='valid' /> <b><?php echo $Personne->getUserPrenom(); ?></b>
			a &eacute;t&eacute; ajout&eacute;.
		</p>
		<?php
			} else {
				// erreur
				?>
		<p>
			<img src="image/erreur.png" alt='erreur' /> <b><?php echo  $Personne->getUserPrenom(); ?></b>
			n'a pas &eacute;t&eacute; ajout&eacute;.
		</p>
		<?php
			}
		}
	} else {
		?> 
		<p> Vous devez &circ;tre connect&eacute; en tant qu'administrateur pour ajouter des utilisateurs.
		<?php 		
	}
} else {
	?> 
	<p> Vous n'&ecirc;tes pas connect&eacute;. <br/>
	<strong><a href="index.php?page=1">Se connecter ?</a></strong>
	</p>
	<?php 
}
		?>