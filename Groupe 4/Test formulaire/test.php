<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<title>
		Test formulaire
	</title>



</head>

<body>
	<?php if(empty($_POST["login"])){ //Première itération dans la page, les champs login et password sont vides if(empty($_POST[ "login"]) && empty($_POST[ "password"])) { ?>

	<form id="form" method="post">
		identifiant :
		<input type=text name="login">
		<br>mot de passe :
		<input type=password name="password">
		<br>
		<input type=submit value="Valider" onclick="self.location.href='index.php?page=501'">
	</form>
	<br>

	<?php } else { //Deuxième itération dans la base de données $login=$ _POST[ "login"]; $password=$ _POST[ "password"]; $user=f alse; //Récupération de l 'utilisateur correspondant au login
								foreach($utilisateurs as $utilisateur){
									if($login == $utilisateur->getLogin())
									{
										$user = $utilisateur;
									}
								}

								//Le login existe bien?
								if($user != false)
								{
									$mdp = $user->getPassword();

									//Le mot de passe correspond-il?
									if($password == $mdp)
									{
										echo "Bonjour ".$user->getPrenom()." ".$user->getNom();
										$_SESSION['userCourant '] = $user;
									}
									else
									{
										//le mot de passe est invalide
										echo "Mauvais mot de passe";
									}
								}
								else
								{
									//L'identifiant est incorrecte echo "Identifiant incorrect"; } } ?>
</body>