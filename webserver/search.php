<?php
mysql_connect("10.10.1.2:3306", "root", "root") or
    die("Error connecting to database: " . mysql_error());

mysql_select_db("fish") or die(mysql_error());
?>

<!DOCTYPE html>
<head>
        <title>Search</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="icon" type="image/x-icon" href="logo.jpg">
</head>
<body>
	<h1>Fish Finder</h1>
	<img src="logo.jpg" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:50%; height:50%">
	<p>The most advanced fish database!</p>
	<form action="search.php" method="GET">
                <input type="text" name="query" />
                <input type="submit" value="Search" />
        </form>
<?php
$query = $_GET["query"];
echo "<p>Showing results for: " . $query . "</p><br>";

$min_length = 3;

if (strlen($query) >= $min_length) {
    ($raw_results = mysql_query(
        "SELECT * FROM fish WHERE (`name` LIKE '%" . $query . "%') OR (`colour` LIKE '%" . $query . "%')"
    )) or die(mysql_error());

    if (mysql_num_rows($raw_results) > 0) {
        echo "<table border=1>
                  <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Weight</th>
                        <th>Colour</th>
                  </tr>";
        while ($results = mysql_fetch_array($raw_results)) {
            echo "<tr>
         <td>" .
                $results["id"] .
                "</td>
        <td>" .
                $results["name"] .
                "</td>
         <td>" .
                $results["weight"] .
                "</td>
         <td>" .
                $results["colour"] .
                "</td>
         </tr>";
        }
        echo "</table>";
    }
    else {
        echo "<p>No results for:" . $_GET["query"] . "</p>";
    	}
	}
	else {
    echo "Minimum length is " . $min_length;
}
?>
<a href= "index.php">Home</a>
</body>
</html>
