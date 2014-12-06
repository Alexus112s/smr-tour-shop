var tourshopApp = angular.module('tourshopApp', [ 'ngRoute',
		'tourshopControllers', 'tourshopServices', 'tourshopFilters' ]);
tourshopApp.config([ '$routeProvider', function($routeProvider) {
	$routeProvider.when('/tours', {
		templateUrl : 'partials/tour-list.html',
		controller : 'TourListCtrl'
	}).when('/tours/:tourId', {
		templateUrl : 'partials/tour-details.html',
		controller : 'TourDetailCtrl'
	}).otherwise({
		redirectTo : '/tours'
	});
} ]);