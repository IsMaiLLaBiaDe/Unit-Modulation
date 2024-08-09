<?php

session_start();

if (isset($_SESSION["user_id"])) {
    

          $mysqli = require __DIR__ . "./../functions/database.php";
    $sql = "SELECT * FROM users WHERE id = {$_SESSION["user_id"]}";
            
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
}

if ($user['role'] === 'Admin') {}
else {header('Location: /../index.php');}

// if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'User'||$_SESSION['user_role'] == 'UserPlus'||$_SESSION['user_role'] == 'Admin') {
  // Display the admin.php page


// } else {
  // Redirect the user to the login page
  // header('Location: ../index.php');
// }

 // $session_id = session_id();
// $role=$_POST["username"];
// Check if the PHPSESSID is set
// if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    // header('Location: login.php');
    // exit;
// }

// User is logged in, proceed with normal page logic
           

?>

 
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
<div id="navbar"  class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="../Search.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-search"></i></a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green"></span></button>     
  <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button"></a>
      <a href="#" class="w3-bar-item w3-button"></a>
      <a href="#" class="w3-bar-item w3-button"></a>
    </div>
  </div>
  <a href="out.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">   </a>
 </div>
</div>
	</div>
 </div>
</div>

<div style="padding:50px;">
   <center> <h1>Creat a New Product</h1> </center>
    
   <center> <form action="../functions/cproduct.php" method="post" id="product" novalidate>        
        <div>
				
		    <label for="id">id</label>
            <input type="text" id="id" name="id"><br><br>
			
		    <label for="product">Creat</label>
            <input type="text" id="product" name="product"><br><br>
		
			<label for="quantity">Quantity</label>
            <input type="text" id="quantity" name="quantity"><br><br>
			
			 <label for="price"> Price</label>
            <input type="text" id="price" name="price"><br><br>
			
            <label for="description">Description</label>
            <input type="text" id="description" name="description"><br><br>
			
			<label for="title">Title</label>
            <input type="text" id="title" name="title"><br><br>
			<label for="ppthimg">Image</label>
            <input type="ppthimg" id="ppthimg" name="ppthimg"><br><br>
			<label for="keyword">Keyword</label>
            <input type="text" id="keyword" name="keyword"><br><br>
			
			<label for="lproduct">Link</label>
            <input type="text" id="lproduct" name="lproduct"><br><br>


        <button>Posts up</button>
    </form>
    </center>

</body>
</html>
