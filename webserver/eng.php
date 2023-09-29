<h1>Fish Finder</h1>
        <img src="logo.png" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:25%; height:25%">
        <p>The most advanced fish database!</p>

        <form action="search.php" method="GET">
                <input type="text" name="query" />
                <input type="submit" value="Search" />
        </form>

        <p>Add your own fish!</p>

        <form action="add.php" method="GET">  
                <p>Name:</p><br>
                <input type="text" name="name" />
                <p>Weight:</p><br>
                <input type="number" name="weight" min="0.1" step="0.1" />
                <p>Colour:</p><br>
                <input type="text" name="colour" />
                <br>
                <input type="submit" value="Submit" />
        </form>

        <a href="login.php">login</a>
