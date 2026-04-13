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

    // 1. empty()
    if (empty($_POST['studentid'])) {
        echo "Student ID is required<br>";
    } else {

        // 2. preg_match() (REGEX - REQUIRED MARKS)
        if (preg_match("/^[0-9]{8}$/", $_POST['studentid'])) {
            echo "Student ID valid<br>";
        } else {
            echo "Student ID must be 8 digits<br>";
        }
    }

    // 3. filter_input() for email
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if ($email) {
        echo "Email valid<br>";
    } else {
        echo "Invalid email<br>";
    }

    // 4. strip_tags() for DOB (remove HTML/JS)
    $dob = strip_tags($_POST['dob']);
    echo "DOB (sanitised): " . $dob . "<br>";

    // 5. htmlspecialchars() (prevents XSS output)
    $filename = htmlspecialchars($_POST['filename']);
    echo "Filename safe output: " . $filename . "<br>";

    // EXTRA: demonstrate htmlentities()
    echo "Filename encoded: " . htmlentities($_POST['filename']) . "<br>";
}
?>

</body>
</html>
