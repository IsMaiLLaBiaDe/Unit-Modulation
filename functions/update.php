<?php
include './../functions/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$Username = $_POST['Username'];
	$role = $_POST['role'];

    // Update item in the database
	mysqli_query($conn, "UPDATE user SET name='$name', email='$email', Username='$Username', role='$role' WHERE id='$id'");

    header("Location: index.php");
}

// Fetch item details based on the provided ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$row = mysqli_fetch_array($result);

mysqli_close($conn);
?>
