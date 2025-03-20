<?php
session_start();
if (isset($_SESSION["user_id"])) {

      $mysqli = require __DIR__ . "../../functions/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
}

if ($user['role'] === 'Admin') {}
else {header('Location: /../index.php');}

?>




<!DOCTYPE html>
<html>
<head>
<title>A-dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> Menu</button>
  <span  class="w3-bar-item w3-right"><a href="../functions/0.php"><img  src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:25px"></a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
	    
      <span>Welcome, <strong><?= htmlspecialchars($user["lname"])?></strong></span><br>
      <a href="feedbacks.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="../Profile" class="w3-bar-item w3-button"><i class="fa fa-users"></i></a>
      <a href="Settings.php" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-userss fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="c-product.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Creat Post </a>
    <a href="c-page.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Creat Page</a>
	<a href="u-slide.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Slide </a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="history.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="Settings.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		    <?php 
	  
	  

// Include the database connection file
include './../functions/database.php';

// SQL query to execute
$sql = "SELECT *FROM  feedbacks ORDER BY id DESC LIMIT 1;";



// Prepare and execute the querysql1
$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);


if ($result->num_rows > 0) {
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Created: " . $row["id"];
    }
} else {
    echo "Null";
}

$sql1 = "SELECT * FROM feedbacks";
$stmt1 = mysqli_prepare($conn,$sql1);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
echo "<br>feedbacks : " ." ". mysqli_num_rows($result);

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);


	  
	  
	  ?>
		  
		  
		  </h3>
        </div>
        <div class="w3-clear"></div>
       <center> <a href="feedbacks.php"><h4>See</h4></center>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		    <?php 
	  
	  

// Include the database connection file
include './../functions/database.php';
// SQL query to execute
$sql = "SELECT *FROM  products ORDER BY id DESC LIMIT 1;";



// Prepare and execute the querysql1
$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);


if ($result->num_rows > 0) {
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Created: " . $row["id"];
    }
} else {
    echo "Null";
}

$sql1 = "SELECT * FROM products";
$stmt1 = mysqli_prepare($conn,$sql1);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
echo "<br>Found products : " ." ". mysqli_num_rows($result);

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);


	  
	  
	  ?>
		  
		  
		  </h3>
        </div>
        <div class="w3-clear"></div>
          <center> <a href="srchindixtation.php"><h4>See</h4></center>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		    <?php 
	  
	  

// Include the database connection file
include './../functions/database.php';

// SQL query to execute
$sql = "SELECT *FROM  products ORDER BY id DESC LIMIT 1;";



// Prepare and execute the querysql1
$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);


if ($result->num_rows > 0) {
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Created: " . $row["id"];
    }
} else {
    echo "Null";
}

$sql1 = "SELECT * FROM products";
$stmt1 = mysqli_prepare($conn,$sql1);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
echo "<br>Found products : " ." ". mysqli_num_rows($result);

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);


	  
	  
	  ?>
		  
		  
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <center><a href="userss.php" ><h4>See</h4></a></center>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-userss w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
		  
		  <?php 
	  
	  

// Include the database connection file
include './../functions/database.php';

// SQL query to execute
$sql = "SELECT *FROM  users ORDER BY id DESC LIMIT 1;";

// Prepare and execute the query
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if ($result->num_rows > 0) {
    // Process the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Created: " . $row["id"];
    }
} else {
    echo "No results found";
}

$sql1 = "SELECT * FROM users";
$stmt1 = mysqli_prepare($conn,$sql1);
mysqli_stmt_execute($stmt1);
$result = mysqli_stmt_get_result($stmt1);
echo "<br> Found users :"  ." ". mysqli_num_rows($result);
	

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);


	  
	  
	  ?>
		  </h3>
        </div>
        <div class="w3-clear"></div>
        <center><a href="userss.php" ><h4>See</h4></a></center>
      </div>
    </div>
  </div>



  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="../Assets/mars1.jpg" style="width:90%;" alt="Wiki Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-users w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-userss w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 userss.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
   
  <hr>

  <div class="w3-container">
    
	<br>
   <center> <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button></center>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Recent Created users</h5>
    <ul class="w3-ul w3-card-4 w3-white">

      
       <?php
include './../functions/database.php';
$sql = "SELECT *
FROM users
ORDER BY time DESC
LIMIT 5;
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo "<table border='1'>";
    // echo "<tr><th>Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        // echo "<tr><th>".$row["name"]."</th></tr>";
		
		 echo "<li class='w3-padding-16'><img src='https://www.w3schools.com/w3images/avatar2.png' class='w3-left w3-circle w3-margin-right' style='width:35px'><span class='w3-xlarge'></span>"."<a href='../Profile/".$row["fname"].".php'>".$row["lname"]."</a>"."<br></li>";
    }
    // echo "</table></br>";
} else {
    // echo "0 results</br>";
}


$conn->close();
?>
</span>

  
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="https://www.w3schools.com/w3images/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="https://www.w3schools.com/w3images/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Pages</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Posts</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Profiles</h5>
        <p>userss</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>
      
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["fname"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="Register.html">sign up</a></p>
		


        
    <?php endif; ?>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4></h4>
    <center><p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p></center>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
