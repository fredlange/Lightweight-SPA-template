<?php

// Include subpages details
include("/data/MenuItems.php");


function MainMenuItemsDisplay(){
  echo "<ul>";
  global $MainMenuItems; // Import variables
  
  // If no menu items, cancel script.
  if(!empty($MainMenuItems)){             
    $i = 0;

    // Create script for each menu item
    while($i < count($MainMenuItems)){
      echo '<li><a href="#/'.$MainMenuItems[$i][1].' ">'.$MainMenuItems[$i][0].'</a></li>';
      $i++;
    }
  }
  echo"</ul>";
}

  
?>