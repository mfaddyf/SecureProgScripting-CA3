<html>
<body>

<h2>Part 4 - Input Validation & Sanitisation</h2>

<form method="POST">

    Student ID (8 digits):
    <input type="text" name="studentid"><br><br>

    Email:
    <input type="text" name="email"><br><br>

    Date of Birth:
    <input type="text" name="dob"><br><br>

    Filename:
    <input type="text" name="filename"><br><br>

    <input type="submit">
</form>

<?php
if ($_POST) {

    echo "<h3>Validation Results:</h3>";

    // 1. empty() - if it's empty it will return true , if not it is false
    if (empty($_POST['studentid'])) {
        echo "Student ID is required<br>";
    } else {

        // 2. preg_match() + regex used - ensures its 8 digits
        if (preg_match("/^[0-9]{8}$/", $_POST['studentid'])) {
            echo "Student ID valid<br>";
        } else {
            echo "Student ID must be 8 digits<br>";
        }
    }

    // 3. filter_input() for email safe characters only
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if ($email) {
        echo "Email valid<br>";
    } else {
        echo "Invalid email<br>";
    }

    // 4. strip_tags() for date of birth (remove html/js)
    $dob = strip_tags($_POST['dob']);
    echo "DOB (sanitised): " . $dob . "<br>";

    // 5. htmlspecialchars() (prevents xss output)
    $filename = htmlspecialchars($_POST['filename']);
    echo "Filename safe output: " . $filename . "<br>";

    // extra: demonstrate htmlentities()
    echo "Filename encoded: " . htmlentities($_POST['filename']) . "<br>";

    // ----- references
    // https://www.w3schools.com/php/func_var_empty.asp
    // https://www.w3schools.com/php/func_regex_preg_match.asp
    // https://www.w3schools.com/php//php_regex.asp
    // https://www.w3schools.com/PhP/func_filter_input.asp
    // https://www.w3schools.com/php/func_string_strip_tags.asp
    // https://www.w3schools.com/Php/func_string_htmlspecialchars.asp
    // https://www.w3schools.com/PHP/func_string_htmlentities.asp
    
}
?>

</body>
</html>
