<?php
include_once 'database.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Roles</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["email"] ."</td><td>"."<a" ." style='color:white;' href='../Profile/".$row["lname"].".php'>".$row["username"]."</a>" ."</td><td>".$row["role"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
