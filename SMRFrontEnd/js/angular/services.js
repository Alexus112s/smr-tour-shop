var tourshopServices = angular.module('tourshopServices', [ 'ngResource' ]);

tourshopServices.factory('Tour', [ '$resource', function($resource) {
	return $resource('http://localhost/SMRYiiShop/basic/web/index.php/tours/:tourId', {}, {
		query : {
			method : 'GET',
			params : {
				tourId : ''
			},
			isArray : true
		},		
	});
} ]);