<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database host if it's different
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$database = "lily"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission and authentication here
// Your authentication code goes here...

// Close connection
mysqli_close($conn);
?>
