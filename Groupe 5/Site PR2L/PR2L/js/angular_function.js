/*Fichier Angular  contenant la prévisualisation des articles. */

/**
 * Controleur pour l'ajout d'article, va permettre de faire les
 * prévisualisations.
 */
var article = angular.module('article', []);


article.controller('ajouterArticleCtrl', [ '$scope', function($scope) {

	$scope.myModel = '';

} ]);