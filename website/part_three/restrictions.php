<html>
<body>

<h2>Part 3 - HTML Form Restrictions</h2>

<form method="POST">

    Student ID (8 chars max):
    <input type="text" name="studentid" maxlength="8"><br><br>

    Country:
    <input type="text" name="country" value="Ireland" readonly><br><br>

    <input type="hidden" name="role" value="student">

    <input type="submit">
</form>

<?php
if ($_POST) {

    echo "<h3>Submitted Data:</h3>";

    echo "Student ID: " . $_POST['studentid'] . "<br>";
    echo "Country: " . $_POST['country'] . "<br>";
    echo "Role: " . $_POST['role'] . "<br>";
}
?>

</body>
</html>
