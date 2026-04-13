<?php
session_start();

session_unset();   // remove variables
session_destroy(); // destroy session

echo "Session destroyed";
?>
