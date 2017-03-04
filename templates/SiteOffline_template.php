<head>
	<!-- HEADER ONLY APPLIES TO TEMPLATE -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="styles/style.css">  
</head>
<body id="SiteOffline">
<?php 
	echo "<h1>" . $SiteOfflineMessage . "</h1>";
?>

<p>Login to access site.</p>
	<form method="post" action="/SinglePage/?OfflineBypass">
		Användarnamn:<br>
		<input type="text" name="usrName"><br>
		Lösenord:<br>
		<input type="text" name="psWord"><br>
		<input type="submit" value="Logga in">
	</form> 
</body>


