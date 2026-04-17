<?php
if (isset($_POST['name'])) {
    echo "Hello " . $_POST['name'];
}

    // simple post request that will reprint the name inputted
?>

<h2>POST Form</h2>

<form method="POST">
    Name: <input type="text" name="name">
    <input type="submit">
</form>
