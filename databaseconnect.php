<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conceptpalace</title>
</head>

<body>
	
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "conceptpalace2025";
	
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html>