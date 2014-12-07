var tourshopServices = angular.module('tourshopServices', [ 'ngResource' ]);

var serverUrl = 'http://localhost/SMRYiiShop/basic/web/index.php';

tourshopServices.factory('Tour', [ '$resource', function($resource) {
	return $resource(serverUrl + '/tours/:tourId', {}, {

	});
} ]);

tourshopServices.factory('TourSearch', [ '$resource', function($resource) {
	return $resource(serverUrl + '/tours/search', {});
} ]);

tourshopServices.factory('Countries', [ '$resource', function($resource) {
	return $resource(serverUrl + '/countries', {});
} ]);