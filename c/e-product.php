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
  <a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i></a>
  <a href="../c/A-Dashboard.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="../Search.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-search"></i></a>
  <a href="c-product.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">

  
  </div>
  <a href="../functions/0.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">   </a>
 </div>
</div>

<div style="padding:50px;">
<center>
<h2>Read Records</h2>
<?php include '../functions/p-read.php'; ?>

<hr>

   <center> <h1>Update Product</h1> </center>

   <center> <form action="../functions/p-update.php" method="post" id="signup" novalidate>
                <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
		<div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </div>
        
        <div>
            <label for="quantity">quantity</label>
            <input type="text" id="quantity" name="quantity">
        </div>
        
        <div>
            <label for="product">product</label>
            <input type="text" id="product" name="product">
        </div>
		<div>
            <label for="description">description</label>
            <input type="text" id="description" name="description">
        </div>
        
        <div>
            <label for="keyword">keyword</label>
            <input type="text" id="keyword" name="keyword">
			</div>
			<div>
     <label for="title">title</label>
            <input type="text" id="title" name="title"></div>
			<div>
			<div>
     <label for="status">status</label>
            <input type="text" id="status" name="status"></div>
			<div>
     <label for="ppthimg">ppthimg</label>
            <input type="text" id="ppthimg" name="ppthimg">		
			</div>

<div>			     <label for="lproduct">lproduct</label>
            <input type="text" id="lproduct" name="lproduct">	
			</div>
						     <div><label for="p-status">p-status</label>
            <input type="text" id="p-status" name="p-status">	</div>
						     <div><label for="item">item</label>
            <input type="text" id="item" name="item">	</div>

        
        <button type="submit">Change</button>
    </form>

</center>
<hr>


<center>
<h2>Delete Record</h2>
<form action="../functions/p-delete.php" method="post">
    ID to Delete: <input type="number" name="id" required><br>
    <input type="submit" value="Delete">
</form>

    </center>
	 </div>
</div>


</body>



</html>
