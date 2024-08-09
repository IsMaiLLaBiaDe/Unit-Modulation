<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Example</title>
</head>
<body>



<h2>Create Record</h2>
    <form action="insert.php" method="post" id="signup" novalidate>
                <div>
            <label for="Username">UserName</label>
            <input type="text" id="Username" name="Username">
        </div>
		<div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button>Sign up</button>
    </form>


<hr>

<h2>Read Records</h2>
<?php include 'read.php'; ?>

<hr>

<h2>Update Record</h2>
<form action="update.php" method="post">
    ID to Update: <input type="number" name="id" required><br>
    New Name: <input type="text" name="name" required><br>
    New Email: <input type="email" name="email" required><br>
	New Username: <input type="text" name="Username" required><br>
	Upgrade Role: <input type="text" name="role" required><br>
    <input type="submit" value="Update">
</form>

<hr>

<h2>Delete Record</h2>
<form action="delete.php" method="post">
    ID to Delete: <input type="number" name="id" required><br>
    <input type="submit" value="Delete">
</form>

</body>
</html>
