
<?php
include 'config.php';
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$role = "User";

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (Username,name,email,password,role,password_hash)
        VALUES (?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssss",
				  $_POST["Username"],
                  $_POST["name"],
				  $_POST["email"],
				  $_POST["password"],
			      $role,
                  $password_hash);
                  
    // Insert new item into the database

if ($stmt->execute()) {

    header("Location: Success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Non disponible already taken Change Up Form Value");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}


    header("Location: index.php");


mysqli_close($conn);
?>

