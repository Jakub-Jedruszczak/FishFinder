<!DOCTYPE html>
<head>
        <title>Insert Fish</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="logo.jpg">
</head>
<body>
        <h1>Fish Finder</h1>
        <img src="logo.jpg" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:50%; height:50%">
        <p>The most advanced fish database!</p>
<?php
mysql_connect("10.10.1.2:3306", "root", "root") or
    die("Error connecting to database: " . mysql_error());

mysql_select_db("fish") or die(mysql_error());


$result = mysql_query(
        "INSERT INTO fish (name, weight, colour) VALUES ('" . $_GET["name"] . "'," .$_GET["weight"]  . ", '" . $_GET["colour"]  . "')")
	or die(mysql_error());

if ($result == true)
{
	echo "Success!";
}
?>

<a href= "index.php">Home</a>
</body>
</html>
