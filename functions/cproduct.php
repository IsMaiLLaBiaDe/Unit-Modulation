<?php

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "../functions/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}


  $mysqli = require __DIR__ . "./../functions/database.php";
$sql = "INSERT INTO products(product,quantity,price,description,title,ppthimg,keyword,lproduct)
        VALUES (?,?,?,?,?,?,?,?)";
		
$stmt = $mysqli->stmt_init();
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("ssssssss",$_POST["product"],$_POST["quantity"],$_POST["price"],$_POST["description"],$_POST["title"],$_POST["ppthimg"],$_POST["keyword"],$_POST["lproduct"]);
if ($stmt->execute()) {



  $mysqli = require __DIR__ . "./../functions/database.php";
	  // Get the filename and content from the Posts request
$directory = '../p/'; // Directory name
$filename = $_POST["lproduct"].'.php'; // File name
$data = '<?php
// index.php

// Set dynamic content
// $PostsTitle = "Welcome to My Website";
// $headerText = "Hello, World!";
// $mainContent = "<p>This is the main content of the Posts.</p>";

// Include the HTML template
require_once "../p/index.php";
?>
'; // Data to be written

// Check if the directory exists
if (!is_dir($directory)) {
  // Create the directory if it doesn't exist
  mkdir($directory);
}

// Open the file for writing
$fp = fopen($directory . '/' . $filename, 'w');

// Write the data to the file
fwrite($fp, $data);

// Close the file
fclose($fp);

// Display a success message
// echo "File created successfully.";

    header("Location: signup-success.html");
    exit;
	    
}



?>
	