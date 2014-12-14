<?php
//Récupération de la liste des utilisateurs
$pdo = new Mypdo();
$utilisateurManager = new UtilisateurManager($pdo);
$utilisateurs = $utilisateurManager->getAllUtilisateur();

//Première itération dans la page, les champs login et password sont vides
if(empty($_POST["login"]) && empty($_POST["password"]) && !isset($_SESSION["userCourant"]))
{
    $_SESSION["pageConnexion"] = $_GET["page"];
?>

    <form id="form" name="form" action="index.php?page=".<?php echo $_SESSION["pageConnexion"] ?> method="post">
        identifiant : <input type="text" name="login"><br>
        mot de passe : <input type="password" name="password"><br>
        <input type="submit" value="Valider">
    </form><br>

<?php

}
if(!empty($_POST["login"]) && !empty($_POST["password"]))
{
    //Deuxième itération dans la base de données
    $login = $_POST["login"];
    $password = $_POST["password"];

    $user = false;

    //Récupération de l'utilisateur correspondant au login
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
            $_SESSION['userCourant'] = $user;
        }
        else
        {
            //le mot de passe est invalide
            echo "Mauvais mot de passe";
        }
    }
    else
    {
        //L'identifiant est incorrecte
        echo "Identifiant incorrect";
    }
}
else if(isset($_SESSION["userCourant"])){
    echo "Vous êtes déjà connecté.";
}

?>