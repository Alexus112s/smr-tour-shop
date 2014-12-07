var tourshopDirectives = angular.module('tourshopDirectives',
		[ 'ngSanitize' ])
		.directive('tourDay', function(){
			return {
				templateUrl: 'partials/tour-day.html',
				restrict: 'A',
			};
		}).directive('orderForm', function(){
			return {
				templateUrl: 'partials/order-form.html',
				restrict: 'A'
			};
		}).directive('tourListing', function(){
			return {
				templateUrl: 'partials/tour-listing.html',
				restrict: 'A'
			};
		}).directive('countriesList', function(){
			return{
				templateUrl: 'partials/countries-list.html',
				restrict: 'A',
				controller: 'CountriesListController'
			}
		});