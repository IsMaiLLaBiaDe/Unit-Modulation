<?php
session_start();
if (isset($_SESSION["user_id"])) {
    
   $mysqli = require __DIR__ . "./../functions/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}



// if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin') {
  // Display the admin.php page

// } else {
  // Redirect the user to the login page
  // header('Location: login.php');
// }

?>

 <title>Executive Superior Officer</title>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
</head>
<body>
<style>

    /* Set the border width and style for all table rows and cells */
table tr td {
  border: 1px solid #ccc;
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
        form {
            display: flex;
			flex:wrap;
          /* flex-direction: column;*/
             align-items: center; 
            margin: 20px auto;
          /*  width: 300px;*/
		  display: block ruby;
        }

        input {
            margin: 10px 0;
            padding: 10px;
           /* width: 100%;  */
            border: 1px solid #ccc;
            outline: none;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        button {
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }


</style>


<center>
<h2>Read Records</h2>

<?php  include 'l10product.php'; ?>





<center/>


<center>


<center/>
</body>
</html>
