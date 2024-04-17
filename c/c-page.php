

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

<div style="padding:50px;">

      <center> <h1>Add New Page</h1> </center>
    
	
	   <center> <form action="../functions/cpage.php" method="post" id="page" novalidate>        
        <div>
            <label for="page">Creat </label>
            <input type="text" id="page" name="page">

        <button type="submit">Creat page</button>
    </form>
   <center> 
    </center>
	 </div>
</div>


</body>



</html>

