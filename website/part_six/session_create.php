<?php
session_start();

// Set session variable
$_SESSION['username'] = "maddy";

echo "Session started<br>";
echo "Username stored in session<br>";

// Show session ID
echo "Session ID: " . session_id();
?>
