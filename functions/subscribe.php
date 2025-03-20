<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "um";

// Create connection
$conn  
 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare  and execute the SQL statement
$sql = "INSERT subscribe (email) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $e);

// Get form data

$e = $_POST['email'];
$stmt->execute();


$stmt->close();
$conn->close();
header("Location: ../");
?>