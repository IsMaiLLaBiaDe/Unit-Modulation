<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "../../functions/database.php";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="w3.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title class="w3-left">Unit-modulation</title>
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
            /* margin: 20px auto; */
        }

        label {
            display: block;
            */margin-bottom: 8px;*/
        }

        textarea {
            width: 100%;
            height: 150px;
			white-space: pre-wrap;
        }


@media screen and (max-width: 600px) {
  form {
    display: none;
  }
}

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
			border-radius: 4%;
			/* width: 100%;*/
			margin-top: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

input {
  margin: 10px 0;
  padding: 10px;
  /*width: 100%;*/
  border: 1px solid #ccc;
  outline: none;
  border-radius: 11%;
  /*style="position: absolute;top: 7%;left: 60%;"*/

}
.flex-container {
  display: flex;
  flex-wrap: nowrap;
  /*background-color: DodgerBlue;*/
}

.flex-container > div {
  /* background-color: #f1f1f1;*/
  width: 100%;
  /* margin: 10px;*/
  text-align: center;
  /*line-height: 100%;*/
  font-size: 30px;
}
  </style>
</head>
<body>
  <div class="container">
    <!--<div class="w3-content" style="max-width:1200px" class="box"><nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>LOGO</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Shirts</a>
    <a href="#" class="w3-bar-item w3-button">Dresses</a>
    <a onclick="" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Jeans <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>
      <a href="#" class="w3-bar-item w3-button">Relaxed</a>
      <a href="#" class="w3-bar-item w3-button">Bootcut</a>
      <a href="#" class="w3-bar-item w3-button">Straight</a>
    </div>
    <a href="#" class="w3-bar-item w3-button">Jackets</a>
    <a href="#" class="w3-bar-item w3-button">Gymwear</a>
    <a href="#" class="w3-bar-item w3-button">Blazers</a>
    <a href="#" class="w3-bar-item w3-button">Shoes</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>
<!-- Top menu on small screens -->
<!--<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<!--<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</div>
  --> <center>
 <?php

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {

    // User is logged in, display content for logged-in users
?>
 


 <div  class="box">
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <center><p class="w3-left"><a>Unit-modulation</a></p></center>
    <p class="w3-right">
	   	 <a href="../search.php"><i class=" w3-margin-right fa fa-search"></i></a>
      <a href="cart.php"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
	  <a href="favored.php"> <i class="fa fa-heart w3-margin-right" ></i></a>
	  <a href="functions/0.php"><i class="fa fa-sign-out"></i></a>	
	  	 <!-- <a href="user.php"> <i class="fa fa-user w3-margin-right"></i> <i style="font-size:11px;"> Hello <?= htmlspecialchars($user["fname"]) ?></i></a> -->
    </p>
  </header>
   
</div>
 </div>
  <!--<p>This content is visible to logged-in users.</p> -->
   
<?php
} else {
    // User is not logged in, display content for non-logged-in users
?>
 <div  class="box">
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin:px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <center><p class="w3-left"><a>Unit-modulation</a></p></center>
    <p class="w3-right">
	   	 <a href="search.php"><i class=" w3-margin-right fa fa-search"></i></a>
       <a href="cart.php"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
	   <a href="favored.php"> <i class="fa fa-heart w3-margin-right" ></i></a>
	   <a href="login.php" ><i class=" fa fa-sign-in"></i></a>
	   <a href="signup.php"><i class="fa fa-user"></i></a>
	   
    </p>
  </header>

</div>
        <!-- Your HTML content for non-logged-in users here --> 
         <!-- <p>You are not logged in. Please log in to see the content.</p> -->
<?php
}
?>

<center>



	
	

<div style="font-size:13px;">
<?php 
$id=$_GET['id'];
//echo 'id'.$id .'<br>';

	include '../functions/database.php';
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    //echo "<table border='1'>";
   // echo "<tr><th>ID</th><th>product</th><th>item</th><th>id</th><th>id</th></tr>";
    while ($row = $result->fetch_assoc()) {
       // echo "<tr><td>" . $row["id"] . "</td><td>" . $row["product"] . "</td><td>" . $row["item"] ."</td><td>".$row["id"] ."</td><td>".$row["id"] . "</td></tr>";
	   ?> <?=$row["description"]?>
<?php    }
    echo "</table>";
} else {
    echo "0 results";
}


?>





  
  

</div>	
<div style="background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
background-image:url('../assets/slide/ipad.png'); background-color:gray;" class="flex-container">
  <div><center><form  style="height:50%;width:50%;font-size: 50%;color:white;" action="../functions/preq.php" method="post">
    <label for="quantity">Quantity:</label>
    <input type="number" min="1" id="q" name="q"><br><br>
    <label for="FirstName">First Name:</label>
    <input type="text" id="fn" name="fn"><br><br>
    <label for="LastName">Last Name:</label>
	<input type="text" id="ln" name="ln"><br><br>
	<label for="email">email</label>
	<input type="email" id="email" name="email"><br><br>
<label for="adresse">Adresse</label>
	<input type="text" id="adresse" name="adresse"><br><br>
	<label for="NumberPhone">Phone</label>
	<input type="text" id="np" name="np"><br><br>
    <input type="submit" value="Submit">
</form>   </div></center></center>
</div>



  

   

	    <h1 style="padding:30px">Home</h1>
    

	<!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
			<?php

$sql = "SELECT * FROM cd ORDER BY id DESC LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {?>
    
	      <div class="w3-col s4">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> <?=$row['companyname'];?></p>
        <p><i class="fa fa-fw fa-phone"></i><?=$row['phone'];?></p>
        <p><i class="fa fa-fw fa-envelope"></i> <?=$row['email'];?></p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> <?=$row['companyname'];?></p>
        <p><i class="fa fa-fw fa-credit-card"></i><?=$row['companyname'];?></p>
        <br>
        <a href="https://www.google.com/<?=$row['fb'];?>/" class="fa fa-facebook-official w3-hover-opacity w3-large"></a>
        <a href="https://www.google.com/<?=$row['ig'];?>/"  class="fa fa-instagram w3-hover-opacity w3-large"></a>
        <a href="https://www.google.com/<?=$row['sp'];?>/"  class="fa fa-snapchat w3-hover-opacity w3-large"></a>
        <a href="https://www.google.com/<?=$row['pt'];?>/"  class="fa fa-pinterest-p w3-hover-opacity w3-large"></a>
        <a href="https://www.google.com/<?=$row['tw'];?>/"  class="fa fa-twitter w3-hover-opacity w3-large"></a>
        <a href="https://www.google.com/<?=$row['ld'];?>/"  class="fa fa-linkedin w3-hover-opacity w3-large"></a>
		<?php
    }
} else {
    echo "<center>0 results</center><br>";
}
$conn->close();
?>
      </div>
      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a> <a href="#"> We're erettryre</a><a href="#"> We're erettryre</a><a href="#"> We're erettryre</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>

     <div class="w3-col s4">     
	 <h4>Contact</h4>
	      <p>Questions? Go ahead.</p>
	<form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form></div>
	

    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

  <!-- End page content -->
</div>







	</body>





<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</html>


