<?php
    // Include dependables
    include(__DIR__ ."/". "config.php");
    include(__DIR__ . "/includes/authorize.php");

echo '<html>';


  AuthorizeLogin();
  // Check if site is offline
  if($SiteOffline){ 
      include(__DIR__ ."/templates/SiteOffline_template.php");
    }else{
      include(__DIR__ ."/". "header.php");
      include(__DIR__ ."/". "includes/widgetDisplay.php");
      include(__DIR__ ."/". "main.php");
    }

echo '</html>';
?>
