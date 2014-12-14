var tourshopApp = angular.module('tourshopApp', [ 'ngRoute',
		'tourshopControllers', 'tourshopServices', 'tourshopFilters',
		'tourshopDirectives' ]);
tourshopApp.config([ '$routeProvider', function($routeProvider) {
	$routeProvider.when('/tours', {
		templateUrl : 'partials/tour-list.html',
		controller : 'TourListCtrl'
	}).when('/login', {
		templateUrl : 'partials/login.html',
		controller : 'LoginCtrl'
	}).when('/tours/:tourId', {
		templateUrl : 'partials/tour-details.html',
		controller : 'TourDetailCtrl'
	}).otherwise({
		redirectTo : '/tours'
	});
} ]);
tourshopApp.run(function($route, $rootScope) {
	$rootScope.path = function(controller, params) {
		// Iterate over all available routes

		for ( var path in $route.routes) {
			var pathController = $route.routes[path].controller;

			if (pathController == controller) // Route found
			{
				var result = path;

				// Construct the path with given parameters in it

				for ( var param in params) {
					result = result.replace(':' + param, params[param]);
					if (result.indexOf(':' + param) !== -1) {
						delete params[param];
					}
				}
				var i = 0;
				var length = Object.keys(params).length;
				var searchPart = '';
				for ( var param in params) {
					if (i === length - 1) {
						searchPart += param + '=' + params[param];
					} else {
						searchPart += param + '=' + params[param] + '&';
					}
					i++;
				}
				return result + ((result.indexOf('?') == -1) ? '?' : '&')
						+ searchPart;
			}
		}

		// No such controller in route definitions

		return undefined;
	};
});