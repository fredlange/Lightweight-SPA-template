<?php 

// CREATE UI FUNCTION TO DISPLAY MAIN MENU ITEMS
function MainMenuItemsDisplay(){
  echo "<ul>";
  global $MainMenuItems; // Import variables
  
  // If no menu items, cancel script.
  if(!empty($MainMenuItems)){             
    $i = 0;

    // Create script for each menu item
    while($i < count($MainMenuItems)){
      ?> 
        <li><a href="" ng-click="setPath('<? echo $MainMenuItems[$i][1]; ?>')"><? echo $MainMenuItems[$i][0]; ?></a></li>
      <?
      $i++;
    }
  }
  echo"</ul>";
}

// CREATE ROUTER CAPABILITIES TO DISPLAY MAIN MENU ITEM CONTENT 
function MenuItemRouter(){
    global $MainMenuItems, $PageDirectory; // Import variables

    // If no menu items, cancel script.
    if(!empty($MainMenuItems)){             
      $i = 0;

      // Create script for each menu item
      while($i < count($MainMenuItems)){
        echo "
        .when('/".$MainMenuItems[$i][1]."',
        {templateUrl: '".$PageDirectory."/".$MainMenuItems[$i][1].".php' })
        "; // end echo
        $i++;
      }
    }
  };
?>

<!-- CREATE ANGULAR APP + CONTROLLER -->
<script>
  var myApp = angular.module('myApp', ['ngRoute']);
  
  // Direct ng-view 
  myApp.config(['$routeProvider',function($routeProvider){
    $routeProvider
      <?php MenuItemRouter(); ?>

                    // Subpage development
                    // .when('/subpaging/subpage',{
                    // templateUrl: 'pages/subpaging/subpage.php',
                    // controller: 'mainController'
                    // })

      // Redirect to home page if no URL.
      .otherwise({
         templateUrl: 'pages/FrontPage.php'
      });  
  }]);

// Create controller for URL-tracking and set URL
  myApp.controller('mainController', function($scope,$location){ 

    // Get current URL
    function refreshValues(){
      $scope.locationUrl = $location.url();
    }; refreshValues();
    
    // Set new URL
    $scope.setPath = function ($targetUrl){
      $location.url($targetUrl);
      refreshValues();
    };

    

  })


</script>