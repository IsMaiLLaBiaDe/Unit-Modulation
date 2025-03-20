<?php
  $mysqli = require __DIR__ . "../../functions/database.php";
$sql = "INSERT INTO page(page)
        VALUES (?)";
		
$stmt = $mysqli->stmt_init();
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("s",$_POST["page"],);
if ($stmt->execute()) {

    header("Location: signup-success.html");
    exit;
	    
}
	?>
	
	<?php
	
  $mysqli = require __DIR__ . "../../functions/database.php";
	  // Get the filename and content from the POST request
$directory = '../p'; // Directory name
$filename = $_POST["page"].'.php'; // File name
$data = '<?php
// index.php

// Set dynamic content
// $PagesTitle = "Welcome to My Website";
// $headerText = "Hello, World!";
// $mainContent = "<p>This is the main content of the Pages.</p>";

// Include the HTML template
require_once "../Events/index.php";
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



?>
	