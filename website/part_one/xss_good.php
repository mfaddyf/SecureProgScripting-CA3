<?php
if (isset($_POST['text'])) {
    echo htmlspecialchars($_POST['text']);
}
    // htmlspecialchars turns special characters into html entities so they cannot execute in a string
?>

<h2>XSS Secure</h2>

<form method="POST">
    Enter text: <input type="text" name="text">
    <input type="submit">
</form>
