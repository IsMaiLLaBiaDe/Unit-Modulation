<?php
include_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $l = $_POST['Link'];
	$a = $_POST['alt'];
	$el = $_POST['EventnSlide'];
	$t = $_POST['title'];
	$tm = $_POST['time'];

    // Update item in the database
	mysqli_query($conn, "UPDATE slide SET Link='$l', alt='$a', EventnSlide='$el', title='$t', time='$tm' WHERE id='$id'");

    header("Location: ../index.php");
}

// Fetch item details based on the provided ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM slide WHERE id='$id'");
$row = mysqli_fetch_array($result);

mysqli_close($conn);
?>
