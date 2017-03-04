<?php
// CREATE UI FUNCTION TO DISPLAY MAIN MENU ITEMS
function MainMenuItemsDisplay(){
  echo '<ul>';
  global $MenuItems; // Import variables

  // If no menu items, cancel script.
  if(!empty($MenuItems)){
    $i = 0;

    // Create script for each menu item
    while($i < count($MenuItems)){

      // Check if subpage
      if($MenuItems[$i][2]==NULL){
          $MenuItemHide = "inline"; // Show menu item if page
      }else if($MenuItems[$i][2]!=NULL){
        $MenuItemHide = "none"; // Hide menu item if subpage
      }
      ?> <li style="display: <?php echo $MenuItemHide; ?>"><a href="" ng-click="setPath('<?php echo $MenuItems[$i][1]; ?>')"><?php echo $MenuItems[$i][0]; ?></a></li>
      <?php
      $i++;
    }
  }
  echo "</ul>";
};

// CREATE ROUTER CAPABILITIES TO DISPLAY MAIN MENU ITEM CONTENT
function MenuItemRouter(){
    global $MenuItems, $PageDirectory; // Import variables

    // If no menu items, cancel script.
    if(!empty($MenuItems)){
      $i = 0;

      // Create script for each menu item
      while($i < count($MenuItems)){

        // Check if there are subpages
        if($MenuItems[$i][2]==NULL){
          $Subpage = "/";
        }else{
          $Subpage = "/" .$MenuItems[$i][2]. "/";
        }

        // Check if there are specific controllers
        if($MenuItems[$i][3]==NULL){
          $Controller = "mainController";
        }else{
          $Controller = $MenuItems[$i][3];
        }

        echo ".when('".$Subpage.$MenuItems[$i][1]."', {templateUrl: '".$PageDirectory.$Subpage.$MenuItems[$i][1].".php', controller: '".$Controller."' })
        "; // end echo
        $i++;
      }
    }
  }
?>

<!-- CREATE NAVIGATION CONTROLLER -->
<script>
  // Direct ng-view
  myApp.config(['$routeProvider',function($routeProvider){
    $routeProvider
      <?php MenuItemRouter(); ?>

      // Redirect to home page if no URL.
      .otherwise({
         redirectTo: '<?php $HomePage; ?>'
      });
  }]);

// Create controller for URL-tracking and set URL
  myApp.controller('NavigationController', function($scope,$location){

    // Get current URL
    function refreshValues(){
      $scope.locationUrl = $location.url();
    }; refreshValues();

    // Set new URL
    $scope.setPath = function ($targetUrl){
      $location.url($targetUrl);
      refreshValues();
    };
  });

</script>
