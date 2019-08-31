"use strict";

(function(){

	var app = angular.module('MyApp');

	app.controller('BooksController', ['$scope', '$http', function($scope, $http){

		$http.post('books.php').
			success(function(res, status){
				$scope.books = res;
			}).
			error(function(res, status){
				alert('Error!');
			});

	}]);

	app.filter('myFilter', function(){
		return function(str, param1, param2){
			return str[0].toUpperCase() + str.slice(1) + param1 + param2;
		}
	});

}());