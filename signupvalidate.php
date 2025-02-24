<?php

include("databaseconnect.php");
$conn = mysqli_connect("localhost", "root", "", "conceptpalace2025");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    // Check if password matches confirm password
    if ($password !== $confirmpassword) {
        echo "<h3>Error: Passwords do not match.</h3>";
        exit;
    }

    // Hash the password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    if (insertUser($conn, $firstname, $lastname, $email, $username, $passwordHash)) {
        echo "<h3>Data stored successfully.</h3>";
    } else {
        echo "<h3>Error: Could not store data.</h3>";
    }
}

function insertUser($conn, $firstname, $lastname, $email, $username, $passwordHash) {
    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO signup (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $username, $passwordHash);
    return $stmt->execute();
}

// Close connection
mysqli_close($conn);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ConceptPalace</title>
</head>

<body>
	

	<?php
	$firstnameErr = $lastnameErr = $emailErr = $usernameErr = $passwordErr = $confirmpasswordErr = "";
	$firstname = $lastname = $email = $username = $password = $confirmpassword = "";
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
	   }
  }	
		
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";	
	   }
  }
		
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
		if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";	
	   }
	}
	 if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmpassword"])) {
    $password = test_input($_POST["password"]);
    $confirmpassword = test_input($_POST["confirmpassword"]);
    if (strlen($_POST["password"]) < 8) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
}
elseif(!empty($_POST["password"])) {
    $confirmpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
} else {
     $passwordErr = "Please enter password   ";
}
// Check if the signup button was clicked
		function handlesignup() {
    if (isset($_POST['signup'])) {  
        echo htmlspecialchars("Signup button is clicked.");   
    } else {  
        echo htmlspecialchars("Signup button is not clicked.");  
    }
}

	}
	
		
?>
	
</body>
</html>