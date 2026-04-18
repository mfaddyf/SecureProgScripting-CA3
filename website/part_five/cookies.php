<html>
<body>

<h2>Part 5 - Cookies</h2>

<?php

if (!isset($_COOKIE['username'])) {

    // creates cookie and assigns the cookie the username maddy to reprint later 
    setcookie("username", "maddy", time() + 3600);
    // instructs user to refresh the page to view the retained cookie information
    echo "Cookie created! Refresh the page.";

} else {

    // reprints the username assigned to the cookie to the web application
    echo "Cookie exists: " . $_COOKIE['username'];
    // deletes the cookie assigned to the username 
    setcookie("username", "", time() - 3600);
    echo "<br>Cookie deleted!";
}

    // next time you refresh the page a new cookie is made
    // refresh again and it is displayed with the user + deleted again
    // done this way for quick demo / easy screenshots rather than waiting for ages

    // ----- references
    // https://www.w3schools.com/php/php_cookies.asp
    // https://www.php.net/manual/en/features.cookies.php
?>

</body>
</html>
