<?php
include_once 'database.php';

$sql = "SELECT * FROM slide";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1'>";
    echo "<tr><th>ID</th><th>Link</th><th>alt</th><th>EventnSlide</th><th>title</th><th>time</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["link"] . "</td><td>" . $row["alt"] ."</td><td>" .$row["EventnSlide"] ."</td><td>" .$row["title"]."</td><td>" .$row["time"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
		<?php
include_once '../functions/database.php';

$sql = "SELECT * FROM products WHERE product = item;";         
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {?>
	