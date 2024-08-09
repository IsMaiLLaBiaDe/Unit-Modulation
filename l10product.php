<?php
include_once 'functions/database.php';

$sql = "SELECT * FROM slide ORDER BY time DESC LIMIT 3;";
$result = $conn->query($sql);

	if ($result->num_rows > 0) { while ($row = $result->fetch_assoc()) {?>
       <a><?=$row["id"]?></a>


<?php
}}
?>