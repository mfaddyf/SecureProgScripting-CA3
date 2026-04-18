<html>
<body>

<h2>Part 3 - HTML Form Restrictions</h2>

<form method="POST">

    <!-- limiting the text to 8 chraacters , cannot type past 8 characters -->
    Student ID (8 chars max):
    <input type="text" name="studentid" maxlength="8"><br><br>

    <!-- cannot edit the value as it is marked as read only -->
    Country:
    <input type="text" name="country" value="Ireland" readonly><br><br>

    <!-- not visible until it is printed as it is marked as hidden -->
    <input type="hidden" name="role" value="student">

    <input type="submit">
</form>

<?php
if ($_POST) {

    echo "<h3>Submitted Data:</h3>";

    // just reprinting the values to the screen to demo how it works, revealing hidded, ect
    echo "Student ID: " . $_POST['studentid'] . "<br>";
    echo "Country: " . $_POST['country'] . "<br>";
    echo "Role: " . $_POST['role'] . "<br>";
}
?>

    <!--
    https://www.w3schools.com/html/html_form_input_types.asp
    https://www.w3schools.com/tags/att_input_readonly.asp
    https://www.w3schools.com/tags/att_input_maxlength.asp
    -->
    
</body>
</html>
