<html>
<body>

<h2>Part 5 - Cookies</h2>

<?php

if (!isset($_COOKIE['username'])) {

    setcookie("username", "maddy", time() + 3600);
    echo "Cookie created! Refresh the page.";

} else {

    echo "Cookie exists: " . $_COOKIE['username'];

    setcookie("username", "", time() - 3600);
    echo "<br>Cookie deleted!";
}
?>

</body>
</html>
