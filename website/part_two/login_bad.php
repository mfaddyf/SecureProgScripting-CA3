<html>
<body>
<h2>Login (Vulnerable)</h2>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit">
</form>

<?php
if ($_POST) {
	
	$pdo = new PDO("mysql:host=localhost;dbname=ca3", "maddy", "maddy");

	$u = $_POST['username'];
	$p = $_POST['password'];
	// select statement to find the entered user and password
	$sql = "SELECT * FROM users WHERE username = '$u' AND password = '$p'";
	
    $result = $pdo->query($sql);

    if ($result && $result->rowCount() > 0) {
        echo "Login success!";
    } else {
        echo "Login failed!";
    }
}

	// https://www.w3schools.com/php/php_mysql_intro.asp
	// https://www.w3schools.com/php/php_mysql_select.asp
?>
</body>
</html>
