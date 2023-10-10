<!DOCTYPE html>
<head>
        <title>Admin Control Panel</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>
	<?php
		# check if logged in
		if ($_COOKIE['login'] != "pass")
		{
			die('Forbidden');
		}

		mysql_connect("10.10.1.2:3306", "root", "root") or
 		die("Error connecting to database: " . mysql_error());
		mysql_select_db("fish") or die(mysql_error());
	?>

        <h1>Control Panel</h1>
        <img src="logo.png" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:50%; height:50%">
        <p>The most advanced fish database!</p>
        
        <form method="GET" action="admin.php">
                <input type="text" name="query" id="query" placeholder="query" />
                <input type="submit" value="Execute" />
        </form>
        
        <?php
        	if (!empty($_GET["query"])){
        		echo "Query: " . $_GET["query"] . "<br>";
        		$raw_results = mysql_query($_GET["query"]) or die(mysql_error());
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
        	}	
        	
        ?>

        <a href="index.php">log out</a>
</body>
</html>
