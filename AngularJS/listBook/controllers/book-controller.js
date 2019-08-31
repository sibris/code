"use strict";

(function(){

	var app = angular.module('MyApp');

	app.controller('BookController', ['$scope', '$http', '$stateParams', function($scope, $http, $stateParams){

		$scope.id = $stateParams.id;

		/*$http.post('books.php').
			success(function(res, status){
				$scope.books = res;
			}).
			error(function(res, status){
				alert('Error!');
			});*/

	}]);

}());