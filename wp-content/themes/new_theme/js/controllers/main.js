// (function(){
// 	'use strict';

function mainCtrl ($scope) {
	console.error('print');

	$scope.text = "Doe";
}

window.app.controller('mainCtrl', ['$scope', mainCtrl]);
// });