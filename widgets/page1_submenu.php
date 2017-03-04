<?php
include("../config.php");
include("../includes/navigation.controller.php");

// CREATE UI FUNCTION TO DISPLAY MAIN MENU ITEMS
function SubMenuItemsDisplay(){
echo '<div ng-controller="mainController">' ;
echo '<ul>';
  global $MenuItems; // Import variables
  
  // If no menu items, cancel script.
  if(!empty($MenuItems)){             
    $i = 0;

    // Create script for each menu item
    while($i < count($MenuItems)){

      // Check if subpage
      if($MenuItems[$i][2]==NULL){
          $MenuItemHide = "none"; // Hide menu item if page
          $Subpage = "/";
      }else if($MenuItems[$i][2]!=NULL){
        $MenuItemHide = ""; // Show menu item if subpage
        $Subpage = '/'.$MenuItems[$i][2].'/';
      }

      ?> 
        <li style="display: <?php echo $MenuItemHide; ?>">
        <a href="#<?php echo $Subpage.$MenuItems[$i][1] ?> ">
       		<?php echo $MenuItems[$i][0]; ?>
        </a>
		    </li>
      <?php
      $i++;
    }
  }
  echo'</ul>';
  echo '</div>';
}

SubMenuItemsDisplay();

?>

