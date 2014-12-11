<?php 
if (isset($_SESSION['personne_connecte'])) { //une personne est connecte
	if ($_SESSION['personne_connecte']->getUserDroit()=='lecture/ecriture' || $_SESSION['personne_connecte']->getUserDroit()=='admin' ) {
		//a remplacer quand on aura ajouter les droits par lecture/ecriture ou admin
?>
<div>
	<form method="post" action="#">
		<label for='typeArticle'>Type d'article :</label> 
			<select	name='typeArticle' id='typeArticle'>
				<option value='news'>News</option>
				<option value='article'>Article</option>
			</select>
	</form>
		
	<form method="post" action="#"></form>
	</select> <label for='ajout_composant'> Ajouter :</label> <select
		name='ajout_composant' id='ajout_composant'>
		<option value='titre'>Titre</option>
		<option value='auteur'>Auteur</option>
		<option value='paragraphe'>Paragraphe</option>
		<option value='sousTitre'>Sous-titre</option>
		<option value='citation'>Citation </option>
	</select> <input type='submit' value='Valider' />
	</form>

</div>

<div ng-app="article">
	<div ng-controller="ajouterArticleCtrl">
		<input type="text" ng-model="titre" placeholder="Tapez le titre de l'article" required /> 
		<input type='text' ng-model="auteur" placeholder="Entrez le nom de l'auteur" required /> <br/>
		<textarea name='paragraphe' id=paragraphe' rows=10 cols=50 ng-model="paragraphe" 
		placeholder="Tapez votre texte..."> </textarea>

		<center><h1>Pr&eacute;visualisation :</h1></center>
		<h2>Titre : {{ titre }}</h2>
		<h3>Auteur : {{ auteur }}</h3>
		<center><p>{{ paragraphe}}</p></center>

	</div>
</div>
<?php 
	} else {
		?> 
		<p> Vous n'avez pas les droits suffisants pour pouvoir ajouter un article. </p>
		<?php 
	}
} else {
	?>
		<p> Vous devez &ecirc;tre connect&eacute; pour pouvoir ajouter un article.</p>	
	<?php 
}
?>