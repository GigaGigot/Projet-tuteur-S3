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
								<h3>{[{element.contenu}]}</h3>
							</div>
							<div ng-switch-when="Auteur">
								<font color="grey">Par {[{element.contenu}]}</font>
							</div>
							<div ng-switch-when="Date">
								<i>Le {[{element.contenu}]}</i>
							</div>
							<div ng-switch-when="Paragraphe">
								<p>&nbsp&nbsp&nbsp{[{element.contenu}]}</p>
							</div>
							<div ng-switch-when="Image">
								<img src="{[{element.contenu}]}">
							</div>
							<div ng-switch-when="Lien">
								<a href="{[{element.contenu}]}" target="_blank">{[{element.contenu}]}</a>
							</div>
						</div>
					</div>
				</div>
			</form>

			<!-- Autres articles -->
            <hr>
			<div class="article" ng-repeat="article in articles">
				<div ng-repeat="element in article.elements">
					<div ng-switch on="element.type">
						<div ng-switch-when="Titre">
							<h3>{[{element.contenu}]}</h3>
						</div>
						<div ng-switch-when="Auteur">
							<font color="grey">Par {[{element.contenu}]}</font>
						</div>
						<div ng-switch-when="Date">
							<i>Le {[{element.contenu}]}</i>
						</div>
						<div ng-switch-when="Paragraphe">
							<p>&nbsp&nbsp&nbsp{[{element.contenu}]}</p>
						</div>
						<div ng-switch-when="Image">
							<img src="{[{element.contenu}]}">
						</div>
						<div ng-switch-when="Lien">
							<a href="{[{element.contenu}]}" target="_blank">{[{element.contenu}]}</a>
						</div>
					</div>
				</div>
                <hr>
			</div>
		</div><h1>Manifestations et actions prévues en 2014 et 2015 </h1>
<h2>ACTIONS PROGRAMMEES EN 2014-2015</h2>
<img src="http://pr2l.fr/sites/default/files/styles/large/public/field/image/DSCN2937.JPG?itok=8wxgQc9T">
<ul>
	<li><em>Soirée d'étude "utopies sociales au XIXème siècle en Haute Vienne: les saints-simonien" Salle des assemblées du Conseil Général de la Haute Vienne, le mercredi 5 novembre à partir de 18h00, 11 rue François Chénieux à Limoges.</em></li>
	<li><em>Colloque : " Deux siècles d'économie sociale et solidaire avec les Corréziens" -Les grandes figures corréziènnes de l'économie sociale de Firmin Marbeau à René Teulade-. Lieu : Hôtel du Département de la Corrèze à Tulle dans l'amphithéâtre le jeudi 20 novembre 2014 à 14 heures. Intervenants : Anne-Valérie Etendard, Gilbert Beaubatie, Michel Dreyfus...</em></li>
	<li>Mise en place à St Junien d'un évènement sur l'USO (Union Syndicale Ouvrière) "L'Union Syndicale Ouvrière: une expérimentation efficiente de l'économie sociale à St Junien."</li>
	<li>Table ronde : "Aux racines de l'économie sociale". Lieu : Creuse. Date : mardi 13 janvier 2015 au Pôle Domotique de Guéret. Intervenants : Christian Laurance, Michel Manville, Michel Lulek, coopérateurs du monde agricole.</li>
	<li>Exposition à la BFM de Limoges avec comme thèmes, l'économie sociale, l'inventaire des archives et bâtiments, la présentation de PR2L. Commissaire de l'exposition prévue en 2016 : Dominique DANTHIEUX.</li>
</ul>
