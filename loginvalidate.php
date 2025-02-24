<?php
include ("databaseconnect.php");
$conn = mysqli_connect("localhost", "root", "", "conceptpalace2025");
        
// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_REQUEST['submit'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
}

// Function to sanitize input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to insert data into the database
function insertUser($conn, $username, $password) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
    // Using prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $passwordHash);
    
    if ($stmt->execute()) {
        echo "<h3>Data stored in a database successfully. Please browse your localhost phpMyAdmin to view the updated data.</h3>";
    } else {
        echo "ERROR: Could not execute query. " . mysqli_error($conn);
    }
    $stmt->close();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameErr = $passwordErr = "";
    $username = $password = "";

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
            $usernameErr = "Only letters and white space allowed";    
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Validate password pattern
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
            $passwordErr = "Password must contain at least 8 characters, including uppercase, lowercase, number, and special character.";
        }
    }

    // If no errors, insert user into the database
    if (empty($usernameErr) && empty($passwordErr)) {
        insertUser($conn, $username, $password);
    }
}

mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ConceptPalace</title>
</head>

<body>
    <h2>Register</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username" value="<?php echo $username;?>">
        <span><?php echo $usernameErr;?></span><br><br>
        
        Password: <input type="password" name="password" value="<?php echo $password;?>">
        <span><?php echo $passwordErr;?></span><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
