var appControllers = angular.module('appControllers', []);

appControllers.controller('HomeCtrl', function ($scope) {
  
  

});

appControllers.controller('MenuCtrl', function ($scope) {
  
  $scope.menus = [
    {
    	'name': 'profile',
    	'icon': 'perm_identity',
    	'status': 'active',
			'url': '/home'
		},
    {
    	'name': 'stars',
    	'icon': 'stars',
    	'status': '',
			'url': '/stars'
		},
		{
			'name': 'email',
			'icon': 'email',
    	'status': '',
			'url': '/email'
		},
		{
			'name': 'work',
			'icon': 'work',
    	'status': '',
			'url': '/work'
		}
  ];

})

appControllers.controller('WorksListCtrl', function ($scope) {
  
  $scope.works = [
    {
    	'id': 1,
    	'title': 'Nexus S',
			'content': 'Fast just got faster with Nexus S.',
			'img': 'http://materializecss.com/images/sample-1.jpg'
		},
    {
    	'id': 2,
    	'title': 'Motorola XOOM™ with Wi-Fi',
			'content': 'The Next, Next Generation tablet.',
			'img': 'http://materializecss.com/images/sample-1.jpg'
		},
		{
			'id': 3,
			'title': 'MOTOROLA XOOM™',
			'content': 'The Next, Next Generation tablet.',
			'img': 'http://materializecss.com/images/sample-1.jpg'
		}
  ];

})


appControllers.controller('WorksDetailCtrl', function ($scope) {
  
  $scope.work = [
    {
    	'id': 1,
    	'title': 'Nexus S',
			'content': 'Fast just got faster with Nexus S.',
			'img': 'http://materializecss.com/images/sample-1.jpg'
		}
  ];

});