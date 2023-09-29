<!DOCTYPE html>
<head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" type="image/x-icon" href="logo.jpg">
</head>
<body>
	<!--
	***********************************************
        *               Credentials                   *
        *       Username: admin                       *
        *       Password: welcome                     *
        ***********************************************
	-->
	<script>
        function Login(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        if (username == "admin" && password == "welcome")
        {
		return true;
        }
        else
        {
                alert("Incorrect username or password");
		return false;
        }
        }
        </script>

        <h1>Fish Finder</h1>
        <img src="logo.jpg" alt="image source: https://www.vecteezy.com/vector-art/4998211-magnifying-glass-with-jumping-fish-inside" style="width:50%; height:50%">
        <p>The most advanced fish database!</p>

        <form onsubmit="return Login()" action="admin.php">
                <input type="text" name="username" id="username" placeholder="Username" />
		<input type="password" name="password" id="password" placeholder="Password"/>
                <input type="submit" value="Log In" />
        </form>
        <a href="index.php">Home</a>
</body>
</html>
