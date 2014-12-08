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

tourshopServices.factory('User', [ '$resource', '$location',
		function($resource, $location) {
			var userService = {};
			var loginResource = $resource(serverUrl + '/login', {});
			userService.Login = function(login, password, rememberMe) {
				var user = loginResource.get({
					login : login,
					password : password
				}, function() {
					if (rememberMe) {
						localStorage.setItem('access-token', user.accessToken);
						localStorage.setItem('user-name', user.name);
					}
					sessionStorage.setItem('access-token', user.accessToken);
					sessionStorage.setItem('user-name', user.name);
				}, function() {
					user = null;
				});
				return user;
			};
			userService.Logout = function() {
				localStorage.removeItem('access-token');
				localStorage.removeItem('user-name');
				sessionStorage.removeItem('access-token');
				sessionStorage.removeItem('user-name');
			};
			userService.GetUser = function() {
				var user = {};
				if (localStorage.getItem('access-token') !== null) {
					user.accessToken = localStorage.getItem('access-token');
					user.name = localStorage.getItem('user-name');
					return user;
				}
				if (sessionStorage.getItem('access-token') !== null) {
					user.accessToken = sessionStorage.getItem('access-token');
					user.name = sessionStorage.getItem('user-name');
					return user;
				}
				return null;
			}
			return userService;
		} ]);