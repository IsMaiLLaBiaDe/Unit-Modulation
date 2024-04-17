<?php

session_start();

if (isset($_SESSION["user_id"])) {
    

          $mysqli = require __DIR__ . "../functions/database.php";
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
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
#1s{margin-top: 70px;}

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
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav id="nav" class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="../Assets/mars.png" style="width: 70%;opacity: 80%;padding: 10px;margin: 15px;">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>


<!-- Navbar -->
<div id="navbar"  class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="../Search.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-search"></i></a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
  <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button"></a>
      <a href="#" class="w3-bar-item w3-button"></a>
      <a href="#" class="w3-bar-item w3-button"></a>
    </div>
  </div>
  <a href="out.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar"> <?= htmlspecialchars($user["fname"]) ?>
  </a>
 </div>
</div>
	</div>
 </div>
</div>



<!-- Navbar on small screens -->
<div class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>
<!-- Navbar on small screens (Hidden on medium and large screens) -->

<div id="1s" class="1s" style="margin-top: 60px;" class="w3-top w3-hide-large w3-hide-medium" ></div>


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> <?= htmlspecialchars($user["fname"]) ?>.</h1>   
    <p></p>
    <img src="../Assets/mars.png" alt="A" class="w3-image" width="50%" height="50%">
  </header>
  <a>
  <center>
  
  
<hr>

<h2>Read Records</h2>
<?php include './functions/read.php'; ?>

<hr>

<h2>Update Record</h2>
<center><form action="update.php" method="post">
    <div>ID to Update: </div><?= htmlspecialchars($_SESSION["user_id"]) ?><br>
      <div>New Name:   </div><input type="text" name="name" required><br>
     <div> New Email:  </div> <input type="email" name="email" required ><br>
	  <div>New Username:  </div> <input type="text" name="Username" required><br>
	  <div>Password:  </div><input type="text" name="password" required >
    <br><input type="submit" value="Update">
</form>
</center>


     

  <!-- Footer -->
  <center><div class="w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
 </center></div>
 </body>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
 <script>
        // JavaScript to hide the navbar after scrolling down
        let prevScrollPos = window.pageYOffset;

        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;

            if (prevScrollPos > currentScrollPos) {
                // Show the navbar when scrolling up
                document.getElementById("navbar").style.top = "0";
            } else {
                // Hide the navbar when scrolling down
                document.getElementById("navbar").style.top = "-100px"; // Adjust this value based on the height of your navbar
            }

            prevScrollPos = currentScrollPos;
        }
    </script>
	



