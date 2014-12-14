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

tourshopServices.factory('User', [
		'$resource',
		'$location',
		function($resource, $location) {
			var userService = {};
			var user = {};
			user.name = '';
			user.accessToken = '';
			var loginResource = $resource(serverUrl + '/login', {});
			userService.Login = function(loginForm) {
				loginResource.get({
					email : loginForm.email,
					password : loginForm.password
				}, function(response) {
					if (loginForm.rememberMe) {
						localStorage.setItem('access-token',
								response.accessToken);
						localStorage.setItem('user-name', response.name);
					}
					sessionStorage
							.setItem('access-token', response.accessToken);
					sessionStorage.setItem('user-name', response.name);
					user.accessToken = response.accessToken;
					user.name = response.name;
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
				user.name = '';
				user.accessToke = '';
				
			};
			userService.GetUser = function() {
				if (localStorage.getItem('access-token') !== null) {
					user.accessToken = localStorage.getItem('access-token');
					user.name = localStorage.getItem('user-name');
				}
				if (sessionStorage.getItem('access-token') !== null) {
					user.accessToken = sessionStorage.getItem('access-token');
					user.name = sessionStorage.getItem('user-name');
				}
				return user;
			}
			return userService;
		} ]);