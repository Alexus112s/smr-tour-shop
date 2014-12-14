var tourshopControllers = angular.module('tourshopControllers',
		[ 'ngSanitize' ]);

tourshopControllers.controller('MenuCtrl', [ '$scope', 'User',
		function($scope, User) {
			$scope.user = User.GetUser();
			$scope.logout = function() {
				User.Logout();
			}
		} ]);

tourshopControllers.controller('TourListCtrl', [ '$routeParams', '$scope',
		'TourSearch', function($routeParams, $scope, TourSearch) {
			$scope.tours = TourSearch.query($routeParams);
			$scope.orderProp = 'title';
		} ]);

tourshopControllers.controller('LoginCtrl', [ '$scope', '$location', 'User',
		function($scope, $location, User) {
			$scope.user = {};
			$scope.login = function(user){
				var usr = User.Login(user);
				if(usr != null){
					$location.url('/');
				}
			} ;				
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

tourshopControllers.controller('TourOrderFormController', [ '$scope',
		function($scope) {
			$scope.tourOrder = {};
			$scope.submit = function(tourOrderForm) {
				alert('submit pressed ');
			};
		} ]);

tourshopControllers.controller('CountriesListController', [ '$scope',
		'Countries', '$routeParams', function($scope, Countries, $routeParams) {
			$scope.getLink = function(countryId) {
				var loc = $routeParams;
				loc.countryId = countryId;
				return $scope.path('TourListCtrl', loc);
			}
			$scope.countries = Countries.query();
		} ]);