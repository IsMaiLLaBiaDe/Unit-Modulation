
<?php
include 'config.php';

// Delete item based on the provided ID
$idi = $_POST['idi'];
$idf = $_POST['idf'];

mysqli_query($conn, "DELETE FROM feedbacks WHERE id BETWEEN $idi AND $idf");

header("Location: index.php");


mysqli_close($conn);
?>
