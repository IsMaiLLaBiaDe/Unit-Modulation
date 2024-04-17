<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "../functions/database.php";
    
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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title class="w3-left">Unit-modulation</title>
  <style>
	html body {
	padding: 0px;
	margin: 0px;
	/*overflow: hidden;*/
	overflow-x: hidden;
    }
	 display: flex;
	 .container {
      display: grid;
	  grid-template-columns: 10% 90%;
      grid-gap: 0px;
	  opacity:100%;
    }
   /*.container {
      display: grid;
	  grid-template-columns: 10% 90%;
      grid-gap: 0px;
	  opacity:100%;
    }*/

    .box {

     /* padding: 20px;*/
	 text-align:center; 
	 justify-content:center;
	  opacity:100%;

    }
	.w3-sidebar a {font-family: "Roboto", sans-serif}
	body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
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
	   	 <a href="search.php"><i class=" w3-margin-right fa fa-search"></i></a>
     <!-- <a href="cart.php"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
	  <a href="favored.php"> <i class="fa fa-heart w3-margin-right" ></i></a>-->
	  	  <a href="settings.php"> <i class="fa fa-user w3-margin-right"></i></a>
	     <a href="functions/0.php"><i class="fa fa-sign-out"></i></a>	
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
	   	 <a href="searchs.php"><i class=" w3-margin-right fa fa-search"></i></a>
       <!--<a href="cart.php"><i class="fa fa-shopping-cart w3-margin-right"></i></a>
	   <a href="favored.php"> <i class="fa fa-heart w3-margin-right" ></i></a>-->
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


 <div>

	
  <!-- Image header -->
 <center> 
 <div style="width:95%;" class="w3-container  w3-display-container">

<?php
include_once 'functions/database.php';

$sql = "SELECT * FROM slide ORDER BY time DESC LIMIT 3;";
$result = $conn->query($sql);

	if ($result->num_rows > 0) { while ($row = $result->fetch_assoc()) {?> 
	<div class="w3-display-container mySlides">
 <img  src="<?=$row["EventnSlide"]?>" style="width:100%;height:600px">
<div class=""></div></div>
 <?php
}}
?>
<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
    <div class="w3-display-topleft w3-text-black" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2016</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
</div>

  </div>





<center><h1><center>items</h1>
<div style="margin-top:30px;">
		<?php
include_once 'functions/database.php';
$sql = "SELECT * FROM products ORDER BY id DESC LIMIT 12;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {?>
            <div>
			<div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img style="width:200px;height:200px" src="<?=$row['ppthimg'];?>">
        <p><a href="p/<?=$row['lproduct'];?>.php" ><?=$row['product'];?><a style="display:none;"><?=$row['id'];?></a><br></a><b><?=$row['price'];?></b> </p>
      </div>
   </div>
    </div>

		<?php
    }
} else {
    echo "<center>0 results</center><br>";
}

?>
  
</div>

  <!-- Product grid -->

 

  <!-- Subscribe section -->
  <div style="margin:0px;padding:0px;width:100%;"  class="w3-container w3-w ">
  <div style="margin:0px;padding:0px;background-color: black;"  >
    <div style="width:20%" ><h1 style ="color:white;">Subscribe</h1>
    <p style ="color:white;" >To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%;text-align: center;"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button><div>
	</div>
  </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
			<?php
include_once 'functions/database.php';
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
	    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["fname"]) ?></p>
        
        <p><a href="functions/0.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>
  </div></div>
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
</script>
<script>
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

