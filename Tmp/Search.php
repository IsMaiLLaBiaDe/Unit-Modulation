<?php



session_start();




if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'UserPlus') {
  // Display the admin.php page

} else {
  // Redirect the user to the login page
  header('Location: login.php');
}

?>

  <!DOCTYPE html>
<html>
<meta char="UTF-8">
<link href="w3.css" rel="stylesheet"></link>
<head><title>OOOO</title></head>
<style>
.html,body{
	line-height: 1.5;
	height: 100%;
	width: 100%;
	overflow: hidden;
	margin: 0;
    padding: 0;
    box-sizing: border-box;
	    justify-content: center;
            align-items: center;
            min-height: 100vh;
	}
	.header{

  padding: 10px;
  text-align: center;
  background: #200;
  color: white;
  	height: 100%;
	width: 100%;
	
	}
	.events{
  flex: 70%;
  max-width: 980px;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin: 0;
  padding: 0;
}
	.footer{
  /* Footer */

  padding: 20px;
  text-align: center;
  background: #425;
  opacity: 80%;
  background: #cc5729;
  font-size: auto;
  height: 100%;
  width: 100%;
  font-size: 19px;
	}
</style>
<body>
<div class="header"><center>News</></div>

  <center><div style="padding-top: 50px;" class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
 <img src="https://images.pexels.com/photos/7527862/pexels-photo-7527862.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
<div class="">
  

  </div>
</div>

<div class="w3-display-container mySlides">
 <img src="https://images.pexels.com/photos/7527856/pexels-photo-7527856.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
 <div class="">

  </div>
</div>

<div class="w3-display-container mySlides">
<img  src="https://images.pexels.com/photos/7527851/pexels-photo-7527851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
<div class="">

  </div>
</div>

<div class="w3-display-container mySlides">
 <img src="https://images.pexels.com/photos/7527851/pexels-photo-7527851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
 <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
<a href="1" >oo</a>
  </div>
</div>

<div class="w3-display-container mySlides">
 <img  src="https://images.pexels.com/photos/7527851/pexels-photo-7527851.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="width:100%">
<div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black"><a href="1" >oo</a>

  </div>
</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
</div>
</center> 
<center><div style="width: 980px;margin-bottom: 10px" class="events">Events<br>
		   <div style="width: 980px;margin-bottom: 10px;"  id="search-container">
        <form method="post" action="">
            <input style="width: 980px;margin-bottom: 10px" type="text" name="search-box" id="search-box" placeholder="Search...">
            <button type="submit" id="search-button">Search</button>
        </form>
    </div>
	<div style="width: 980px;margin-bottom: 10px" id="results-container">
     <?php
	 
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mars";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Search query
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchTerm = $conn->real_escape_string($_POST["search-box"]);

            $sql = "SELECT * FROM events WHERE titles LIKE '%$searchTerm%' OR contents LIKE '%$searchTerm%' OR keywords LIKE '%$searchTerm%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<p><strong>' . $row["titles"] . '</strong><br>' . $row["contents"] . '<br>' . $row["keywords"] . '</p>';
                }
            } else {
                echo '<p>No results found.</p>';
            }
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
	</div></center>
<center><div class="footer"><h8>Mars Tickets Copy Left 23-24</h8></div></center>
</body>

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