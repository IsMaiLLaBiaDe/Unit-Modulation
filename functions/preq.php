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
$sql = "INSERT INTO preq (product,q, fn, ln, email, adresse, np) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $p, $q, $fn, $ln, $email, $adresse, $np);

// Get form data
$p = $_POST['product'];
$q = $_POST['q'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$np = $_POST['np'];
$stmt->execute();
header("Location: ../req-sub.php");

$stmt->close();
$conn->close();
?>