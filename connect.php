<?php
// Connect to MySQL
$servername = "localhost";
$username = "username";
$password = "ilias080701";
$dbname = "advertisement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Close connection
mysqli_close($conn);
?>