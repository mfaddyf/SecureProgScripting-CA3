<?php
if (isset($_GET['name'])) {
    echo "Hello " . $_GET['name'];
}
?>

<h2>GET Form</h2>

<form method="GET">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
