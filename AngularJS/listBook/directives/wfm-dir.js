"use strict";

(function(){

	var app = angular.module('MyApp');

	app.directive('wfmDir', function(){
		return {
			templateUrl: 'templates/directives_tpl/wfm-dir.html',
			// restrict: 'EA', // EACM
			replace: false,
			// controller: 'BooksController',
			link: function(scope, element, attrs){
				/*element.on('click', function(e){
					// var $this = angular.element;
					// $this(e.target).parent().toggleClass('grey');
					$(e.target).parent().toggleClass('grey');
				});*/
				scope.clickTr = function(e){
					/*console.log(e);
					console.log(e.target);
					console.log(e.currentTarget);*/
					$(e.currentTarget).toggleClass('grey');
					element.children().css('border', '2px solid #cc0000');
				};
			}
		};
	});

}());