var tourshopControllers = angular.module('tourshopControllers',
		[ 'ngSanitize' ]);

tourshopControllers.controller('TourListCtrl', [ '$scope', 'Tour',
		function($scope, Tour) {
			$scope.tours = Tour.query();
			$scope.orderProp = 'title';
		} ]);

tourshopControllers.controller('TourDetailCtrl', [ '$scope', '$routeParams',
		'Tour', function($scope, $routeParams, Tour) {
			$scope.tour = Tour.get({
				tourId : $routeParams.tourId,
				expand : 'departures,tourDays,tourCountries,tourTypes'
			});
		} ]);