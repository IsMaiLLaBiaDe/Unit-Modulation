<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "um";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





$host = "localhost";
$dbname = "um";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

$connq = mysqli_connect('localhost', 'username', 'password', 'database_name');

