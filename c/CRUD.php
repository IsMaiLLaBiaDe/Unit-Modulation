  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Executive Superior Officer</title>
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
<h2>Create Record</h2>
    <form action="insert.php" method="post" id="signup" novalidate>
                <div>
            <label for="Username">Username</label>
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
        
        <button>Add User</button>
    </form>

</center>
<hr>
<center>
<h2>Read Records</h2>
<?php include 'read.php'; ?>

<hr>

<h2>Update Record</h2>
<form action="update.php" method="post">
    <div><label>ID to Update: </label><input type="number" name="id" required><br></div>
    <div><label>New Name: </label><input type="text" name="name" ><br></div>
    <div><label>New Email: </label><input type="email" name="email" ><br></div>
	<div><label>New Username: </label><input type="text" name="Username" ><br></div>
	<div><label>Upgrade Role: </label> <input type="text" name="role" required><br></div>
    <input type="submit" value="Update">
</form>

<center/>
<hr>

<center>
<h2>Delete Record</h2>
<form action="delete.php" method="post">
    ID to Delete: <input type="number" name="id" required><br>
    <input type="submit" value="Delete">
</form>

<center/>
</body>
</html>
