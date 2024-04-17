<?php
include_once '../functions/database.php';

$sql = "SELECT * FROM products ORDER BY time DESC LIMIT 10;";
$result = $conn->query($sql);

	if ($result->num_rows > 0) { while ($row = $result->fetch_assoc()) {?>
       <a><?=$row["id"]?>  <?=$row["product"]?>  <?=$row["title"]?><br></a>


<?php
}}
?>