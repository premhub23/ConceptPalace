<?php
require_once 'databaseconnect.php';

/* Variables from input form for SQL */
$firstnameErr = $lastnameErr = $emailErr = $countryErr = "";
$firstname = $lastname = $email = $country = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST['firstname']);
    $lastname = test_input($_POST['lastname']);
    $email = test_input($_POST['email']);
    $country = test_input($_POST['country']);
    $message = test_input($_POST['message']);

    // Validate inputs
    if (empty($firstname)) {
        $firstnameErr = "First name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
        $firstnameErr = "Only letters and white space allowed";
    }

    if (empty($lastname)) {
        $lastnameErr = "Last name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
        $lastnameErr = "Only letters and white space allowed";
    }

    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (empty($country)) {
        $countryErr = "Country is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
        $countryErr = "Only letters and white space allowed";
    }

    if (empty($message)) {
        $messageErr = "Message is required";
    }

    // If no errors, insert into the database
    if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($countryErr) && empty($messageErr)) {
        insertUser($conn, $firstname, $lastname, $email, $country, $message);
    }
}

/* Function to clean input */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/* Using prepared statements to insert data */
function insertUser($conn, $firstname, $lastname, $email, $country, $message) {
    $sql = "INSERT INTO contact_us (firstname, lastname, email, country, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $country, $message);
    return mysqli_stmt_execute($stmt);
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ConceptPalace</title>
</head>
<body>
    <form method="POST" action="">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        <span><?php echo $firstnameErr; ?></span><br><br>

        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        <span><?php echo $lastnameErr; ?></span><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span><?php echo $emailErr; ?></span><br><br>

        <label>Country:</label>
        <input type="text" name="country" value="<?php echo $country; ?>">
        <span><?php echo $countryErr; ?></span><br><br>

        <label>Message:</label>
        <textarea name="message"><?php echo $message; ?></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Optionally, display success message after successful insertion
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($countryErr) && empty($messageErr)) {
        echo "Your message has been successfully submitted!";
    }
    ?>
</body>
</html>
