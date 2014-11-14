<?php	
    $pdo = new Mypdo();
	$utilisateurManager = new UtilisateurManager($pdo);
	$utilisateurs = $utilisateurManager->getAllUtilisateur();

    if(empty($_POST["login"]) && empty($_POST["password"]))
    {
    ?>
    <form id="form" method="post">
        identifiant : <input type=text name="login"></textarea>
        mot de passe : <input type=password name="password"></textarea>
    <input type=submit value="Valider" onclick="self.location.href='./Creation.inc.php'">
            
    <br/>
<?php
    }else{
        
        $login = $_POST["login"];
        $password = $_POST["password"];
        
        $user = false;
        foreach($utilisateurs as $utilisateur){
            if($login == $utilisateur->getLogin())
            {
                $user = $utilisateur;
            }
        }
        
        if($user != false)
        {
            $mdp = $user->getPassword();
            if($password == $mdp)
            {
                echo "Bonjour ".$user->getPrenom()." ".$user->getNom();
            }
            else
            {
                echo "Mauvais mot de passe";
            }
        }
        else
        {
            echo "Identifiant incorrect";
        }
    }
?>

        