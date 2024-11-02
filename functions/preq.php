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
$sql = "INSERT INTO preq (q, fn, ln, email, adresse, np) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $q, $fn, $ln, $email, $adresse, $np);

// Get form data
$q = $_POST['q'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$np = $_POST['np'];
$stmt->execute();


$stmt->close();
$conn->close();
?>