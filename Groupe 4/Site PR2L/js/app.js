var app = angular.module('CMS', []).config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
  }]);

app.controller('CMSController', function($scope, $http) {
  $http.get('json/data.json')
  .success(function (data) {
       $scope.articles = data;
   })
   .error(function (data) {
      alert("Problème lors du chargement des données");
   });

   /*$scope.save = function() {
   $http({
        method: 'POST',
        url: 'json/data.json',        
        data: $scope.articles   
    }).success(function(response) {
        alert("c'est bon !" + $scope.articles );
    }).error(function(response){
        alert("c'est pas bon !");
    });
  };*/
});

  app.controller("ArticleController", function(){

    this.article = {elements:[{}]};

    this.addArticle = function(articles){
      articles.push(this.article);
      this.article = {elements:[{}]};
    };


  });


 app.controller('TabController', function(){
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

