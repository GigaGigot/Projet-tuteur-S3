<?php
if(isset($_SESSION['userCourant']))
{
    if(empty($_POST['ancienMDP']) && empty($_POST['nouvMDP'])){
        echo "Vous êtes ".$_SESSION['userCourant']->getPrenom()." ".$_SESSION['userCourant']->getNom();
?>
        <form name="formulaire" method="post">
            <p>Modification du mot de Passe :</p> 
            Ancien mot de passe : <input type="password" name="ancienMDP">
            Nouveau mot de passe : <input type="password" name="nouvMDP">
            <input type=submit value="Valider">
        </form>

<?php       
    }else{
       if($_SESSION['userCourant']->getPassword() == $_POST['ancienMDP']){
            $_SESSION['userCourant']->setPassword($_POST['nouvMDP']);
           
            $pdo = new Mypdo();
            $utilisateurManager = new UtilisateurManager($pdo);
            $retour = $utilisateurManager->update($_SESSION['userCourant']);
            
            if($retour != 0){
                echo "Utilisateur modifié";
            }else{
                echo "Erreur";
            }
        }
    }
}
?>