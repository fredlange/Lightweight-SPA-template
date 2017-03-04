<?php

//	SITE OFFLINE?
$SiteOffline = false;
$SiteOfflineMessage = "Website is under construction";

//	USER SETTINGS (Only for site offline)
$Username = "admin";
$Password = "admin";


//	PROJECT ROOT RELATIVE WWW ROOT
// 	Use NULL if placed in root
$ProjectRoot 	= 	"/SinglePage";

// 	SUB DIRECTORY FOR PAGES
// 	Directory from project root folder
$PageDirectory 	=	 "pages";

//	HOMEPAGE Selection
//	Select a file inside the page directory as the homepage.
//	Home page is defined as whatever page when URL is not equal
//	to any page specified in the MenuItems.
$HomePage = "FrontPage";

// 	MAIN MENU ITEMS
// 	Set main menu items by creating additional entries.
//	Make sure to create a PHP-file in the choosen directory
// 	to place the content in.
// 	If menu item is part of submenu then parent menu = filename of the parent menu.
// 	If any special controllers need to be used, declare accordingly. If NULL -> mainController is used
$MenuItems = [

//  ["Title","Filename", "Parent menu", "Controller"] ,
	["Home","FrontPage", "", ""] ,
	["Page 1","page1", "", ""] ,
	["Subpaging","subpaging", "", ""] ,
		["Subpage","subpage", "subpaging", ""] ,
		["Subpage1","subpage1", "subpaging", ""] ,
		["Subpage2","subpage2", "subpaging", ""] ,
		["Subpage3","subpage3", "subpaging", ""] ,
	["Page 3","page3", "", ""] ,
	["Page 4","page4", "", ""] ,
	["FormPage","FormPage", "", "FormController"] ,
];

//	SUB DIRECTORY FOR MODULES
$WidgetDirectory 	=	"widgets";

//	WIDGET MENU ITEM ATTACHMENT
//	Attach widgets to menu items by creating additional entries
//	Make sure to create a PHP-file in the choosen directory
//	to place the content in.
$WidgetAttachment = [

//  ["URL", "Position", "Widget filename"] ,
	["FrontPage", "left", "Greeting"] ,
	["page1", "left", "Greeting2"] ,
	["page2", "left", "Greeting"] ,
	["page3", "left", "Greeting"] ,
	["page3", "left", "contactForm"] ,

	["subpaging", "submenu", "page1_submenu"] ,
		["subpaging/subpage", "submenu", "page1_submenu"] ,
		["subpaging/subpage1", "submenu", "page1_submenu"] ,
		["subpaging/subpage2", "submenu", "page1_submenu"] ,
		["subpaging/subpage3", "submenu", "page1_submenu"] ,

];

//	SMTP-settings for emails
 	$SMTP_Host       =	"smtp.uneedit.se";      // SMTP server example
    $SMTP_SMTPDebug  =	0;                      // enables SMTP debug information (for testing)
    $SMTP_SMTPAuth   =	true;                   // enable SMTP authentication
    $SMTP_Port       =	587;                    // set the SMTP port for the SMTP server
    $SMTP_Username   =	"form@uneedit.se";      // SMTP account username example
    $SMTP_Password   =	"90Cuz43r";             // SMTP account password example


?>
