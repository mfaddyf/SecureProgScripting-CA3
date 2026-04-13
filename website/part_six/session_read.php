<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'];
} else {
    echo "No session found";
}

echo "<br>Session ID: " . session_id();
?>
