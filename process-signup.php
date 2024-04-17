<?php

if (empty($_POST["fname"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}
print_r($_POST);
// var_dump($password_hash);
$role = "User";
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/functions/database.php";

$sql = "INSERT INTO users (username,fname,lname,phone,email,country,city,password,password_hash)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $conn->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("sssssssss",
	              $_POST["username"],
                  $_POST["fname"],
				  $_POST["lname"],
                  $_POST["phone"],
				  $_POST["email"],
                  $_POST["country"],
				  $_POST["city"],
                  $_POST["password"],
				  $password_hash);


if ($stmt->execute()) {

    header("Location: success.html");
    exit;
    
} else {
    
    if ($conn->errno === 1062) {
        die("Non disponible already taken Change Up Form Value");
    } else {
        die($conn->error . " " . $conn->errno);
    }
}






