<!DOCTYPE html>
<head>
	<title>Fish Finder</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="icon" type="image/x-icon" href="logo.jpg">
	<meta charset="utf-8">
</head>
<body>
	<br>
	<a href="index.php?lang=eng.php">English </a>
        <a href="index.php?lang=esp.php">Espanol </a>
	<?php
		if (empty($_GET["lang"]))
		{
			include("eng.php");
		}
		else
		{
			include($_GET["lang"]);
		}
	?>
</body>
</html>
