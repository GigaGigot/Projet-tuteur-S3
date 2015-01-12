<?php
if (!(is_null($_SESSION["userCourant"])))
{
    if ($_SESSION["userCourant"]->getDroits() == "admin")
    {
        // le login, le mot de passe, le nom, le prenom ne sont pas saisies
        ?>
       <h2>Modification de l'utilisateur</h2>
        <?php
        // le login, le mot de passe, le nom, le prenom ne sont pas saisies
        if(empty($_POST["login"]) || empty($_POST["password1"]) || empty($_POST["nom"]) || empty($_POST["prenom"]))
        {
        ?>
            <!--formulaire de saisie --> 
            <form id="form" method="post">
                nom : <input type=text name="nom"></textarea><br/>
                prenom : <input type=text name="prenom"></textarea><br/>
                login : <input type=text name="login"></textarea><br/>
                mot de passe : <input type=password name="password1"></textarea><br/>
                <!-- ressaisir le mot de passe : <textarea name="password2"></textarea><br/>-->
                droits : <select name="droits">
                            <option value = "aucun">Aucun</option>
                            <option value = "lecture">Lecture</option>
                            <option value = "lecture/ecriture">Lecture / Ecriture</option>
                            <option value = "admin">Administrateur</option>
                         </select><br/>
            <input type=submit value="Valider" onclick="self.location.href='Creation.inc.php'"><br/>
            </form>
        <?php
        }
        else
        {
            // deuxième itération, tous les champs sont saisis

            // Connexion à la base
            $pdo = new Mypdo();
            $utilisateur = new Utilisateur(array(
               'login'=>$_POST["login"],
               'password'=>$_POST["password1"],
               'nom'=>$_POST["nom"],
               'prenom'=>$_POST["prenom"],
               'droits'=>$_POST["droits"]    
            ));

            //Création d'une nouvelle instance de classe
            $utilisateurManager = new UtilisateurManager($pdo);
            $retour = $utilisateurManager->add($utilisateur);
            if($retour != 0){
                echo "Utilisateur ajouté";
            }else{
                echo "Erreur";
            }
        }
        ?>
        <hr>
        <h2>Modification des menus</h2>
        <div ng-app="CMS">
            <div ng-controller="TabController as tab1">
             
                <input type="radio" name="G1" value="Ajouter un menu" href ng-click="tab1.setTab(2)">Ajouter un menu<br>
                <div ng-show="tab1.isSet(2)">Poinw</div>
                <input type="radio" name="G1" value="Ajouter un sous-menu" href ng-click="tab1.setTab(3)">Ajouter un sous-menu<br>
                 <div ng-show="tab1.isSet(3)">Pinw</div>
                <input type="radio" name="G1" value="Supprimer un menu" href ng-click="tab1.setTab(4)">Supprimer un menu<br>
                 <div ng-show="tab1.isSet(4)">Patapoinw</div>
                <input type="radio" name="G1" value="Supprimer un sous-menu" href ng-click="tab1.setTab(5)">Supprimer un sous-menu<br>
                 <div ng-show="tab1.isSet(5)">Patapinw</div>
            </div>
       
            <hr>
            <h2>Création d'un article</h2>
            
            <div class="cadre" ng-controller="CMSController">
                <div ng-controller="TabController as tab">

                    <div class="nonEdition" ng-show="tab.isSet(1)">
                        <button class="boutonGris" name="passage en mode édition" href ng-click="tab.setTab(2)">Ajouter un article</button>
                    </div>
                    <form name="formArticle" class="edition" ng-show="tab.isSet(2)" ng-controller="ArticleController as artCtrl" ng-submit="artCtrl.addArticle(articles)">
                        <!-- Edition -->
                        <div class="zoneContenu">
                            <ul  style="list-style-type: none;">
                              <li ng-repeat="element in artCtrl.article.elements" style="margin-bottom:15px;">
                                <a class="boutonEdition" href ng-click="artCtrl.article.elements.splice($index, 1)">X</a>
                                <div class="selectType">
                                    <select ng-model="element.type" ng-options="types for types in ['Titre', 'Auteur', 'Date', 'Paragraphe', 'Image', 'Lien']">
                                        <option></option>
                                    </select>
                                </div>
                                <div ng-switch on="element.type" style="display:inline-block;">
                                    <div ng-switch-when="Titre">
                                        <input type="text" ng-model="element.contenu" size="50" required>
                                    </div>
                                    <div ng-switch-when="Auteur">
                                        <input type="text" ng-model="element.contenu" placeholder="Prénom Nom" required>
                                    </div>
                                    <div ng-switch-when="Date">
                                        <input type="text" ng-model="element.contenu" placeholder="jj/mm/aaaa" pattern="\d{1,2}/\d{1,2}/\d{4}" required>
                                    </div>
                                    <div ng-switch-when="Paragraphe">
                                        <textarea ng-model="element.contenu" placeholder="Saisissez votre texte ..." required></textarea>
                                    </div>
                                    <div ng-switch-when="Image">
                                        <input type="text" ng-model="element.contenu" required>
                                    </div>
                                    <div ng-switch-when="Lien">
                                        <input type="text" ng-model="element.contenu" required>
                                    </div>
                                </div>
                                <!--<input ng-model="element.contenu"> -->
                              </li>
                              <br/>
                              <li>
                                <a class="boutonEdition" href ng-click="artCtrl.article.elements.push({})">Ajouter</a>
                              </li>
                            </ul>

                        </div>

                        <div class="validerAnnulerContenu">
                            <button class="boutonEdition" type="submit" name="valider" href ng-click="tab.setTab(1)">Valider</button>
                            <button class="boutonEdition" type="reset" name="annuler" href ng-click="tab.setTab(1)">Annuler</button>
                        </div>

                        <!-- Prévisualisation de l'article en cours d'edition -->
                        <div>
                            <h1 style="text-align:center;">Prévisualisation</h1>
                            <div ng-repeat="element in artCtrl.article.elements">
                                <div ng-switch on="element.type">
                                    <div ng-switch-when="Titre">
                                        <h3>{{element.contenu}}</h3>
                                    </div>
                                    <div ng-switch-when="Auteur">
                                        <font color="grey">Par {{element.contenu}}</font>
                                    </div>
                                    <div ng-switch-when="Date">
                                        <i>Le {{element.contenu}}</i>
                                    </div>
                                    <div ng-switch-when="Paragraphe">
                                        <p>&nbsp&nbsp&nbsp{{element.contenu}}</p>
                                    </div>
                                    <div ng-switch-when="Image">
                                        <img src="{{element.contenu}}">
                                    </div>
                                    <div ng-switch-when="Lien">
                                        <a href="{{element.contenu}}" target="_blank">{{element.contenu}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    else
    {
        echo "Vous n'avez pas accès à cette page";
    }
}
else
{
    echo "Vous n'avez pas accès à cette page";
}
?>