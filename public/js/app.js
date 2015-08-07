var dmarcoApp = angular.module('dmarcoApp', 
  [
    'ngRoute',
    'appControllers',
    'ui.materialize'
  ], 
  function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
  }
);

dmarcoApp.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider) {
    
    $routeProvider.
      
      when('/', {
        templateUrl: 'partials/home.php'
      }).
      when('/email', {
        templateUrl: 'partials/email.php'
      }).
      when('/work', {
        templateUrl: 'partials/works-list.php'
      }).
      when('/work/:id', {
        templateUrl: 'partials/works-detail.php'
      }).
      otherwise({
        redirectTo: '/'
      });

    $locationProvider.html5Mode(true);
    $locationProvider.hashPrefix('!');

  }
]);

/*dmarcoApp.controller('PhoneListCtrl', function ($scope) {
  $scope.phones = [
    {'name': 'Nexus S',
     'snippet': 'Fast just got faster with Nexus S.'},
    {'name': 'Motorola XOOM™ with Wi-Fi',
     'snippet': 'The Next, Next Generation tablet.'},
    {'name': 'MOTOROLA XOOM™',
     'snippet': 'The Next, Next Generation tablet.'}
  ];
});*/