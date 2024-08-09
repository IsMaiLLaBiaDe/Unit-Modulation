

</html>
<html> 
<meta charset="UTF-8">
<link href="w3.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title class="w3-left">Creat-Product</title>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->



<!-- Navbar -->

	

<div style="padding:50px;">

      <center> <h1>Add New Page</h1> </center>
    
	<center>
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
<?php include '../functions/read.php'; ?>

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

   <center> 
    </center>
	 </div>
</div>


</body>



</html>

