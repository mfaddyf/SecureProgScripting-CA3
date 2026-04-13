<?php
if (isset($_POST['text'])) {
    echo $_POST['text']; // not safe !!!
}
?>

<h2>XSS Vulnerable</h2>

<form method="POST">
    Enter text: <input type="text" name="text">
    <input type="submit">
</form>
