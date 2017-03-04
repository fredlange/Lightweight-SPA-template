<?php
include(__DIR_ . "/../config.php");
// Bypass site offline to allow access
function AuthorizeLogin(){
	global $Username, $Password, $SiteOffline;

	// Activate on URL suffix: ?OfflineBypass
	if(isset($_GET["OfflineBypass"])){
		// Make sure a username and password is entered.	
		if(!empty($_POST["usrName"]) && !empty($_POST["psWord"])) {

			// Check to make sure they match the settings.
			if($_POST['usrName'] == $Username && $_POST['psWord']==$Password){
		        echo '<div id="OfflineBorder">Site is offline</div>';
		        $SiteOffline = false;
	     	}else{echo "You entered the wrong details";}
	  }else{echo "Need login details";}
	}
};
?>