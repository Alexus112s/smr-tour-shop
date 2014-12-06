var tourshopControllers = angular.module('tourshopControllers',
		[ 'ngSanitize' ]);

tourshopControllers.controller('TourListCtrl', [ '$scope', 'Tour',
		function($scope, Tour) {
			$scope.tours = Tour.query();
			$scope.orderProp = 'title';
		} ]);

tourshopControllers.controller('TourDetailCtrl', [ '$scope', '$routeParams',
		'$sce', 'Tour', function($scope, $routeParams, $sce, Tour) {
			$scope.tour = Tour.get({
				tourId : $routeParams.tourId,
				expand : 'departures,tourDays,tourCountries,tourTypes'
			}, function(data, status) {
				$scope.tour.RouteMap = $sce.trustAsHtml($scope.tour.RouteMap);
			});
		} ]);

tourshopControllers.controller('TourOrderFormController', [
		'$scope',
		function($scope) {
			$scope.tourOrder = {};
			$scope.submit = function(tourOrderForm) {
				alert('submit pressed ');
			};
		} ]);