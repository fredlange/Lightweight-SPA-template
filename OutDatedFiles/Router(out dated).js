
var myApp = angular.module('myApp', ['ngRoute']);
myApp.config(['$routeProvider',function($routeProvider){
  $routeProvider
    .when('/page1',{
      templateUrl: 'pages/page1.html',
      controller: 'mainController'
    })
    .when('/page2',{
      templateUrl: 'pages/page2.html',
      controller: 'mainController'
    })
    .when('/page3',{
      templateUrl: 'pages/page3.html',
      controller: 'mainController'
    })
    .when('/page4',{
      templateUrl: 'pages/page4.html',
      controller: 'mainController'
    })
    .when('/php-page',{
      templateUrl: 'pages/PhpPage.php',
      controller: 'mainController'
    })

    // Redirect to home page
    .otherwise({
       templateUrl: 'pages/FrontPage.html'
    });  
}]);

myApp.controller('mainController', function(){ });
