<h1>Localizador de Peces</h1>
        <img src="logo.png" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:25%; height:25%">
        <p>¡La base de datos de peces más avanzada!</p>

        <form action="search.php" method="GET">
                <input type="text" name="query" />
                <input type="submit" value="Search" />
        </form>

        <p>¡Añade tu propio pescado!</p>

        <form action="add.php" method="GET">  
                <p>Nombre:</p><br>
                <input type="text" name="name" />
                <p>Peso:</p><br>
                <input type="number" name="weight" min="0.1" step="0.1" />
                <p>color:</p><br>
                <input type="text" name="colour" />
                <br>
                <input type="submit" value="Entregar" />
        </form>

        <a href="login.php">login</a>
