<html>
<body>

<h2>Login (Secure)</h2>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit">
</form>

<?php
if ($_POST) {
        // DB connection
        $pdo = new PDO("mysql:host=localhost;dbname=ca3", "maddy", "maddy");

        // get user input
        $u = $_POST['username'];
        $p = $_POST['password'];

        // SECURE: prepared statement (prevents SQL injection
        // input treated as data only and not actual sql input
        $stmt = $pdo->prepare(
            "SELECT * FROM users WHERE username = ? AND password = ?"
        );

        $stmt->execute([$u, $p]);

        // chekcing the result
        if ($stmt->rowCount() > 0) {
            echo "Login success!";
        } else {
            echo "Login failed!";
		}
	}

	// https://www.w3schools.com/php/php_mysql_select.asp
	// https://www.w3schools.com/php/php_mysql_prepared_statements.asp
	
?>

</body>
</html>
