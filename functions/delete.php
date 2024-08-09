
<?php
include 'config.php';

// Delete item based on the provided ID
$id = $_POST['id'];
mysqli_query($conn, "DELETE FROM user WHERE id='$id'");

header("Location: index.php");


mysqli_close($conn);
?>
