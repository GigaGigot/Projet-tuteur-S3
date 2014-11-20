<div class="cmsEntier" ng-controller="TabController as tab">


			<div class="nonEdition" ng-show="tab.isSet(1)">
				<button class="boutonGris" name="passage en mode édition" href ng-click="tab.setTab(2)">Ajouter un article</button>
			</div>
			<form name="formArticle" class="edition" ng-show="tab.isSet(2)" ng-controller="ArticleController as artCtrl" ng-submit="artCtrl.addArticle(articles)">
				<!-- Edition -->
				<div class="contenu">
		            <div class="zoneContenu">
					    <ul  style="list-style-type: none;">
					      <li ng-repeat="element in artCtrl.article.elements" style="margin-bottom:15px;">
					      	[<a href ng-click="artCtrl.article.elements.splice($index, 1)">X</a>]
					      	<select ng-model="element.type" ng-options="types for types in ['Titre', 'Auteur', 'Date', 'Paragraphe', 'Image', 'Lien']">
					      		<option></option>
					      	</select>
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
					      			<textarea ng-model="element.contenu" placeholder="Saisissez votre texte" ... required></textarea>
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
					        [<a href ng-click="artCtrl.article.elements.push({})">Ajouter</a>]
					      </li>
					    </ul>
						
		            </div>
				  
				    <div class="validerAnnulerContenu">
						<button type="submit" name="valider" href ng-click="tab.check(formArticle.$valid)">Valider</button>
		          		<button name="annuler" href ng-click="tab.setTab(1)">Annuler</button>
		            </div>
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

			<!-- Autres articles -->
			<div class="article" ng-repeat="article in articles">
				<div ng-repeat="element in article.elements">
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
		</div>