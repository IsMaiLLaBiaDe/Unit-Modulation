<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
</head>
<body>

<?php
// Include database connection
include 'config.php';

// Fetch all items from the database
$result = mysqli_query($conn, "SELECT * FROM items");

echo "<h2>Items List</h2>";

// Display items in a table
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Action</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

<a href="add.php">Add New Item</a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
</head>
<body>

<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    // Insert new item into the database
    mysqli_query($conn, "INSERT INTO items (name) VALUES ('$name')");

    header("Location: index.php");
}

mysqli_close($conn);
?>

<h2>Add New Item</h2>

<form method="post" action="">
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Add Item</button>
</form>

<a href="index.php">Back to List</a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
</head>
<body>

<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];

    // Update item in the database
    mysqli_query($conn, "UPDATE items SET name='$name' WHERE id='$id'");

    header("Location: index.php");
}

// Fetch item details based on the provided ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM items WHERE id='$id'");
$row = mysqli_fetch_array($result);

mysqli_close($conn);
?>

<h2>Edit Item</h2>

<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
    <button type="submit">Update Item</button>
</form>

<a href="index.php">Back to List</a>

</body>
</html>

<?php
include 'config.php';

// Delete item based on the provided ID
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM items WHERE id='$id'");

header("Location: index.php");

mysqli_close($conn);
?>

<?php
$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
$servername = "your_database_host";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
