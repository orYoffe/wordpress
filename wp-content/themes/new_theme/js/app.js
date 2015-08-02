// (function(){
// 	'use strict';

window.app = angular.module('myApp', [])
.config(function($scope) {
	console.error('print1');
});
function mainCtrl ($scope) {
	console.error('print');

	$scope.text = "Doe";
}

window.app.controller('mainCtrl', ['$scope', mainCtrl]);

// })();
