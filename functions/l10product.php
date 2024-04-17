<?php
include_once '../functions/database.php';

$sql = "SELECT *
FROM users
ORDER BY time DESC
LIMIT 10;
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Username</th><th>Roles</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["email"] ."</td><td>" . $row["username"]."</td><td>" .$row["role"] . "</td></tr>";
    }
    echo "</table></br>";
} else {
    echo "0 results</br>";
}

$sql1 = "SELECT *
FROM products
ORDER BY time DESC
LIMIT 10;
";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Title</th><th>content</th><th>keyword</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titles"] . "</td><td>" . $row["contents"] ."</td><td>" . $row["keywords"]."</td></tr>";
    }
    echo "</table></br>";
} else {
    echo "0 results</br>";
}

$sql2 = "SELECT *
FROM users 
ORDER BY time DESC
LIMIT 10;
";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Country</th><th>Subject</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] ."</td><td>" . $row["country"]."</td><td>" . "</td></tr>";
    }
    echo "</table><br>";
} else {
    echo "0 results<br>";
}

$conn->close();
?>
