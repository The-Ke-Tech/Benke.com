<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Default MySQL username
$password = "";      // Default MySQL password (empty for XAMPP)
$dbname = "register";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
