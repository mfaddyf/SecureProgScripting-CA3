<?php
session_start();

// Set session variable
$_SESSION['username'] = "maddy";

echo "Session started<br>";
echo "Username stored in session<br>";

// Show session ID
echo "Session ID: " . session_id();

  // ----- references FOR ALL THREE PARTS!!!
  // https://www.w3schools.com/php/php_sessions.asp
  // https://www.php.net/manual/en/book.session.php
  // https://www.geeksforgeeks.org/php/php-sessions/
?>
