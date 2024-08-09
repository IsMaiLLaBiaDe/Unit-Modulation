
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin INDEXTATION Reading Page</title></head>
		<body>
    <h1>INDEXTATION</h1></body>
	<?php
include_once '../functions/database.php';


$sql = "SELECT * FROM products ORDER BY id DESC
;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table border='1'>";
    echo "<tr><th>ID</th><th>Title</th><th>Content</th><th>keywords</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titles"] . "</td><td>" . $row["contents"] ."</td><td>" . $row["keywords"]."</td></tr>";
    }
    echo "</table></center>";
} else {
    echo "<center>0 results</center>";
}

$conn->close();
?>

  <style>
		    /* Set the border width and style for all table rows and cells */
 table tr td {
  border: 1px solid #ccc;
 text-align: justify;
  white-space: nowrap;
}
row{
  border: 1px solid #ccc;
 text-align: justify;
  white-space: nowrap;
}

/* Set the padding for all table cells */
 table tr td {
  padding: 5px;
}

/* Set the background color for table headers */
table th {
  background-color: #f2f2f2;
}

/* Center the text in table headers */
table th {
  text-align: center;
}

/* Set the width of the table to 100% */
table {
  width: 50%;
}
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        textarea {
            width: 100%;
            height: 150px;
			white-space: pre-wrap;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

input {
  margin: 10px 0;
  padding: 10px;
  /* width: 100%;*/
  border: 1px solid #ccc;
  outline: none;

}
    </style>

	<html>