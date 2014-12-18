<?php
if (!(is_null($_SESSION["userCourant"])))
{
    if ($_SESSION["userCourant"]->getDroits() == "admin")
    {
        if(empty($_POST["personne"]) && empty($_POST["droits"]))
        {
            $pdo = new Mypdo();
	        $utilisateurManager = new UtilisateurManager($pdo);
            $utilisateurs = $utilisateurManager->getAllUtilisateur();
?>
                <table  style="border : 1px solid black">
                    <tr><th>Nom</th><th>Prénom</th><th>login</th><th>droits</th></tr>
<?php                
                    foreach($utilisateurs as $utilisateur)
                    {
                        ?>
                            <tr>
                                <td  style="border : 1px solid black"><?php echo $utilisateur->getNom()?> </td>
                                <td  style="border : 1px solid black"><?php echo $utilisateur->getPrenom()?></td>
                                <td  style="border : 1px solid black"><?php echo $utilisateur->getLogin()?></td>
                                <td  style="border : 1px solid black"><?php echo $utilisateur->getDroits() ?></td>
                            </tr>
                        <?php
                    }
?>
                </table><br/>

                <a href="index.php?page=2">Creation</a></br>
    
                <form id="form" method="post">
                        Saisir l'identifiant de la personne : <input type=text name="personne"></textarea>
                        <input type=submit value="Valider" onclick="self.location.href='index.php?page=4'">
                        
                </form>

                
<?php
        }else if(empty($_POST["droits"])){
            $pdo = new Mypdo();
	        $utilisateurManager = new UtilisateurManager($pdo);
            $utilisateurs = $utilisateurManager->getAllUtilisateur();
            
            $_SESSION['user'] = false;
            foreach($utilisateurs as $utilisateur){
                if($_POST["personne"] == $utilisateur->getLogin())
                {
                    $_SESSION['user'] = $utilisateur;
                }
            }
            
            if($_SESSION['user'] != false)
            {
?>              <h2>Modification de la personne</h2>              

                <form name="changeDroits" method="post">
                    <table  style="border : 1px solid black">
                            <tr><th>Nom</th><th>Prénom</th><th>login</th><th>droits</th></tr>
                            <tr><td style="border : 1px solid black"><?php echo $_SESSION['user']->getNom();?></td>
                                <td style="border : 1px solid black"><?php echo $_SESSION['user']->getPrenom();?></td>
                                <td style="border : 1px solid black"><?php echo $_SESSION['user']->getLogin();?></td>
                                <td style="border : 1px solid black">
                                    <select name="droits">
                                        <option value = "<?php echo $_SESSION['user']->getDroits() ?>"><?php echo $_SESSION['user']->getDroits() ?></option>
                                        <option value = "aucun">aucun</option>
                                        <option value = "lecture">lecture</option>
                                        <option value = "lecture/ecriture">lecture / ecriture</option>
                                        <option value = "admin">administrateur</option>
                                    </select>
                                </td>
                            </tr>
                    </table>
                    <input type=submit value="Valider" onclick="self.location.href='index.php?page=4'">
                </form>
<?php
            }
            else
            {
                echo "Cet utilisateur n'existe pas";
            }
        }else{
            if(!empty($_POST["droits"])){
                $_SESSION['user']->setDroits($_POST["droits"]);
                $pdo = new Mypdo();
                $utilisateurManager = new UtilisateurManager($pdo);
                $retour = $utilisateurManager->update($_SESSION['user']);
            
                echo "Les droits de cette personne ont été mis à jour";
            }
        }
    }
    else
    {
        echo "Vous n'avez pas accès à cette page";   
    }
}
 else
{
    echo "Vous n'êtes pas connecté";   
}
?>